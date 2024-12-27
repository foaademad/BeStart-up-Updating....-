let loading = false;

document.addEventListener("click", function (event) {
    if (event.target && event.target.id === "edit-btn") {
        const paragraph = event.target.closest(".paragraph").querySelector(".paragraph-content");

        const currentlyEditableParagraph = document.querySelector(".paragraph-content[contenteditable='true']");
        if (currentlyEditableParagraph && currentlyEditableParagraph !== paragraph) {
            currentlyEditableParagraph.contentEditable = "false";
            currentlyEditableParagraph.style.border = "none";
            currentlyEditableParagraph.style.outline = "none";
            currentlyEditableParagraph.classList.remove("gradient-box");
        }
        const isEditable = paragraph.isContentEditable;

        if (!isEditable) {
            paragraph.style.outline = "none";
            paragraph.classList.add("gradient-box");
        } else {
            paragraph.classList.remove("gradient-box");
        }
        paragraph.contentEditable = !isEditable;

    }
    else if (event.target && event.target.id === "regenerate-btn") {
        const paragraph = event.target.closest(".paragraph").querySelector(".paragraph-content");

        paragraph.style.outline = "none";
        paragraph.classList.add("gradient-box");

        console.log(paragraph)

        const parent = paragraph.parentElement;
        console.log(parent)
        // Add loading overlay
        const loadingOverlay = document.createElement('div');
            loadingOverlay.className = "loading-overlay";
            loadingOverlay.id = "loading-overlay";
            loadingOverlay.innerHTML = `
            <span class="loading-text">
                <span class='pre-text'>Generating content</span>
                <span class="dot">••</span>
            </span>
        `;
        parent.appendChild(loadingOverlay);
        let grand = parent.parentElement
        const actionDiv = grand.querySelector(".actionOfParagraph");

        actionDiv.remove();
        loading = true;

        const data = {
            paragraph: paragraph.innerText.trim() // Send the paragraph content
        };
        // Send POST request using fetch
        fetch('/user/regenerate', {
            method: 'POST',
            headers: {
                'Content-Type': 'application/json',
                'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]').getAttribute('content'),
            },
            body: JSON.stringify(data), // Send data as JSON
        })
        .then(response => {
            if (!response.ok) {
                throw new Error(`HTTP error! Status: ${response.status}`);
            }
            return response.json(); // Parse JSON response
        })
        .then(responseData => {
            console.log('Response:', responseData);

            paragraph.innerText = responseData.content;
            loading = false;
            if (loadingOverlay) {
                loadingOverlay.remove();
            }
            paragraph.classList.remove("gradient-box");
        })
        .catch(error => {
            console.error('Error:', error);

            // Handle errors
            paragraph.innerText = 'Error regenerating content.';
        });
    }
});

// =======================================================
// animation
// document.addEventListener("DOMContentLoaded", () => {
//     const loadingScreen = document.querySelector(".loading-screen");
//     const content = document.querySelector(".all-chat");
//
//     // إخفاء شاشة التحميل
//     setTimeout(() => {
//         if (loadingScreen && content) {
//             // التحقق من وجود العناصر
//             loadingScreen.style.display = "none";
//             content.classList.add("visible");
//         }
//     }, 2000); // يظهر المحتوى بعد 2 ثانية
// });
// <canvas id="myChart2"></canvas>

// change the ratio of cilcle
function updateDynamicCircles() {
    const circles = document.querySelectorAll(".circle"); // تحديد جميع الدوائر

    circles.forEach((circle) => {
        const circleValue = circle.querySelector(".circleValue"); // تحديد النص داخل الدائرة
        const value = circleValue.textContent.trim(); // قراءة القيمة النصية مثل "7/10"

        // تقسيم النص إلى بسط ومقام
        const [numerator, denominator] = value.split("/").map(Number);

        if (!isNaN(numerator) && !isNaN(denominator) && denominator > 0) {
            // حساب النسبة المئوية
            const percentage = (numerator / denominator) * 100;

            // تحديث الخلفية لكل دائرة بناءً على النسبة
            circle.style.background = `conic-gradient(#a88cfd ${percentage}%, #d3d3d3 0%)`;
        } else {
            console.error("البيانات غير صالحة. تأكد من إدخال قيمة صحيحة مثل 7/10.");
        }
    });
}

// استدعاء الدالة لتحديث جميع الدوائر
updateDynamicCircles();
/////////////////////////////////////////////////////
// loading message
// عند تحميل الصفحة


// window.addEventListener("load", function () {
//     const loadingOverlay = document.getElementById("loading-overlay");
//
//     // إخفاء عنصر التحميل بعد 2 ثانية
//     setTimeout(() => {
//         loadingOverlay.style.display = "none";
//         loading = false;
//     }, 2000); // المدة بالمللي ثانية
// });
// charts
// const ctx = document.getElementById("myChart").getContext("2d");
// const data = {
//     labels: [
//         'Red',
//         'Blue',
//         'Yellow'
//     ],
//     datasets: [{
//         label: 'My First Dataset',
//         data: [300, 50, 100],
//         backgroundColor: [
//             'rgb(255, 99, 132)',
//             'rgb(54, 162, 235)',
//             'rgb(255, 205, 86)'
//         ],
//         hoverOffset: 4
//     }]
// };
// const myChart = new Chart(ctx, {
//     type: "doughnut",
//     data: data,
// });

// const ctx2 = document.getElementById("myChart2").getContext("2d");
// const data2 = {
//     labels: ["يناير", "فبراير", "مارس", "أبريل", "مايو", "يونيو"],
//     datasets: [{
//         label: 'My First Dataset',
//         data: [65, 59, 80, 81, 56, 55, 40],
//         fill: false,
//         borderColor: 'rgb(75, 192, 192)',
//         tension: 0.1
//     }]
// };
// const myChart2 = new Chart(ctx2, {
//     type: "line",
//     data: data2,
// });



document.addEventListener("DOMContentLoaded", function () {
    // إنشاء الأزرار التي ستظهر عند التمرير فوق العنصر
    const actionButtonsHTML = `
    <div class="actionOfParagraph" style="display: flex; gap: 10px; margin-top: 10px;">
      <button id="edit-btn">
        <svg xmlns="http://www.w3.org/2000/svg" width="22" height="22" viewBox="0 0 22 22" fill="none">
          <path d="M19.2801 7.69118L14.6104 2.98529M19.2801 7.69118L13.4448 13.5716C12.6758 14.3466 11.7425 14.9584 10.6709 15.1446C9.58894 15.3327 8.24623 15.3953 7.6059 14.75C6.96559 14.1047 7.0277 12.7515 7.21431 11.6612C7.39912 10.5813 8.00622 9.64071 8.77514 8.86576L14.6104 2.98529M19.2801 7.69118C19.2801 7.69118 22.7822 4.16176 20.4474 1.80882C18.1126 -0.544118 14.6104 2.98529 14.6104 2.98529M21.096 11C21.096 18.6471 18.7612 21 11.173 21C3.58482 21 1.25 18.6471 1.25 11C1.25 3.35294 3.58482 1 11.173 1" stroke="#fff" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
        </svg>
        Edit
      </button>
      <button id="regenerate-btn">
        <svg xmlns="http://www.w3.org/2000/svg" width="22" height="22" viewBox="0 0 22 22" fill="none">
          <path d="M3.90793 9.42105L8.11851 5.21053M1.63899 7.23396C0.45367 6.04867 0.45367 4.12691 1.63899 2.94161C2.8243 1.75631 4.74608 1.75631 5.93139 2.94161L18.8086 15.8186C19.9939 17.004 19.9939 18.9257 18.8086 20.1111C17.6233 21.2963 15.7015 21.2963 14.5162 20.1111L1.63899 7.23396ZM14.5396 1.32336C14.7091 0.892213 15.317 0.892213 15.4864 1.32336L15.9394 2.47629C15.9912 2.60792 16.095 2.71212 16.2262 2.76403L17.3748 3.21874C17.8044 3.38878 17.8044 3.99895 17.3748 4.16899L16.2262 4.62371C16.095 4.67562 15.9912 4.77981 15.9394 4.91144L15.4865 6.06437C15.317 6.49552 14.7091 6.49552 14.5396 6.06438L14.0867 4.91144C14.0349 4.77981 13.9311 4.67562 13.7999 4.62371L12.6513 4.16899C12.2217 3.99895 12.2217 3.38878 12.6513 3.21874L13.7999 2.76403C13.9311 2.71212 14.0349 2.60792 14.0867 2.47629L14.5396 1.32336Z" stroke="#fff" stroke-width="1.5" stroke-linecap="round"/>
        </svg>
        Regenerate
      </button>
    </div>
  `;

    // اختيار جميع العناصر التي تحتوي على class="paragraph"
    const paragraphs = document.querySelectorAll(".paragraph");
    paragraphs.forEach((paragraph) => {
        // عند تمرير الفأرة (hover) على العنصر، يتم إضافة الأزرار بشكل منفصل لكل فقرة
        paragraph.addEventListener("mouseenter", function () {
            // التحقق من حالة التحميل أولاً
            if (!loading) {
                // التحقق إذا كان العنصر لا يحتوي بالفعل على الأزرار
                if (!paragraph.querySelector(".actionOfParagraph")) {
                    paragraph.insertAdjacentHTML("beforeend", actionButtonsHTML);
                }
            }
        });

        // عند مغادرة الفأرة (mouseleave)، يتم إزالة الأزرار بشكل منفصل لكل فقرة
        paragraph.addEventListener("mouseleave", function () {
            const actionDiv = paragraph.querySelector(".actionOfParagraph");
            if (actionDiv) {
                actionDiv.remove();
            }
        });
    });
});


// تحديد كل عناصر القائمة والكونتنت
const tabs = document.querySelectorAll('.tab');
const contents = document.querySelectorAll('.contentofbody');

tabs.forEach(tab => {
    tab.addEventListener('click', () => {
        // إزالة active من جميع العناصر
        tabs.forEach(item => item.classList.remove('active'));
        contents.forEach(content => content.classList.remove('active'));

        // إضافة active للعنصر الذي تم الضغط عليه
        tab.classList.add('active');

        // إظهار المحتوى الخاص بالعنصر
        const target = document.getElementById(tab.dataset.target);
        target.classList.add('active');
    });
});
