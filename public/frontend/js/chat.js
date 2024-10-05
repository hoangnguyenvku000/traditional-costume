// Get the elements
var chatWindow = document.getElementById("chatWindow");
var toggleChatLink = document.getElementById("toggleChatLink");
var closeChatBtn = document.getElementById("closeChatBtn");
var accountsList = document.getElementById("accountsList");
var chatContent = document.getElementById("chatContent");

// Toggle the chat window when the "Tin nhắn" link is clicked
toggleChatLink?.addEventListener("click", function() {
    if (chatWindow.style.display === "none" || chatWindow.style.display === "") {
        chatWindow.style.display = "block"; // Show the chat window
    } else {
        chatWindow.style.display = "none"; // Hide the chat window
    }
});

// Close the chat window when the close button is clicked
closeChatBtn.addEventListener("click", function() {
    chatWindow.style.display = "none"; // Hide the chat window
});

// Handle click on account to open chat with that account
document.querySelectorAll('.account').forEach(function(account) {
    account.addEventListener('click', function() {
        var accountId = this.getAttribute('data-account-id');
        openChatWindow(accountId);
    });
});

function openChatWindow(accountId) {
    // Hide the accounts list
    accountsList.style.display = "none";
    
    // Show the chat content
    chatContent.style.display = "block";
    
    // Add placeholder content for now (you can replace this with actual chat messages)
    chatContent.innerHTML = `
        <div class="chat-messages">
            <div class="message">Chat with Account ${accountId}</div>
            <!-- Add more dynamic messages here -->
        </div>
        <input type="text" id="messageInput" placeholder="Type a message..." />
        <button id="sendMessageBtn">Send</button>
    `;

    // Handle sending a message (placeholder logic)
    var sendMessageBtn = document.getElementById('sendMessageBtn');
    var messageInput = document.getElementById('messageInput');
    sendMessageBtn.addEventListener('click', function() {
        var messageText = messageInput.value;
        if (messageText.trim() !== '') {
            var chatMessages = chatContent.querySelector('.chat-messages');
            var newMessage = document.createElement('div');
            newMessage.className = 'message me';
            newMessage.textContent = messageText;
            chatMessages.appendChild(newMessage);
            messageInput.value = ''; // Clear the input
        }
    });
}


// Message storage
var messages = [];

// Function to add a new message
function addMessage(content, isMe) {
    var message = {
        content: content,
        isMe: isMe
    };
    messages.push(message);
    displayMessages();
}

// Display messages in the chat window
function displayMessages() {
    var chatMessages = document.getElementById('chatMessages');
    chatMessages.innerHTML = '';  // Clear existing messages
    messages.forEach(function(message) {
        var messageDiv = document.createElement('div');
        messageDiv.className = 'message' + (message.isMe ? ' me' : ' other');
        messageDiv.textContent = message.content;
        chatMessages.appendChild(messageDiv);
    });
    chatMessages.scrollTop = chatMessages.scrollHeight; // Auto-scroll to latest message
}

// Get elements
var sendMessageBtn = document.getElementById('sendMessageBtn');
var messageInput = document.getElementById('messageInput');

// Event listener for sending messages
sendMessageBtn.addEventListener('click', function() {
    var messageText = messageInput.value;
    if (messageText.trim() !== '') {
        addMessage(messageText, true);  // 'true' indicates message from 'me'
        messageInput.value = ''; // Clear the input
    }
});

// Example: Add a received message (could be from a webhook or socket event)
// Simulating a message from another user
setTimeout(function() {
    addMessage("Hello! How can I help you today?", false);  // 'false' indicates message not from 'me'
}, 2000);
