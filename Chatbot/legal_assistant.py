import pandas as pd
from sentence_transformers import SentenceTransformer
from sklearn.metrics.pairwise import cosine_similarity
import numpy as np
import sys
import json
import re

# Load the CSV file
def load_data(file_path):
    try:
        df = pd.read_csv(file_path)
        return df
    except Exception as e:
        print(f"Error loading CSV: {e}", file=sys.stderr)
        return None

# Prepare the text data
def prepare_data(df):
    df['text'] = (df['Code'].astype(str) + ' ' + 
                  df['Name'] + ' ' + 
                  df['Category'] + ' ' + 
                  df['Punishments'] + ' ' + 
                  df['Applicable when'])
    return df

# Determine if clarification is needed and generate a question
def needs_clarification(query, conversation):
    query = query.lower()
    # Keywords that trigger specific follow-up questions
    murder_keywords = ['murder', 'kill', 'killed', 'homicide']
    theft_keywords = ['stole', 'steal', 'theft', 'rob']
    assault_keywords = ['assault', 'attack', 'hit', 'beat']
    
    if any(keyword in query for keyword in murder_keywords):
        if 'self-defense' in query or 'self defense' in query:
            return "Were you in immediate danger, and did you use reasonable force to protect yourself?"
        if not conversation.get('asked_intent', False):
            return "Can you explain why and how it happened? For example, was it intentional, accidental, or in self-defense?"
        if not conversation.get('asked_circumstances', False):
            return "Can you provide more details, like where it happened or what led to the event?"
    elif any(keyword in query for keyword in theft_keywords):
        if not conversation.get('asked_intent', False):
            return "Was the item taken with permission, or did you intend to keep it permanently?"
    elif any(keyword in query for keyword in assault_keywords):
        if not conversation.get('asked_intent', False):
            return "Was the action in response to a threat, or what was the context of the incident?"
    
    # If no specific clarification needed, assume we have enough info
    return None

# Find matching laws based on the full conversation
def find_relevant_laws(conversation_text, df, model):
    texts = [conversation_text] + df['text'].tolist()
    embeddings = model.encode(texts, show_progress_bar=False)
    query_embedding = embeddings[0]
    law_embeddings = embeddings[1:]
    similarities = cosine_similarity([query_embedding], law_embeddings)[0]
    
    # Filter laws with high similarity (threshold > 0.7)
    threshold = 0.7
    results = []
    for idx, score in enumerate(similarities):
        if score > threshold:
            law = df.iloc[idx]
            results.append({
                'Code': str(law['Code']),
                'Name': law['Name'],
                'Category': law['Category'],
                'Punishments': law['Punishments'],
                'Applicable when': law['Applicable when'],
                'Similarity Score': float(score)
            })
    
    # Sort by similarity and limit to 1-2 laws
    results = sorted(results, key=lambda x: x['Similarity Score'], reverse=True)[:2]
    return results

def main():
    # Check for command-line arguments: query and conversation state
    if len(sys.argv) < 2:
        print(json.dumps({'error': 'No query provided'}), file=sys.stderr)
        sys.exit(1)

    query = sys.argv[1]
    conversation = {}
    if len(sys.argv) > 2:
        try:
            conversation = json.loads(sys.argv[2])
        except json.JSONDecodeError:
            conversation = {}

    # Initialize conversation if empty
    if not conversation:
        conversation = {
            'history': [],
            'asked_intent': False,
            'asked_circumstances': False
        }

    # Add current query to history
    conversation['history'].append(query)

    # Load data
    file_path = 'laws.csv'
    df = load_data(file_path)
    if df is None:
        print(json.dumps({'error': 'Failed to load data'}), file=sys.stderr)
        sys.exit(1)

    df = prepare_data(df)
    model = SentenceTransformer('all-MiniLM-L6-v2')

    # Check if clarification is needed
    clarification_question = needs_clarification(query, conversation)
    if clarification_question:
        # Update conversation state
        if 'intent' in clarification_question.lower():
            conversation['asked_intent'] = True
        elif 'details' in clarification_question.lower():
            conversation['asked_circumstances'] = True
        
        # Return the question and updated conversation
        print(json.dumps({
            'question': clarification_question,
            'conversation': conversation
        }))
        sys.exit(0)

    # If no clarification needed, find laws
    conversation_text = ' '.join(conversation['history'])
    laws = find_relevant_laws(conversation_text, df, model)
    
    # Output final response
    print(json.dumps({
        'laws': laws,
        'conversation': conversation
    }))

if __name__ == '__main__':
    main()