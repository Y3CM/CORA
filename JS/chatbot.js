function sendMessage() {
    const userInput = document.getElementById('userInput');
    const message = userInput.value.trim();
    if (message === '') return;

    appendMessage('user', message);

    fetch('../CORA/functions/bot.php', {
        method: 'POST',
        headers: { 'Content-Type': 'application/json' },
        body: JSON.stringify({ message: message })
    })
    .then(response => response.json())
    .then(data => {
        appendMessage('bot', data.response);
        showOptions(data.options);
    });

    userInput.value = '';
}

function sendOption(option) {
    appendMessage('user', option);

    fetch('../CORA/functions/bot.php', {
        method: 'POST',
        headers: { 'Content-Type': 'application/json' },
        body: JSON.stringify({ message: option })
    })
    .then(response => response.json())
    .then(data => {
        appendMessage('bot', data.response);
        showOptions(data.options);
    });
}

function appendMessage(sender, message) {
    const messages = document.getElementById('messages');
    const messageElement = document.createElement('div');
    messageElement.classList.add('message', sender, 'card', 'p-2', 'mb-2');
    messageElement.textContent = message;
    messages.appendChild(messageElement);
    messages.scrollTop = messages.scrollHeight;
}

function showOptions(options) {
    const optionsContainer = document.getElementById('options-container');
    optionsContainer.innerHTML = '';
    if (options && options.length > 0) {
        options.forEach(option => {
            const button = document.createElement('button');
            button.classList.add('option-button', 'btn', 'btn-info', 'm-1');
            button.textContent = option;
            button.onclick = () => sendOption(option);
            optionsContainer.appendChild(button);
        });
    }
}