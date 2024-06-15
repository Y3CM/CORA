<style>
        .chat-container {
            max-width: 600px;
            margin: 50px auto;
            padding: 20px;
            border: 1px solid #ccc;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }
        .messages {
            max-height: 300px;
            overflow-y: auto;
            border-bottom: 1px solid #ccc;
            padding-bottom: 10px;
            margin-bottom: 10px;
        }
        .message {
            padding: 10px;
            margin: 5px 0;
        }
        .message.user {
            text-align: right;
        }
        .message.bot {
            text-align: left;
            background-color: #f1f1f1;
        }
        .input-container {
            display: flex;
            margin-top: 10px;
        }
        .option-button {
            margin: 5px;
            padding: 10px 20px;
            border: none;
            background-color: #007bff;
            color: white;
            border-radius: 5px;
            cursor: pointer;
        }
    </style>