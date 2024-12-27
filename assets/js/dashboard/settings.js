// Select all sidebar links and sections
const sidebarLinks = document.querySelectorAll('.profile-links a');
const sections = document.querySelectorAll('.main-content .section');

// Add event listeners to each sidebar link
sidebarLinks.forEach((link, index) => {
    link.addEventListener('click', (e) => {
        e.preventDefault();
        sidebarLinks.forEach((link) => link.classList.remove('active'));
        sections.forEach((section) => section.classList.remove('active'));

        link.classList.add('active');
        sections[index].classList.add('active');
    });
});



document.getElementById("information-form").addEventListener("submit", function (event) {
    event.preventDefault(); // منع الإرسال الافتراضي للنموذج

    let isValid = true;

    document.querySelectorAll(".error-message").forEach((msg) => {
        msg.textContent = "";
    });

    const name = document.getElementById("name").value.trim();
    const email = document.getElementById("email").value.trim();
    const phone = document.getElementById("phone").value.trim();
    const country = document.getElementById("country").value.trim();

    if (name === "") {
        isValid = false;
        document.getElementById("name-error").textContent = "Full Name is required.";
    }

    const emailPattern = /^[a-zA-Z0-9._%+-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,}$/;

    if (email === "") {
        isValid = false;
        document.getElementById("email-error").textContent = "Email Address is required.";
    } else if (!emailPattern.test(email)) {
        isValid = false;
        document.getElementById("email-error").textContent = "Please enter a valid email address.";
    }

    const phonePattern = /^[0-9]{11}$/;
    if (phone === "") {
        isValid = false;
        document.getElementById("phone-error").textContent = "Phone Number is required.";
    } else if (!phonePattern.test(phone)) {
        isValid = false;
        document.getElementById("phone-error").textContent = "Please enter a valid phone number (11 digits).";
    }

    if (country === "") {
        isValid = false;
        document.getElementById("referral-error").textContent = "Referral Link is required.";
    }

    if (isValid) {
        // Send data via AJAX
        fetch('/update', {
            method: 'POST',
            headers: {
                'Content-Type': 'application/json',
                'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]').getAttribute('content'),
            },
            body: JSON.stringify({
                name: name,
                email: email,
                phone_number: phone,
                country: country,
            }),
        })
            .then(response => {
                if (!response.ok) {
                    return response.json().then(err => { throw err; });
                }
                return response.json();
            })
            .then(data => {
                if (data.success) {
                    alert(data.message); // Display success message
                }
            })
            .catch(error => {
                if (error.errors) {
                    // Display validation errors from the server
                    Object.keys(error.errors).forEach(key => {
                        const errorField = document.getElementById(`${key}-error`);
                        if (errorField) {
                            errorField.textContent = error.errors[key][0];
                        }
                    });
                } else {
                    alert("An unexpected error occurred. Please try again.");
                }
            });
    }
});

document.getElementById("name").addEventListener("input", function () {
    const errorMessage = document.getElementById("name-error");
    if (this.value.trim() === "") {
        errorMessage.textContent = "Full Name is required.";
    } else {
        errorMessage.textContent = "";
    }
});

document.getElementById("email").addEventListener("input", function () {
    const errorMessage = document.getElementById("email-error");
    const emailPattern = /^[a-zA-Z0-9._%+-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,}$/;
    if (this.value.trim() === "") {
        errorMessage.textContent = "Email Address is required.";
    } else if (!emailPattern.test(this.value)) {
        errorMessage.textContent = "Please enter a valid email address.";
    } else {
        errorMessage.textContent = "";
    }
});

document.getElementById("phone").addEventListener("input", function () {
    const errorMessage = document.getElementById("phone-error");
    const phonePattern = /^[0-9]{11}$/;
    if (this.value.trim() === "") {
        errorMessage.textContent = "Phone Number is required.";
    } else if (!phonePattern.test(this.value)) {
        errorMessage.textContent = "Please enter a valid phone number (11 digits).";
    } else {
        errorMessage.textContent = "";
    }
});

document.getElementById("country").addEventListener("input", function () {
    const errorMessage = document.getElementById("referral-error");
    if (this.value.trim() === "") {
        errorMessage.textContent = "Country Link is required.";
    } else {
        errorMessage.textContent = "";
    }
});





document.querySelectorAll('.toggle-icon').forEach(icon => {
    icon.addEventListener('click', function() {
        const inputField = this.closest('.input-filled-new').querySelector('input');

        if (inputField) {
            if (inputField.type === 'password') {
                inputField.type = 'text';
            } else {
                inputField.type = 'password';
            }
        } else {
            console.error("Input field not found!");
        }
    });
});


document.getElementById("change-password").addEventListener("submit", function(event) {
    event.preventDefault();

    let isValid = true;

    document.querySelectorAll(".error-message").forEach((msg) => {
        msg.textContent = "";
    });

    const currentPassword = document.getElementById("current-password").value.trim();
    const newPassword = document.getElementById("new-password").value.trim();
    const confirmPassword = document.getElementById("confirm-password").value.trim();

    if (currentPassword === "") {
        isValid = false;
        document.getElementById("current-password-error").textContent = "Current password is required.";
    }

    if (newPassword === "") {
        isValid = false;
        document.getElementById("new-password-error").textContent = "New password is required.";
    } else if (newPassword.length < 6) {
        isValid = false;
        document.getElementById("new-password-error").textContent = "New password must be at least 6 characters.";
    }

    if (confirmPassword === "") {
        isValid = false;
        document.getElementById("confirm-password-error").textContent = "Please confirm your new password.";
    } else if (confirmPassword !== newPassword) {
        isValid = false;
        document.getElementById("confirm-password-error").textContent = "Passwords do not match.";
    }

    // If the form is valid, send the request
    if (isValid) {
        const formData = {
            current_password: currentPassword,
            new_password: newPassword,
            new_password_confirmation: confirmPassword,
        };

        fetch("/update-password", {
            method: "POST",
            headers: {
                "Content-Type": "application/json",
                "X-CSRF-TOKEN": document.querySelector('meta[name="csrf-token"]').getAttribute("content"),
            },
            body: JSON.stringify(formData),
        })
            .then((response) => {
                console.log(response.status, response.headers, response); // Inspect response
                if (!response.ok) {
                    // If response is not ok, parse error response
                    return response.json().then((errorData) => {
                        throw errorData; // Forward validation errors
                    });
                }
                return response.json(); // If response is ok, parse success JSON
            })
            .then((data) => {
                console.log("Success Response:", data); // Debug response
                if (data.message) {
                    alert(data.message); // Success message
                } else {
                    alert("Password updated successfully!");
                }
                document.getElementById("change-password").reset();
            })
            .catch((errors) => {
                console.error("Errors:", errors); // Log errors
                if (errors && errors.errors) {
                    if (errors.errors.current_password) {
                        document.getElementById("current-password-error").textContent = errors.errors.current_password[0];
                    }
                    if (errors.errors.new_password) {
                        document.getElementById("new-password-error").textContent = errors.errors.new_password[0];
                    }
                } else {
                    alert("An unexpected error occurred. Please check the console.");
                }
            });
    }

});

