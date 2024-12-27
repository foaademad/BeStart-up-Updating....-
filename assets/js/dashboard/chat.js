const containerChat = document.querySelector('.box-chat ')
const boxChat = document.querySelector('.input-area ')
const inputChat = document.querySelector('.input-area input')
const iconSend = document.querySelector('.input-area button ')
const uploadIcon = document.querySelector('.input-area .actions #upload')
const fileInput = document.getElementById("file-input");


const textArea = document.getElementById("textarea-chat");
const user_prompt = document.getElementById("prompt");

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

uploadIcon.addEventListener("click", () => {
    fileInput.click();
});



const clearButton = document.getElementById("clear-btn");

function clearFileInput(event) {
    const target = event.target.closest(".clear-btn");
    if (target) {
        const pdfPreview = target.closest(".pdf-preview");
        if (pdfPreview) pdfPreview.remove();

        fileInput.value = "";

        iconSend.style.opacity = 0.5;
    }
}

let file
fileInput.addEventListener("change", () => {
    file = fileInput.files[0];

    if (file) {
        const pdfPreview = document.createElement("div");
        pdfPreview.className = "pdf-preview";

        const fileURL = URL.createObjectURL(file);
        iconSend.style.opacity = 1;

        // إضافة محتوى المعاينة
        pdfPreview.innerHTML = `
      <span>
        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 36 36" fill="none" class="h-10 w-10 flex-shrink-0" width="36" height="36">
          <rect width="36" height="36" rx="6" fill="#FF5588"></rect>
          <path d="M19.6663 9.66663H12.9997C12.5576 9.66663 12.1337 9.84222 11.8212 10.1548C11.5086 10.4673 11.333 10.8913 11.333 11.3333V24.6666C11.333 25.1087 11.5086 25.5326 11.8212 25.8451C12.1337 26.1577 12.5576 26.3333 12.9997 26.3333H22.9997C23.4417 26.3333 23.8656 26.1577 24.1782 25.8451C24.4907 25.5326 24.6663 25.1087 24.6663 24.6666V14.6666L19.6663 9.66663Z" stroke="white" stroke-width="1.66667" stroke-linecap="round" stroke-linejoin="round"></path>
          <path d="M19.667 9.66663V14.6666H24.667" stroke="white" stroke-width="1.66667" stroke-linecap="round" stroke-linejoin="round"></path>
          <path d="M21.3337 18.8334H14.667" stroke="white" stroke-width="1.66667" stroke-linecap="round" stroke-linejoin="round"></path>
          <path d="M21.3337 22.1666H14.667" stroke="white" stroke-width="1.66667" stroke-linecap="round" stroke-linejoin="round"></path>
          <path d="M16.3337 15.5H15.5003H14.667" stroke="white" stroke-width="1.66667" stroke-linecap="round" stroke-linejoin="round"></path>
        </svg>
      </span>
      <p>${file.name}</p>
      <button class="clear-btn">
      <span>
        <svg width="29" height="28" viewBox="0 0 29 28" fill="none" xmlns="http://www.w3.org/2000/svg" class="icon-xs">
          <path fill-rule="evenodd" clip-rule="evenodd" d="M7.30286 6.80256C7.89516 6.21026 8.85546 6.21026 9.44775 6.80256L14.5003 11.8551L19.5529 6.80256C20.1452 6.21026 21.1055 6.21026 21.6978 6.80256C22.2901 7.39485 22.2901 8.35515 21.6978 8.94745L16.6452 14L21.6978 19.0526C22.2901 19.6449 22.2901 20.6052 21.6978 21.1974C21.1055 21.7897 20.1452 21.7897 19.5529 21.1974L14.5003 16.1449L9.44775 21.1974C8.85546 21.7897 7.89516 21.7897 7.30286 21.1974C6.71057 20.6052 6.71057 19.6449 7.30286 19.0526L12.3554 14L7.30286 8.94745C6.71057 8.35515 6.71057 7.39485 7.30286 6.80256Z" fill="currentColor"></path>
        </svg>
        </span>
      </button>
    `;

        containerChat.prepend(pdfPreview);
        iconSend.style.pointerEvents = "auto";
        iconSend.style.opacity = "1";
        iconSend.style.cursor = "pointer";
    }
});

containerChat.addEventListener("click", clearFileInput);



const sendChat = document.getElementById("send-chat")
const allChat = document.querySelector(".all-chat")


const newChat = () => {
    allChat.innerHTML = ""
}



function sendMessage() {
    const question = textArea.value;
    const prompt = user_prompt.value;
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
    imgElement.alt = chatName; // Alt text
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
        const url = `/user/send?question=${encodeURIComponent(question)}&prompt=${encodeURIComponent(prompt)}}`;

        // Fetch the entire content from the server
        fetch(url)
            .then(response => response.json())
            .then(data => {
                // Get the full content from the response
                let content = data.content;

                // Split content based on triple backticks
                const chunks = content.split('```');
                let currentIndex = 0;

                const typingElement = outputDiv.querySelector('.typing');
                if (typingElement) {
                    typingElement.remove(); // Removes the element with the "typing" class
                    outputDiv.classList.remove('pre-load');
                }

                const streamContent = () => {
                    if (currentIndex < chunks.length) {
                        let chunk = chunks[currentIndex];
                        outputDiv.style.marginBottom = '10px'; // Add spacing between chunks

                        // Check if the chunk is code or plain text
                        if (currentIndex % 2 === 1) {
                            // Odd index means it's a code block
                            const preElement = document.createElement('pre');
                            const codeElement = document.createElement('code');


                            // Preserve the formatting of the code block
                            codeElement.textContent = chunk;

                            preElement.appendChild(codeElement);
                            outputDiv.appendChild(preElement);

                            // Apply syntax highlighting
                            hljs.highlightElement(codeElement);
                        } else {

                            // Even index means it's plain text
                            outputDiv.innerHTML += chunk;
                        }

                        // outputDiv.appendChild(outputMsg);
                        result.appendChild(outputDiv);

                        // Move to the next chunk
                        currentIndex++;
                        setTimeout(streamContent, 100); // Stream next chunk after 100ms
                    }
                };

                // Start the content streaming
                streamContent();
            })
            .catch(error => console.error('Error fetching data:', error));

        // Clear the input after sending
        textArea.value = "";
        fileInput.value = "";
        file = null;
        textArea.style.height = "auto";
        iconSend.style.pointerEvents = "none";
        iconSend.style.opacity = "0.5";
        iconSend.style.cursor = "not-allowed";

        // Remove the PDF preview if it exists
        if (document.querySelector(".pdf-preview")) {
            document.querySelector(".pdf-preview").remove();
        }
    }
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


function toggleHistory() {
    document.querySelector(".history-box").classList.toggle("open");
    document.querySelector(".overlay-history").classList.toggle("open")
}

document.querySelector(".overlay-history").addEventListener("click", () => {
    document.querySelector(".overlay-history").classList.remove("open");
    document.querySelector(".history-box").classList.remove("open")
})
