<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>Pakistan Legal Assistant</title>
    <style>
        :root {
            --primary-color: #2c3e50;
            --secondary-color: #3498db;
            --background-color: #f8f9fa;
            --bot-bubble: #ffffff;
            --user-bubble: #3498db;
            --shadow-color: rgba(0,0,0,0.1);
        }

        body {
            font-family: 'Segoe UI', system-ui, -apple-system, sans-serif;
            background: var(--background-color);
            margin: 0;
            height: 100vh;
            display: flex;
            flex-direction: column;
        }

        .chat-container {
            max-width: 1200px;
            margin: 20px auto;
            background: white;
            border-radius: 20px;
            box-shadow: 0 10px 30px var(--shadow-color);
            flex-grow: 1;
            display: flex;
            flex-direction: column;
            width: 95%;
            height: calc(100vh - 40px);
        }

        .chat-header {
            background: var(--primary-color);
            color: white;
            padding: 1.5rem;
            border-radius: 20px 20px 0 0;
            display: flex;
            align-items: center;
            gap: 15px;
        }

        .chat-header img {
            height: 40px;
        }

        .chat-messages {
            flex: 1;
            padding: 20px;
            overflow-y: auto;
            display: flex;
            flex-direction: column;
            gap: 15px;
            background: #f8f9fa;
        }

        .message {
            max-width: 80%;
            padding: 1rem 1.25rem;
            margin: 8px 0;
            line-height: 1.5;
            position: relative;
            animation: fadeIn 0.3s ease-in;
        }

        .bot-message {
            background: var(--bot-bubble);
            border-radius: 15px 15px 15px 3px;
            box-shadow: 0 2px 5px var(--shadow-color);
            border: 1px solid #e9ecef;
        }

        .user-message {
            background: var(--user-bubble);
            color: white;
            border-radius: 15px 15px 3px 15px;
            margin-left: auto;
        }

        .law-card {
            background: #f1f3f5;
            border-radius: 10px;
            padding: 1rem;
            margin: 0.5rem 0;
            border-left: 3px solid var(--secondary-color);
        }

        .lawyer-card {
            background: white;
            border-radius: 15px;
            padding: 1.25rem;
            margin: 1rem 0;
            box-shadow: 0 3px 10px var(--shadow-color);
            border-left: 4px solid var(--secondary-color);
            transition: transform 0.2s;
        }

        .lawyer-card:hover {
            transform: translateY(-2px);
        }

        .lawyer-card h3 {
            color: var(--primary-color);
            margin: 0 0 0.5rem 0;
            font-size: 1.1em;
        }

        .lawyer-details {
            display: grid;
            grid-template-columns: repeat(2, 1fr);
            gap: 0.75rem;
            font-size: 0.9em;
            margin-bottom: 1rem;
        }

        .rating {
            display: flex;
            align-items: center;
            gap: 0.5rem;
        }

        .rating-stars {
            color: #ffd700;
            display: flex;
            gap: 2px;
        }

        .contact-button {
            background: var(--secondary-color);
            color: white;
            border: none;
            padding: 0.5rem 1.25rem;
            border-radius: 25px;
            cursor: pointer;
            display: flex;
            align-items: center;
            gap: 0.5rem;
            transition: opacity 0.3s;
        }

        .contact-button:hover {
            opacity: 0.9;
        }

        .input-container {
            padding: 1.25rem;
            border-top: 1px solid #e9ecef;
            display: flex;
            gap: 0.75rem;
            background: white;
            border-radius: 0 0 20px 20px;
        }

        input {
            flex: 1;
            padding: 0.75rem 1.25rem;
            border: 1px solid #dee2e6;
            border-radius: 25px;
            font-size: 1rem;
            outline: none;
            transition: border-color 0.3s;
        }

        input:focus {
            border-color: var(--secondary-color);
            box-shadow: 0 0 0 3px rgba(52,152,219,0.1);
        }

        button {
            padding: 0.75rem 1.5rem;
            background: var(--secondary-color);
            border: none;
            color: white;
            border-radius: 25px;
            cursor: pointer;
            display: flex;
            align-items: center;
            gap: 0.5rem;
        }

        .typing-indicator {
            display: none;
            padding: 1rem;
            color: #6c757d;
            align-items: center;
            gap: 0.75rem;
        }

        .dot-flashing {
            position: relative;
            width: 8px;
            height: 8px;
            border-radius: 5px;
            background-color: #6c757d;
            animation: dotFlashing 1s infinite linear;
        }

        @keyframes fadeIn {
            from { opacity: 0; transform: translateY(10px); }
            to { opacity: 1; transform: translateY(0); }
        }

        @keyframes dotFlashing {
            0% { background-color: #6c757d; }
            50%, 100% { background-color: rgba(108,117,125,0.2); }
        }

        @media (max-width: 768px) {
            .chat-container {
                border-radius: 0;
                margin: 0;
                width: 100%;
                height: 100vh;
            }
            
            .message {
                max-width: 90%;
            }
        }
    </style>
</head>
<body>
    <div class="chat-container">
        <div class="chat-header">
            <img src="https://upload.wikimedia.org/wikipedia/commons/3/32/Flag_of_Pakistan.svg" alt="Pakistan Flag">
            <h1>Pakistan Legal Assistant</h1>
        </div>
        
        <div class="chat-messages" id="chat-messages">
            <div class="message bot-message">
                Welcome! I'm your AI legal assistant. How can I help you today?
            </div>
        </div>

        <div class="typing-indicator" id="typing">
            <div class="dot-flashing"></div>
            <span>Assistant is typing...</span>
        </div>

        <div class="input-container">
            <input type="text" id="user-input" placeholder="Type your legal query..." />
            <button onclick="sendMessage()">
                <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                    <line x1="22" y1="2" x2="11" y2="13"></line>
                    <polygon points="22 2 15 22 11 13 2 9 22 2"></polygon>
                </svg>
                Send
            </button>
        </div>
    </div>

    <script>
        const chatMessages = document.getElementById('chat-messages');
        const userInput = document.getElementById('user-input');
        const typingIndicator = document.getElementById('typing');

        async function sendMessage() {
            const message = userInput.value.trim();
            if (!message) return;

            appendMessage(message, true);
            userInput.value = '';
            showTyping();

            try {
                const userId = localStorage.getItem('chatUserId') || 'guest_' + Math.random().toString(36).substr(2, 9);
                localStorage.setItem('chatUserId', userId);

                const response = await fetch('/send-message', {
                    method: 'POST',
                    headers: {
                        'Content-Type': 'application/json',
                        'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]').content
                    },
                    body: JSON.stringify({ message, user_id: userId })
                });

                const data = await response.json();
                console.log('Response:', data);
                hideTyping();
                appendMessage(data.message, false, data.laws, data.lawyers);
            } catch (error) {
                hideTyping();
                appendMessage('Error: Please try again.', false);
                console.error('Chat error:', error);
            }
        }

        function appendMessage(text, isUser, laws = [], lawyers = []) {
            const messageDiv = document.createElement('div');
            messageDiv.className = `message ${isUser ? 'user-message' : 'bot-message'}`;

            let content = '';

            // Add the main message text
            content += `<p style="margin-bottom: 1rem; color: #495057;">${text.replace(/\n/g, '<br>')}</p>`;

            // Add laws if present
            if (laws && laws.length > 0) {
                content += laws.map(law => `
                    <div class="law-card">
                        <strong>${law.Name} (Section ${law.Code})</strong><br>
                        <div><strong>Category:</strong> ${law.Category}</div>
                        <div><strong>Punishment:</strong> ${law.Punishments}</div>
                        <div><strong>Applies when:</strong> ${law['Applicable when']}</div>
                    </div>
                `).join('');
            }

            // Add lawyers if present
            if (lawyers && lawyers.length > 0) {
                content += '<p style="margin: 1rem 0; color: #495057;">Suggested lawyers:</p>';
                content += lawyers.map(lawyer => `
                    <div class="lawyer-card">
                        <h3>${lawyer.name}</h3>
                        <div class="lawyer-details">
                            <div><strong>Specialization:</strong> ${lawyer.specialization}</div>
                            <div><strong>Experience:</strong> ${lawyer.experience} years</div>
                            <div class="rating">
                                <strong>Rating:</strong> 
                                <span class="rating-stars">
                                    ${'★'.repeat(Math.floor(lawyer.rating))}${'☆'.repeat(5 - Math.floor(lawyer.rating))}
                                </span>
                                (${lawyer.rating})
                            </div>
                            <div><strong>Location:</strong> ${lawyer.location}</div>
                            <div><strong>Languages:</strong> ${lawyer.languages.join(', ')}</div>
                        </div>
                        <button class="contact-button" onclick="contactLawyer('${lawyer.contact}')">
                            <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                                <path d="M22 16.92v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07 19.5 19.5 0 0 1-6-6 19.79 19.79 0 0 1-3.07-8.67A2 2 0 0 1 4.11 2h3a2 2 0 0 1 2 1.72 12.84 12.84 0 0 0 .7 2.81 2 2 0 0 1-.45 2.11L8.09 9.91a16 16 0 0 0 6 6l1.27-1.27a2 2 0 0 1 2.11-.45 12.84 12.84 0 0 0 2.81.7A2 2 0 0 1 22 16.92z"/>
                            </svg>
                            Contact Lawyer
                        </button>
                    </div>
                `).join('');
            }

            messageDiv.innerHTML = content;
            chatMessages.appendChild(messageDiv);
            chatMessages.scrollTop = chatMessages.scrollHeight;
        }

        function contactLawyer(contactInfo) {
            window.open(`tel:${contactInfo}`, '_blank');
        }

        function showTyping() {
            typingIndicator.style.display = 'flex';
            chatMessages.scrollTop = chatMessages.scrollHeight;
        }

        function hideTyping() {
            typingIndicator.style.display = 'none';
        }
    </script>
</body>
</html>