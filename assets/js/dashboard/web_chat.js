const containerChat = document.querySelector('.box-chat ')
const boxChat = document.querySelector('.input-area ')
const inputChat = document.querySelector('.input-area input')
const iconSend = document.querySelector('.input-area button ')


const textArea = document.getElementById("textarea-chat");

function adjustTextAreaHeight() {

    if (textArea.value.length > 0) {
        iconSend.style.pointerEvents = "auto";
        iconSend.style.opacity = "1";
        iconSend.style.cursor = "pointer";
    } else {
        iconSend.style.pointerEvents = "none";
        iconSend.style.opacity = "0.5";
        iconSend.style.cursor = "not-allowed";
    }

    textArea.style.height = "auto";

    const scrollHeight = textArea.scrollHeight;

    if (scrollHeight > parseInt(getComputedStyle(textArea).maxHeight)) {
        textArea.style.height = getComputedStyle(textArea).maxHeight;
    } else {
        textArea.style.height = scrollHeight + "px";
    }
}

textArea.addEventListener("input", adjustTextAreaHeight);

adjustTextAreaHeight();

const clearButton = document.getElementById("clear-btn");
const sendChat = document.getElementById("send-chat")
const allChat = document.querySelector(".all-chat")


const newChat = () => {
    allChat.innerHTML = ""
}



function sendMessage() {
    const question = textArea.value;
    const newMsg = document.createElement("div");
    const welcome = document.querySelector(".welcome")

    if(welcome){
        welcome.style.display = 'none';
    }
    if (question.trim() === "") return;


    newMsg.className = "user";
    newMsg.innerHTML = `
            <div class="d-flex gap-2">
              <p>
                ${textArea.value}
              </p>
          </div>`


    // Append the user message to the chat
    allChat.appendChild(newMsg);

    const result = document.createElement("div");
    result.className = "prompt-area-chat";

    const iconDiv = document.createElement("div");
    iconDiv.className = "icon";

    const spanElement = document.createElement("span");

    const imgElement = document.createElement("img");
    imgElement.src = chatLogoUrl; // URL for the chat logo
    imgElement.alt = "Bestartup"; // Alt text
    imgElement.style.borderRadius = "50%";
    imgElement.style.width = "40px";
    imgElement.style.height = "40px";

    spanElement.appendChild(imgElement);
    iconDiv.appendChild(spanElement);

    const outputDiv = document.createElement("pre");
    outputDiv.id = "msg-output";
    outputDiv.classList.add('pre-load');

    outputDiv.innerHTML =`
      <div class="typing">
          <span></span>
          <span></span>
          <span></span>
      </div>
    `;

    result.appendChild(iconDiv);

    result.appendChild(outputDiv);

    allChat.appendChild(result);

    imgElement.onload = () => {
    // Define the data to send
    const requestData = {
        question: question.trim(),
        url: document.getElementById("link").value, // Get URL from the form
    };

    // Send the POST request using Fetch API
    fetch('/user/process-user-message', {
        method: 'POST',
        headers: {
            'Content-Type': 'application/json',
            'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]').content, // Include CSRF token
        },
        body: JSON.stringify(requestData),
    })
        .then(response => {
            if (!response.ok) {
                throw new Error(`HTTP error! status: ${response.status}`);
            }
            return response.json(); // Parse JSON response
        })
        .then(data => {
            // Update the chatbot's response
            outputDiv.classList.remove('pre-load'); // Remove loading class
            outputDiv.textContent = data.response; // Set the response text
        })
        .catch(error => {
            console.error('Error sending message:', error);
            outputDiv.classList.remove('pre-load');
            outputDiv.textContent = 'An error occurred while processing your request.';
        });
        // Clear the input after sending
        textArea.value = "";
        textArea.style.height = "auto";
        iconSend.style.pointerEvents = "none";
        iconSend.style.opacity = "0.5";
        iconSend.style.cursor = "not-allowed";

    };
}


// Send message on button click
sendChat.addEventListener("click", sendMessage);

// Send message on pressing Enter
textArea.addEventListener("keydown", (event) => {
    if (event.key === "Enter" && !event.shiftKey) { // Avoid triggering if Shift+Enter is used
        event.preventDefault(); // Prevent the default action (adding a new line)
        sendMessage();
    }
});


// Function to format content (e.g., highlight code blocks)
function formatContent(content) {
    return content.replace(/```(.*?)```/g, '<span class="highlighted-code">$1</span>');
}

