document.addEventListener("DOMContentLoaded", function () {
    const userButtonsContainer = document.getElementById('user-buttons');
    const chatBoxContainer = document.getElementById('chat-box-container');
    let chatMessages = {};

    function openChat(chatName) {
        userButtonsContainer.style.display = 'none';

        const chatBox = document.createElement('div');
        chatBox.classList.add('chat-box');
        chatBox.innerHTML = `
            <div class="chat-header">
            <button class="close-chat">\u2B05</button>
                <h3>${chatName}</h3>
            </div>
            <div class="chat-messages" id="chat-messages-${chatName}"></div>
            <div class="input-box">
                <input type="text" class="message-input" placeholder="Type your message...">
                <button class="send-button">Send</button>
            </div>
        `;

        chatBoxContainer.appendChild(chatBox);

        const chatMessagesDiv = chatBox.querySelector(`#chat-messages-${chatName}`);

        if (chatMessages[chatName]) {
            chatMessages[chatName].forEach(message => {
                addMessageToChat(chatName, message);
            });
        }

        const closeButton = chatBox.querySelector('.close-chat');
        closeButton.addEventListener('click', function () {
            userButtonsContainer.style.display = 'block';
            chatBoxContainer.removeChild(chatBox);
        });

        const sendButton = chatBox.querySelector('.send-button');
        const messageInput = chatBox.querySelector('.message-input');
        sendButton.addEventListener('click', function () {
            const message = messageInput.value.trim();
            if (message !== "") {
                addMessageToChat("Me", message, chatName);
                if (!chatMessages[chatName]) {
                    chatMessages[chatName] = [];
                }
                chatMessages[chatName].push(message);
                messageInput.value = "";
            }
        });
    }

    function addMessageToChat(sender, message, chatName) {
        const chatMessagesDiv = document.getElementById(`chat-messages-${chatName}`);
        const messageElement = document.createElement('div');
        messageElement.classList.add('message');
        if (sender === 'Me') {
            messageElement.classList.add('sent');
        }
        messageElement.textContent = `${sender}: ${message}`;
        chatMessagesDiv.appendChild(messageElement);
    }

    const userButtons = document.querySelectorAll('.user-button');
    userButtons.forEach(function (button) {
        button.addEventListener('click', function () {
            const chatName = button.getAttribute('data-chat');
            openChat(chatName);
        });
    });
});

document.addEventListener("DOMContentLoaded", function () {
    const header = document.querySelector('.header');

    window.addEventListener('scroll', function () {
        if (window.scrollY > 0) {
            header.classList.add('fixed-header');
        } else {
            header.classList.remove('fixed-header');
        }
    });
});

function generateStars() {
    const numStars = 1000;
    const headers = document.getElementsByClassName('header');

    function createStar() {
        var star = document.createElement('div');
        star.classList.add('star');
        const headerHeight = headers[0].offsetHeight;
        star.style.left = Math.random() * 100 + 'vw';
        star.style.top = Math.random() * headerHeight + 'px';
        star.style.animationDuration = Math.random() * 2 + 1 + 's';
        return star;
    }

    for (let j = 0; j < headers.length; j++) {
        const header = headers[j];
        for (let i = 0; i < numStars; i++) {
            var starHeader = createStar();
            header.appendChild(starHeader);
        }
    }
}

window.addEventListener('load', function () {
    if (document.querySelector('header')) {
        generateStars();
    }
});
