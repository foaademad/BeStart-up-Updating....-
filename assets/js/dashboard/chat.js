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
        // Check if file is video or audio
        if (file.type.startsWith("video/") || file.type.startsWith("audio/")) {
            fileInput.value = ""; // Clear the file input
            return;
        }

        const pdfPreview = document.createElement("div");
        pdfPreview.className = "pdf-preview";
        const fileURL = URL.createObjectURL(file);
        iconSend.style.opacity = 1;

        // Function to get appropriate icon based on file type
        const getFileIcon = (fileType) => {
            if (fileType === "application/pdf") {
                return `<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M7 18H17V16H7V18Z" fill="currentColor"/>
                    <path d="M17 14H7V12H17V14Z" fill="currentColor"/>
                    <path d="M7 10H11V8H7V10Z" fill="currentColor"/>
                    <path fill-rule="evenodd" clip-rule="evenodd" d="M6 2C4.34315 2 3 3.34315 3 5V19C3 20.6569 4.34315 22 6 22H18C19.6569 22 21 20.6569 21 19V9C21 5.13401 17.866 2 14 2H6ZM6 4H13V9H19V19C19 19.5523 18.5523 20 18 20H6C5.44772 20 5 19.5523 5 19V5C5 4.44772 5.44772 4 6 4ZM15 4.10002C16.6113 4.4271 17.9413 5.52906 18.584 7H15V4.10002Z" fill="currentColor"/>
                </svg>`;
            } else if (fileType === "application/vnd.ms-powerpoint" || fileType === "application/vnd.openxmlformats-officedocument.presentationml.presentation") {
                return `<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path fill-rule="evenodd" clip-rule="evenodd" d="M6 2C4.34315 2 3 3.34315 3 5V19C3 20.6569 4.34315 22 6 22H18C19.6569 22 21 20.6569 21 19V9C21 5.13401 17.866 2 14 2H6ZM6 4H13V9H19V19C19 19.5523 18.5523 20 18 20H6C5.44772 20 5 19.5523 5 19V5C5 4.44772 5.44772 4 6 4ZM15 4.10002C16.6113 4.4271 17.9413 5.52906 18.584 7H15V4.10002Z" fill="#D04423"/>
                    <path d="M12 12H8V14H10V18H12V12Z" fill="#D04423"/>
                </svg>`;
            } else if (fileType === "application/vnd.ms-excel" || fileType === "application/vnd.openxmlformats-officedocument.spreadsheetml.sheet") {
                return `<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path fill-rule="evenodd" clip-rule="evenodd" d="M6 2C4.34315 2 3 3.34315 3 5V19C3 20.6569 4.34315 22 6 22H18C19.6569 22 21 20.6569 21 19V9C21 5.13401 17.866 2 14 2H6ZM6 4H13V9H19V19C19 19.5523 18.5523 20 18 20H6C5.44772 20 5 19.5523 5 19V5C5 4.44772 5.44772 4 6 4ZM15 4.10002C16.6113 4.4271 17.9413 5.52906 18.584 7H15V4.10002Z" fill="#217346"/>
                    <path d="M8 12L10 16H12L10 12L12 8H10L8 12Z" fill="#217346"/>
                    <path d="M14 12L16 16H18L16 12L18 8H16L14 12Z" fill="#217346"/>
                </svg>`;
            } else {
                return `<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path fill-rule="evenodd" clip-rule="evenodd" d="M6 2C4.34315 2 3 3.34315 3 5V19C3 20.6569 4.34315 22 6 22H18C19.6569 22 21 20.6569 21 19V9C21 5.13401 17.866 2 14 2H6ZM6 4H13V9H19V19C19 19.5523 18.5523 20 18 20H6C5.44772 20 5 19.5523 5 19V5C5 4.44772 5.44772 4 6 4ZM15 4.10002C16.6113 4.4271 17.9413 5.52906 18.584 7H15V4.10002Z" fill="currentColor"/>
                </svg>`;
            }
        };

        if (file.type.startsWith("image/")) {
            pdfPreview.innerHTML = `
                <img src="${fileURL}" alt="Uploaded Image" class="uploaded-image-preview" style="max-width: 100px; max-height: 100px; object-fit: cover;">
                <button class="clear-btn">
                    <span>
                        <svg width="29" height="28" viewBox="0 0 29 28" fill="none" xmlns="http://www.w3.org/2000/svg" class="icon-xs">
                            <path fill-rule="evenodd" clip-rule="evenodd" d="M7.30286 6.80256C7.89516 6.21026 8.85546 6.21026 9.44775 6.80256L14.5003 11.8551L19.5529 6.80256C20.1452 6.21026 21.1055 6.21026 21.6978 6.80256C22.2901 7.39485 22.2901 8.35515 21.6978 8.94745L16.6452 14L21.6978 19.0526C22.2901 19.6449 22.2901 20.6052 21.6978 21.1974C21.1055 21.7897 20.1452 21.7897 19.5529 21.1974L14.5003 16.1449L9.44775 21.1974C8.85546 21.7897 7.89516 21.7897 7.30286 21.1974C6.71057 20.6052 6.71057 19.6449 7.30286 19.0526L12.3554 14L7.30286 8.94745C6.71057 8.35515 6.71057 7.39485 7.30286 6.80256Z" fill="currentColor"></path>
                        </svg>
                    </span>
                </button>
            `;
        } else {
            pdfPreview.innerHTML = `
                <div class="file-preview-container" style="display: flex; align-items: center; gap: 8px;">
                    <span class="file-icon">${getFileIcon(file.type)}</span>
                    <p>${file.name}</p>
                </div>
                <button class="clear-btn">
                    <span>
                        <svg width="29" height="28" viewBox="0 0 29 28" fill="none" xmlns="http://www.w3.org/2000/svg" class="icon-xs">
                            <path fill-rule="evenodd" clip-rule="evenodd" d="M7.30286 6.80256C7.89516 6.21026 8.85546 6.21026 9.44775 6.80256L14.5003 11.8551L19.5529 6.80256C20.1452 6.21026 21.1055 6.21026 21.6978 6.80256C22.2901 7.39485 22.2901 8.35515 21.6978 8.94745L16.6452 14L21.6978 19.0526C22.2901 19.6449 22.2901 20.6052 21.6978 21.1974C21.1055 21.7897 20.1452 21.7897 19.5529 21.1974L14.5003 16.1449L9.44775 21.1974C8.85546 21.7897 7.89516 21.7897 7.30286 21.1974C6.71057 20.6052 6.71057 19.6449 7.30286 19.0526L12.3554 14L7.30286 8.94745C6.71057 8.35515 6.71057 7.39485 7.30286 6.80256Z" fill="currentColor"></path>
                        </svg>
                    </span>
                </button>
            `;
        }

        containerChat.prepend(pdfPreview);
        iconSend.style.pointerEvents = "auto";
        iconSend.style.opacity = "1";
        iconSend.style.cursor = "pointer";
    }
});



containerChat.addEventListener("click", clearFileInput);



const sendChat = document.getElementById("send-chat")
const allChat = document.querySelector(".all-chat")


// const newChat = () => {
//     allChat.innerHTML = ""
// }



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


























// =======================================================================
// make a new chat 
const chatListSmall = document.getElementById("chat-list-small");
const chatListLarge = document.getElementById("chat-list-large");
let chatCounter = 0;

// Event listener for small chat list
chatListSmall.addEventListener("click", function (event) {
    handleChatItemClick(event, chatListSmall, chatListLarge);
});

// Event listener for large chat list
chatListLarge.addEventListener("click", function (event) {
    handleChatItemClick(event, chatListLarge, chatListSmall);
});

// Handle chat item click
function handleChatItemClick(event, sourceList, targetList) {
    if (event.target && event.target.matches(".chat-item")) {
        console.log("Chat item clicked");

        // Remove active class from all items in both lists
        document.querySelectorAll(".chat-item").forEach((item) => {
            item.classList.remove("active");
        });

        // Add active class to clicked item
        event.target.classList.add("active");

        // Sync active state with other list
        const clickedIndex = Array.from(sourceList.children).indexOf(event.target);
        targetList.children[clickedIndex].classList.add("active");
    }
}

// Create new chat when button is clicked
function newChat() {
    console.log("Button clicked");

    const chatContainer = document.getElementById("chat");
    if (!chatContainer || chatContainer.children.length === 0) {
        console.log("No messages available to create new chat item.");
        return;
    }

    chatCounter++;

    // Create and add new chat item to small list
    const newChatItem = createChatItem(chatCounter);
    chatListSmall.prepend(newChatItem);

    // Create and add new chat item to large list
    const newChatItemClone = createChatItem(chatCounter);
    chatListLarge.prepend(newChatItemClone);

    // Remove active class from all items
    document.querySelectorAll(".chat-item").forEach((item) => {
        item.classList.remove("active");
    });

    // Add active class to new items
    newChatItem.classList.add("active");
    newChatItemClone.classList.add("active");
}

// Handle first message in chat
function handleFirstMessage() {
    // Check if chat history is empty
    if (chatListSmall.children.length === 0) {
        chatCounter++;

        // Create first chat item
        const newChatItem = createChatItem(chatCounter);
        const newChatItemClone = createChatItem(chatCounter);

        // Add active class
        newChatItem.classList.add("active");
        newChatItemClone.classList.add("active");

        // Add to both lists
        chatListSmall.prepend(newChatItem);
        chatListLarge.prepend(newChatItemClone);
    }
}

// Create chat item element
function createChatItem(counter) {
    const newChatItem = document.createElement("li");
    newChatItem.classList.add("chat-item");
    newChatItem.innerHTML = `<i class="far fa-comment-alt"></i> Chat topic #${counter}`;
    return newChatItem;
}

// Send message event listener
document.getElementById("send-chat").addEventListener("click", function () {
    const textarea = document.getElementById("textarea-chat");
    const message = textarea.value.trim();

    if (message) {
        // Check and create first history item if needed
        handleFirstMessage();

        // Your existing send message logic here
        // sendMessage(message);

        // Clear textarea
        textarea.value = "";
    }
});

// File upload event listener
document.getElementById("upload").addEventListener("click", function () {
    const fileInput = document.getElementById("file-input");
    fileInput.click();

    fileInput.addEventListener("change", function () {
        if (this.files && this.files[0]) {
            // Check and create first history item if needed
            handleFirstMessage();

            // Your existing file upload logic here
            // uploadFile(this.files[0]);
        }
    });
});

// Delete active chat
function deleteActiveChat() {
    const activeSmall = chatListSmall.querySelector(".chat-item.active");
    const activeLarge = chatListLarge.querySelector(".chat-item.active");

    if (activeSmall) {
        activeSmall.remove();
    }
    if (activeLarge) {
        activeLarge.remove();
    }
}












































// ===================================================================
// remove item and chat 
// تعريف القوائم
// وظيفة لحذف العنصر النشط وجعل العنصر الذي تحته هو النشط
function deleteActiveChat() {
    // البحث عن العنصر النشط في القائمة الكبيرة
    const activeChatLarge = chatListLarge.querySelector(".chat-item.active");
    // البحث عن العنصر النشط في القائمة الصغيرة
    const activeChatSmall = chatListSmall.querySelector(".chat-item.active");

    // إذا لم يوجد عنصر نشط في أي من القائمتين، لا تفعل شيئًا
    if (!activeChatLarge && !activeChatSmall) {
        console.log("No active chat to delete.");
        return;
    }

    // تحديد العنصر التالي في القائمة الكبيرة
    const nextChatLarge = activeChatLarge ? activeChatLarge.nextElementSibling : null;
    // تحديد العنصر التالي في القائمة الصغيرة
    const nextChatSmall = activeChatSmall ? activeChatSmall.nextElementSibling : null;

    // حذف العنصر النشط من القائمتين إذا كان موجودًا
    if (activeChatLarge) {
        chatListLarge.removeChild(activeChatLarge);
    }
    if (activeChatSmall) {
        chatListSmall.removeChild(activeChatSmall);
    }

    // إذا وُجد عنصر التالي في القائمة الكبيرة، اجعله نشطًا
    if (nextChatLarge) {
        nextChatLarge.classList.add("active");
    }
    // إذا وُجد عنصر التالي في القائمة الصغيرة، اجعله نشطًا
    if (nextChatSmall) {
        nextChatSmall.classList.add("active");
    }
}
