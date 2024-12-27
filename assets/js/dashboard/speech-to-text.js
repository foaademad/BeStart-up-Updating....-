const neworeder = () => {
    document.getElementById("editor-area").value = "";
    document.getElementById("fileInput").value = ""; // Clear file input value
    document.getElementById("audio-description").value = "";
    document.getElementById("audio-language").value = "";
    document.getElementById("task-type").value = "";
};

const dropBox = document.getElementById("dropBox");
const fileInput = document.getElementById("fileInput");
const dropText = document.getElementById("dropText");

// Handle drag-and-drop events
dropBox.addEventListener("dragover", (e) => {
    e.preventDefault();
    dropBox.style.borderColor = "#6c63ff";
});

dropBox.addEventListener("dragleave", () => {
    dropBox.style.borderColor = "#ccc";
});

dropBox.addEventListener("drop", (e) => {
    e.preventDefault();
    dropBox.style.borderColor = "#ccc";
    const files = e.dataTransfer.files;
    if (files.length > 0) {
        fileInput.files = e.dataTransfer.files; // Set files to input
        showFile(files[0]);
    }
});

// Handle file browsing
dropText.addEventListener("click", () => {
    fileInput.click();
});

fileInput.addEventListener("change", (e) => {
    const files = e.target.files;
    if (files.length > 0) {
        showFile(files[0]);
    }
});

// Display file information in the drop box
function showFile(file) {
    console.log(file)
    dropBox.innerHTML = `
    <div class="file-info">
      <span>${file.name}</span>
      <span class="delete-icon" id="deleteFile">&times;</span>
      <input type="file" id="fileInput" style="display: none;" />
    </div>
  `;

    // Add functionality to delete the file
    const deleteFileBtn = document.getElementById("deleteFile");
    deleteFileBtn.addEventListener("click", resetDropBox);
}

// Reset the drop box to its original state
function resetDropBox() {
    dropBox.innerHTML = `
    <p id="dropText">Drop Your Documents To Get Analyzed Here Or <span id="browse">Browse</span></p>
    <input type="file" id="fileInput" style="display: none;" />
  `;

    // Reset file input
    fileInput.value = "";

    // Reattach event listeners
    const browse = document.getElementById("browse");
    browse.addEventListener("click", () => fileInput.click());
    dropBox.addEventListener("dragover", (e) => {
        e.preventDefault();
        dropBox.style.borderColor = "#6c63ff";
    });
    dropBox.addEventListener("dragleave", () => {
        dropBox.style.borderColor = "#ccc";
    });
    dropBox.addEventListener("drop", (e) => {
        e.preventDefault();
        dropBox.style.borderColor = "#ccc";
        const files = e.dataTransfer.files;
        if (files.length > 0) {
            fileInput.files = e.dataTransfer.files; // Reassign files to input
            showFile(files[0]);
        }
    });
}


document.querySelector('.new-chat-button').addEventListener('click', function () {
    // Always reselect the fileInput in case the DOM has been updated
    const language = document.getElementById('language').value;
    const instructions = document.getElementById('instructions').value;

    if (!fileInput || fileInput.files.length === 0) {
        alert('Please select a file to transcribe.');
        return;
    }

    const formData = new FormData();
    formData.append('file', fileInput.files[0]); // Append the file
    formData.append('language', language);      // Append language
    formData.append('instructions', instructions); // Append instructions

    fetch('/user/transcribe', {
        method: 'POST',
        body: formData,
        headers: {
            'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]').getAttribute('content')
        }
    })
        .then(response => {
            if (!response.ok) {
                throw new Error('Failed to transcribe audio');
            }
            return response.json();
        })
        .then(data => {
            // Handle successful response
            console.log('Transcription result:', data);
            alert('Transcription completed successfully!');
        })
        .catch(error => {
            // Handle errors
            console.error('Error:', error);
            alert('An error occurred while transcribing the file.');
        });
});

