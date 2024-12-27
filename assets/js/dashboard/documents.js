document.addEventListener("DOMContentLoaded", () => {
    const filterButtons = document.querySelectorAll(".filter-btn");
    const tableBody = document.getElementById("table-body");
    const rows = Array.from(tableBody.querySelectorAll("tr"));

    const pageInfo = document.getElementById("page-info");
    const prevBtn = document.getElementById("prev-btn");
    const nextBtn = document.getElementById("next-btn");

    let currentPage = 1;
    const rowsPerPage = 7; // عرض 10 صفوف لكل صفحة
    let filteredRows = [...rows];
    let totalPages = Math.ceil(filteredRows.length / rowsPerPage);

    // عرض الجدول
    function renderTable() {
        tableBody.innerHTML = "";

        // حساب الصفوف المراد عرضها في الصفحة الحالية
        const start = (currentPage - 1) * rowsPerPage;
        const end = start + rowsPerPage;

        // عرض الصفوف من بداية الصفحة حتى نهايتها
        filteredRows.slice(start, end).forEach((row) => {
            tableBody.appendChild(row);
        });

        updatePaginationInfo();
    }

    // تحديث معلومات الصفحة
    function updatePaginationInfo() {
        if (!prevBtn || !nextBtn || !pageInfo) return;

        totalPages = Math.ceil(filteredRows.length / rowsPerPage);
        pageInfo.textContent = `Page ${currentPage} of ${totalPages}`;
        prevBtn.disabled = currentPage === 1;
        nextBtn.disabled = currentPage === totalPages || totalPages === 0;
    }

    // تفعيل الفلترة
    filterButtons.forEach((button) => {
        button.addEventListener("click", () => {
            // إزالة الحالة النشطة من الأزرار
            filterButtons.forEach((btn) => btn.classList.remove("active"));
            button.classList.add("active");

            const filterType = button.dataset.type;

            // تصفية الصفوف بناءً على الفلتر
            if (filterType === "All") {
                filteredRows = [...rows];
            } else {
                filteredRows = rows.filter(
                    (row) => row.dataset.type === filterType
                );
            }

            // إعادة ضبط الصفحة الحالية وعرض البيانات المفلترة
            currentPage = 1;
            renderTable();
        });
    });

    // الانتقال إلى الصفحة التالية
    nextBtn?.addEventListener("click", () => {
        if (currentPage < totalPages) {
            currentPage++;
            renderTable();
        }
    });

    // الانتقال إلى الصفحة السابقة
    prevBtn?.addEventListener("click", () => {
        if (currentPage > 1) {
            currentPage--;
            renderTable();
        }
    });

    // حدث حذف الصفوف
    tableBody.addEventListener("click", (e) => {
        if (e.target.classList.contains("delete-btn")) {
            const row = e.target.closest("tr");
            row.remove();

            // تحديث الصفوف بعد الحذف
            filteredRows = filteredRows.filter((r) => r !== row);
            currentPage = Math.min(currentPage, totalPages);
            renderTable();
        }
    });

    // عرض الجدول عند بدء الصفحة
    renderTable();
});


const dropdownButtons = document.querySelectorAll(".dropdown-btn");
const dropdownMenus = document.querySelectorAll(".dropdown-menu-table");

// إغلاق جميع القوائم المفتوحة
function closeAllDropdowns() {
    dropdownMenus.forEach((menu) => menu.classList.remove("show"));
}

// إضافة حدث النقر لكل زر
dropdownButtons.forEach((button) => {
    button.addEventListener("click", (e) => {
        e.stopPropagation(); // منع إغلاق القائمة عند النقر على الزر
        const dropdownMenu = button.nextElementSibling; // القائمة المرتبطة بالزر
        const isOpen = dropdownMenu.classList.contains("show");

        closeAllDropdowns(); // إغلاق القوائم الأخرى
        if (!isOpen) {
            dropdownMenu.classList.add("show"); // فتح القائمة الحالية
        }
    });
});

document.addEventListener("click", () => {
    closeAllDropdowns();
});

dropdownMenus.forEach((menu) => {
    menu.addEventListener("click", (e) => {
        e.stopPropagation();
    });
});
