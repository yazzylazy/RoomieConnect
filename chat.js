function sendMessage() {
    const messageInput = document.getElementById('messageInput');
    let message = messageInput.value.trim();
    if (message !== '') {
        const chatbox = document.getElementById('chatbox');
        const newMessage = document.createElement('div');
        newMessage.classList.add('message');
        newMessage.innerHTML = `<span class="sender">You:</span> ${message}<div class="time">${getCurrentTime()}</div>`;
        chatbox.appendChild(newMessage);
        messageInput.value = '';

        //messages
        if (message.toLowerCase() === 'hi') {
            addBotResponse('Hello there!');
        } else if (message.toLowerCase() === 'how are you?') {
            addBotResponse('I am good, how are you!');
        } else if (message.toLowerCase() === 'I am doing well, comp sci is a really cool program!') {
            addBotResponse('It is! Just a lot of work haha. What made you choose your program?');
        } else if (message.toLowerCase() === 'bye') {
            addBotResponse('Goodbye! Have a great day!');
        } else {
            //default response (empty for now)
            addBotResponse(" ");
        }
    }
}

function addBotResponse(response) {
    const chatbox = document.getElementById('chatbox');
    const responseMessage = document.createElement('div');
    responseMessage.classList.add('message');
    responseMessage.innerHTML = `<span class="sender">Match 1:</span> ${response}<div class="time">${getCurrentTime()}</div>`;
    chatbox.appendChild(responseMessage);
}

//shows time message was sent
function getCurrentTime() {
    const now = new Date();
    const hours = String(now.getHours()).padStart(2, '0');
    const minutes = String(now.getMinutes()).padStart(2, '0');
    return `${hours}:${minutes}`;
}
