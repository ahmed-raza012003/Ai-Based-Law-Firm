from flask import Flask, request, jsonify
import pandas as pd
from fuzzywuzzy import fuzz
import mysql.connector
from mysql.connector import Error

app = Flask(__name__)

# In-memory state storage
user_states = {}

# MySQL configuration
db_config = {
    'host': '127.0.0.1',
    'port': 3306,
    'database': 'lawfirm',
    'user': 'root',
    'password': '',
}

# Load laws from CSV
def load_legal_data():
    try:
        df = pd.read_csv('laws.csv')
        print("Laws loaded:", df.to_dict('records'))
        return df
    except Exception as e:
        print(f"Error loading CSV: {str(e)}")
        return pd.DataFrame([])

legal_db = load_legal_data()

def connect_to_db():
    try:
        connection = mysql.connector.connect(**db_config)
        if connection.is_connected():
            print("Connected to MySQL database")
            return connection
    except Error as e:
        print(f"Error connecting to MySQL: {str(e)}")
        return None

def fetch_lawyers(category, city):
    connection = connect_to_db()
    if not connection:
        return []
    
    try:
        cursor = connection.cursor(dictionary=True)
        query = """
        SELECT u.name, u.phone_number AS contact, l.city, c.name AS category
        FROM lawyers l
        JOIN users u ON l.user_id = u.id
        JOIN lawyer_has_categories lc ON l.id = lc.lawyer_id
        JOIN categories c ON lc.category_id = c.id
        WHERE c.name = %s AND LOWER(l.city) = LOWER(%s) AND l.status = 'available'
        LIMIT 5
        """
        cursor.execute(query, (category, city))
        lawyers = cursor.fetchall()
        lawyers = [
            {
                'name': lawyer['name'],
                'specialization': lawyer['category'],
                'contact': lawyer['contact'] if lawyer['contact'] else 'Not provided',
                'city': lawyer['city']
            }
            for lawyer in lawyers
        ]
        print(f"Fetched lawyers: {lawyers}")
        return lawyers
    except Error as e:
        print(f"Error fetching lawyers: {str(e)}")
        return []
    finally:
        if connection.is_connected():
            cursor.close()
            connection.close()
            print("MySQL connection closed")

def find_relevant_laws(query):
    query = query.lower()
    results = []
    for _, row in legal_db.iterrows():
        combined_text = f"{row['Code']} {row['Name']} {row['Category']} {row['Punishments']} {row['Applicable when']}".lower()
        score = fuzz.token_set_ratio(query, combined_text)
        if "murder" in query and "murder" in combined_text:
            score += 20
        if "riot" in query and "riot" in combined_text:
            score += 20
        if "police" in query and "police" in combined_text:
            score += 20
        if "defense" in query and "self-defense" in combined_text:
            score += 30
        if score > 40:
            results.append((score, row.to_dict()))
    seen = set()
    return [law for _, law in sorted(results, reverse=True) if law['Code'] not in seen and not seen.add(law['Code'])][:3]

@app.route('/chat', methods=['POST'])
def chat():
    try:
        data = request.get_json()
        user_id = data.get('user_id', 'default')
        message = data.get('message', '').strip()

        if not message:
            return jsonify({'message': 'Please send a message.', 'user_id': user_id}), 400

        if user_id not in user_states:
            user_states[user_id] = {
                'state': 0,
                'inputs': [],
                'laws': [],
                'category': None,
                'city': None
            }

        state_data = user_states[user_id]
        state_data['inputs'].append(message)
        print(f"User: {user_id}, State: {state_data['state']}, Input: {message}")

        # Emergency check
        emergency_keywords = ['suicide', 'emergency', 'help']
        if any(kw in message.lower() for kw in emergency_keywords):
            response = {
                'message': (
                    "🚨 Emergency Assistance:\n"
                    "1. Police: 15\n2. Rescue: 1122\n"
                    "3. Suicide Prevention: 042-35761999\n"
                    "4. Women Protection: 1099\n\n"
                    "For legal advice, please describe your situation."
                ),
                'user_id': user_id
            }
            print(f"Response: {response}")
            return jsonify(response), 200

        # Direct lawyer lookup
        if "give me lawyers in" in message.lower():
            city = message.lower().replace("give me lawyers in", "").strip()
            lawyers = fetch_lawyers("Criminal Laws", city)
            if lawyers:
                response = {
                    'message': (
                        f"Here are lawyers in {city} from our database:\n" +
                        "\n".join([f"- {l['name']} ({l['specialization']}) - {l['contact']}" for l in lawyers])
                    ),
                    'lawyers': lawyers,
                    'user_id': user_id
                }
            else:
                response = {
                    'message': f"No lawyers found in {city} in our database.",
                    'user_id': user_id
                }
            print(f"Response: {response}")
            return jsonify(response), 200

        # State machine
        if state_data['state'] == 0:
            state_data['state'] = 1
            response = {
                'message': (
                    "🇵🇰 Welcome to Pakistan Legal Assistant!\n\n"
                    "Tell me about your legal issue (e.g., 'I hit someone in a riot') or ask for lawyers (e.g., 'Give me lawyers in Lahore')."
                ),
                'user_id': user_id
            }

        elif state_data['state'] == 1:
            laws = find_relevant_laws(message)
            if laws:
                state_data['laws'] = laws
                state_data['state'] = 2
                laws_text = "\n".join([
                    f"📜 {law['Name']} (Section {law['Code']}):\n"
                    f"   - Punishment: {law['Punishments']}\n"
                    f"   - Applies when: {law['Applicable when']}"
                    for law in laws
                ])
                response = {
                    'message': (
                        "Based on your input, here are possible laws that might apply:\n"
                        f"{laws_text}\n\n"
                        "⚠️ I’m an AI agent, not a lawyer. This is an educated guess, not a perfect legal opinion.\n"
                        "Which city are you in? I can suggest lawyers."
                    ),
                    'laws': laws,
                    'user_id': user_id
                }
            else:
                response = {
                    'message': (
                        "I couldn’t find a clear match. Please provide more detail (e.g., where it happened, any weapons involved, or intent).\n"
                        "⚠️ I’m an AI agent, not a lawyer, so I might need more context."
                    ),
                    'user_id': user_id
                }

        elif state_data['state'] == 2:
            state_data['city'] = message
            state_data['state'] = 3
            laws = state_data['laws']
            city = state_data['city']
            category = laws[0]['Category'] if laws else 'Criminal Laws'
            city_lawyers = fetch_lawyers(category, city)
            
            laws_text = "\n".join([
                f"📜 {law['Name']} (Section {law['Code']}):\n"
                f"   - Punishment: {law['Punishments']}\n"
                f"   - Applies when: {law['Applicable when']}"
                for law in laws
            ])
            response = {
                'message': (
                    "Here’s my final suggestion based on your situation:\n"
                    f"{laws_text}\n\n"
                    "⚠️ I’m an AI agent, not a lawyer. This is an educated guess, not a perfect legal opinion.\n"
                ),
                'laws': laws,
                'user_id': user_id
            }
            if city_lawyers:
                response['lawyers'] = city_lawyers
                response['message'] += (
                    "Here are lawyers in your city from our database:\n" +
                    "\n".join([f"- {l['name']} ({l['specialization']}) - {l['contact']}" for l in city_lawyers])
                )
            else:
                response['message'] += f"No lawyers found in {city} for {category} cases in our database."
            del user_states[user_id]  # Reset after completion

        print(f"Response: {response}")
        return jsonify(response), 200

    except Exception as e:
        print(f"Error: {str(e)}")
        return jsonify({'message': 'Something went wrong. Please try again.'}), 500

@app.route('/health', methods=['GET'])
def health_check():
    return jsonify({'status': 'ok'}), 200

if __name__ == '__main__':
    app.run(host="0.0.0.0", port=5000, debug=True)