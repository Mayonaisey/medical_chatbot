<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>HealthyCare Chatbot</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            display: flex;
            flex-direction: column;
            align-items: center;
            background-color: #f4f4f4;
            height: 100vh;
            justify-content: center;
        }

        .chat-container {
            width: 90%;
            max-width: 500px;
            background: #fff;
            border: 1px solid #ccc;
            border-radius: 15px;
            padding: 15px;
            box-shadow: 0px 4px 6px rgba(0, 0, 0, 0.1);
            display: flex;
            flex-direction: column;
            justify-content: space-between;
        }

        .messages {
            height: 400px;
            overflow-y: auto;
            padding: 10px;
            border-radius: 10px;
            background: #f9f9f9;
            margin-bottom: 10px;
            display: flex;
            flex-direction: column;
            gap: 10px;
        }

        .message {
            max-width: 70%;
            padding: 10px 15px;
            border-radius: 15px;
            font-size: 14px;
            position: relative;
            word-wrap: break-word;
        }

        .user {
            align-self: flex-start;
            background: #007BFF;
            color: #fff;
            border-bottom-left-radius: 0;
        }

        .bot {
            align-self: flex-end;
            background: #4CAF50;
            color: #fff;
            border-bottom-right-radius: 0;
        }

        .input-container {
            display: flex;
            gap: 10px;
        }

        input[type="text"] {
            flex-grow: 1;
            padding: 10px;
            border: 1px solid #ddd;
            border-radius: 10px;
            font-size: 14px;
        }

        button {
            padding: 10px 15px;
            background: #007BFF;
            color: #fff;
            border: none;
            border-radius: 10px;
            cursor: pointer;
            font-size: 14px;
        }

        button:hover {
            background: #0056b3;
        }

        /* Smooth scrolling for messages */
        .messages::-webkit-scrollbar {
            width: 5px;
        }

        .messages::-webkit-scrollbar-thumb {
            background: #ccc;
            border-radius: 5px;
        }
    </style>
</head>

<body>
    <div class="chat-container">
        <div class="messages" id="chat-history"></div>
        <div class="input-container">
            <input type="text" id="user-input" placeholder="Type a message..." />
            <button onclick="sendMessage()">Send</button>
        </div>
    </div>
    <script>
        // Function to send the user's message to the backend
        function sendMessage() {
            const userInput = document.getElementById('user-input');
            const chatHistory = document.getElementById('chat-history');

            // Check if input is empty
            if (userInput.value.trim() !== "") {
                // Display user message
                const userMessage = document.createElement('div');
                userMessage.className = 'message user';
                userMessage.textContent = userInput.value;
                chatHistory.appendChild(userMessage);

                // Capture the user's input
                const prompt = userInput.value;

                // Clear input field
                userInput.value = "";

                // Send the prompt to the Flask backend
                fetch("http://127.0.0.1:5000/generate", {
                        method: "POST",
                        headers: {
                            "Content-Type": "application/json"
                        },
                        body: JSON.stringify({
                            prompt: prompt
                        })
                    })
                    .then(response => response.json())
                    .then(data => {
                        // Display bot response
                        const botMessage = document.createElement('div');
                        botMessage.className = 'message bot';
                        if (data.response) {
                            botMessage.textContent = data.response; // AI's response
                        } else {
                            botMessage.textContent = "Sorry, there was an error.";
                        }
                        chatHistory.appendChild(botMessage);

                        // Scroll to the bottom of the chat
                        chatHistory.scrollTop = chatHistory.scrollHeight;
                    })
                    .catch(error => {
                        console.error("Error:", error);
                        const errorMessage = document.createElement('div');
                        errorMessage.className = 'message bot';
                        errorMessage.textContent = "There was an error connecting to the server.";
                        chatHistory.appendChild(errorMessage);

                        // Scroll to the bottom of the chat
                        chatHistory.scrollTop = chatHistory.scrollHeight;
                    });
            }
        }
    </script>
</body>

</html>
