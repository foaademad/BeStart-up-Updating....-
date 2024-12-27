// const sections = document.querySelectorAll(".section");
// const steps = document.querySelectorAll(".step");
// const nextButton = document.getElementById("btn-next");
// const prevButton = document.getElementById("btn-prev");
// const progress = document.querySelector(".progress-bar .progress");
//
// let currentStep = 0; // البداية من القسم الأول
// let ProgressStep = 1; // البداية من القسم الأول
//
// function updateSteps() {
//
//     steps.forEach((step, index) => {
//         step.classList[index < ProgressStep ? "add" : "remove"]("active");
//     });
//
//     // Update vertical progress height
//     progress.style.height = `${((ProgressStep - 1) / (steps.length - 1)) * 100}%`;
//     progress.style.width = `${((ProgressStep - 1) / (steps.length - 1)) * 100}%`;
// }
//
//
// // تحديث الأقسام والكرات
// const updateSections = () => {
//     // تحديث الأقسام
//     sections.forEach((section, index) => {
//         section.classList.toggle("active", index === currentStep);
//     });
//
//     // تحديث الكرات
//     steps.forEach((step, index) => {
//         step.classList.toggle("active", index <= currentStep);
//     });
//
//     // تعطيل زر السابق إذا كان في القسم الأول
//     prevButton.disabled = currentStep === 0;
//
//     // تغيير نص زر "التالي" إلى "إرسال" عند الوصول إلى القسم الأخير
//     nextButton.innerText = currentStep === sections.length - 1 ? "Submit" : "Next";
// };
//
// // التحقق من صحة القسم الحالي
// const validateCurrentSection = () => {
//     const currentSection = sections[currentStep];
//     const inputs = currentSection.querySelectorAll("input[required], select[required], textarea[required]");
//     let isValid = true;
//
//     // التحقق من كل الحقول المطلوبة
//     inputs.forEach((input) => {
//         if (!input.checkValidity()) {
//             isValid = false;
//             input.classList.add("invalid"); // إضافة تنسيق للحقول غير الصالحة
//         } else {
//             input.classList.remove("invalid"); // إزالة التنسيق إذا أصبح الحقل صالحًا
//         }
//     });
//
//     return isValid;
// };
//
// // حدث عند الضغط على زر "التالي"
// nextButton.addEventListener("click", () => {
//     if (validateCurrentSection()) {
//         if (currentStep < sections.length - 1) {
//             currentStep++;
//             ProgressStep++;
//             updateSections();
//             updateSteps()
//
//         } else {
//             // إرسال البيانات عند الضغط على زر "إرسال"
//             alert("Form Submitted!");
//         }
//     } else {
//         alert("Please fill in all required fields before proceeding.");
//     }
// });
//
// // حدث عند الضغط على زر "السابق"
// prevButton.addEventListener("click", () => {
//     if (currentStep > 0) {
//         currentStep--;
//         ProgressStep--;
//         updateSteps()
//         updateSections();
//     }
// });
//
// // تشغيل التحديث عند تحميل الصفحة
// updateSections();

const steps = document.querySelectorAll('.step');
const sections = document.querySelectorAll('.section');
const progressBar = document.querySelector('.progress');
const nextBtn = document.getElementById('btn-next');
const prevBtn = document.getElementById('btn-prev');
let currentStep = 0;
const form = document.getElementById('business-plan-form');

function validateStep() {
    const currentSection = sections[currentStep];
    let isValid = true;

    if (currentStep === 0) {
        isValid = validateStep1();
    }
    else if (currentStep === 1) {
        isValid = validateStep2();
    }
    else if (currentStep === 2) {
        isValid = validateStep3();
    }
    else if (currentStep === 3) {
        isValid = validateStep4();
    }
    else if (currentStep === 4) {
        isValid = validateStep5();
    }

    return isValid;
}

// Validation for Step 1
function validateStep1() {
    let isValid = true;
    const businessTypeInputs = document.querySelectorAll('input[name="business-type"]');
    const businessTypeError = document.getElementById('business-type-error');
    if (![...businessTypeInputs].some(input => input.checked)) {
        businessTypeError.textContent = 'Please select if this is an existing or upcoming business.';
        isValid = false;
    } else {
        businessTypeError.textContent = '';
    }

    const businessPlanInputs = document.querySelectorAll('input[name="business-plan"]');
    const businessPlanError = document.getElementById('business-plan-error');
    if (![...businessPlanInputs].some(input => input.checked)) {
        businessPlanError.textContent = 'Please select a reason for creating this business plan.';
        isValid = false;
    } else {
        businessPlanError.textContent = '';
    }

    return isValid;
}

// Validation for Step 2
function validateStep2() {
    let isValid = true;
    const businessName = document.getElementById('business-name');
    if (!businessName.value.trim()) {
        showError(businessName, 'Business name is required.');
        isValid = false;
    } else {
        removeError(businessName);
    }

    const businessDescription = document.getElementById('business-description');
    if (!businessDescription.value.trim()) {
        showError(businessDescription, 'Business description is required.');
        isValid = false;
    } else {
        removeError(businessDescription);
    }

    const valueStartup = document.getElementById('value-startup');
    if (!valueStartup.value.trim()) {
        showError(valueStartup, 'Core value proposition is required.');
        isValid = false;
    } else {
        removeError(valueStartup);
    }

    const numberEmployees = document.getElementById('number-employees');
    if (!numberEmployees.value.trim() || isNaN(numberEmployees.value) || numberEmployees.value <= 0) {
        showError(numberEmployees, 'Please enter a valid number of employees.');
        isValid = false;
    } else {
        removeError(numberEmployees);
    }

    const typeServiceInputs = document.querySelectorAll('input[name="type-service"]');
    const typeServiceError = document.getElementById('type-service-error');
    if (![...typeServiceInputs].some(input => input.checked)) {
        typeServiceError.textContent = 'Please select whether you offer a product or service.';
        isValid = false;
    } else {
        typeServiceError.textContent = '';
    }

    const typeCustomerInputs = document.querySelectorAll('input[name="Availability"]');
    const typeCustomerError = document.getElementById('type-customer-error');
    if (![...typeCustomerInputs].some(input => input.checked)) {
        typeCustomerError.textContent = 'Please select how customers get your product or service.';
        isValid = false;
    } else {
        typeCustomerError.textContent = '';
    }

    return isValid;
}

// Validation for Step 3
function validateStep3() {
    let isValid = true;
    const customerLocation = document.getElementById('business-location');
    if (customerLocation.value === "Select your business location") {
        showError(customerLocation, 'Please select a valid business location.');
        isValid = false;
    } else {
        removeError(customerLocation);
    }

    const customerDescription = document.getElementById('customer-description');
    if (!customerDescription.value.trim()) {
        showError(customerDescription, 'Customer Group 1 Description is required.');
        isValid = false;
    } else {
        removeError(customerDescription);
    }


    // Get all checkboxes
    const incomeLevelInputs = document.querySelectorAll('input[name="customer_income_level[]"]');
    const errorContainer = document.getElementById('income-level-error');

    // Check if at least one checkbox is checked
    if (![...incomeLevelInputs].some(input => input.checked)) {
        errorContainer.style.display = 'block';
        errorContainer.textContent = 'Please select at least one income level.';
        isValid = false;
    } else {
        errorContainer.style.display = 'none';
        errorContainer.textContent = '';
    }

    return isValid;
}

// Validation for Step 4
function validateStep4() {
    let isValid = true;
    const productName = document.getElementById('Product-Service-name');
    if (!productName.value.trim()) {
        showError(productName, 'Product or Service 1 Name is required.');
        isValid = false;
    } else {
        removeError(productName);
    }

    const productDescription = document.getElementById('Product-service-description');
    if (productDescription.value === "Select option") {
        showError(productDescription, 'Please select a valid Product or Service Description for 1.');
        isValid = false;
    } else {
        removeError(productDescription);
    }

    return isValid;
}

// Validation for Step 5
function validateStep5() {
    let isValid = true;
    const successDriver = document.getElementById('success-driver');
    if (!successDriver.value.trim()) {
        showError(successDriver, 'Success Driver is required.');
        isValid = false;
    } else {
        removeError(successDriver);
    }

    const weaknessesPoint = document.getElementById('weaknesses-point');
    if (!weaknessesPoint.value.trim()) {
        showError(weaknessesPoint, 'Weaknesses Point is required.');
        isValid = false;
    } else {
        removeError(weaknessesPoint);
    }

    return isValid;
}

function showError(input, message) {
    let error = input.nextElementSibling;
    if (!error || !error.classList.contains('error-message')) {
        error = document.createElement('span');
        error.classList.add('error-message');
        input.parentNode.appendChild(error);
    }
    error.textContent = message;
    input.classList.add('invalid');
}

function removeError(input) {
    const error = input.nextElementSibling;
    if (error && error.classList.contains('error-message')) {
        error.remove();
    }
    input.classList.remove('invalid');
}

function updateForm() {
    sections.forEach((section, index) => {
        section.classList.toggle('active', index === currentStep);
    });

    steps.forEach((step, index) => {
        step.classList.toggle('active', index <= currentStep);
    });

    prevBtn.disabled = currentStep === 0;
    progressBar.style.height = `${(currentStep / (steps.length - 1)) * 100}%`;
    progressBar.style.width = `${(currentStep / (steps.length - 1)) * 100}%`;
    nextBtn.textContent = currentStep === steps.length - 1 ? 'Submit' : 'Next';
}

nextBtn.addEventListener('click', (event) => {
    event.preventDefault();

    if (validateStep()) {
        if (currentStep < steps.length - 1) {
            currentStep++;
            updateForm();
        } else {
            document.getElementById('business-plan-form').style.display = 'none';
            document.getElementById('loading').style.display = 'block';

            const formData = new FormData(form);

            fetch('/user/business-plan/submit', {
                method: 'POST',
                body: formData,
                headers: {
                    'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]').getAttribute('content'),
                }
            })
            .then(response => response.json())
            .then(data => {
                console.log(data.message)
                if (data.redirect_url) {
                    window.location.href = data.redirect_url; // Redirect to the new page
                } else {
                    console.log(data.message); // Log success message
                }
            })
            .catch(error => console.error('Error:', error))
            .finally(() => {
                // Show the form again if the request failed
                document.getElementById('form-content').style.display = 'flex';
                document.getElementById('loading').style.display = 'none';
            });
        }
    }
});

prevBtn.addEventListener('click', () => {
    event.preventDefault();
    if (currentStep > 0) {
        currentStep--;
        updateForm();
    }
});

updateForm();
