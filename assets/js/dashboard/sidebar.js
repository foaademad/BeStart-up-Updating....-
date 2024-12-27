const sidebar = document.querySelector(".sidebar");
function toggleSidebar() {
    sidebar.classList.toggle("open");
    document.querySelector(".overlay").classList.toggle("open")
}

document.querySelector(".overlay").addEventListener("click", () => {
    sidebar.classList.remove("open");
    document.querySelector(".overlay").classList.remove("open")
})

const searchBtn = document.querySelector('.search-icon');
const searchContainer = document.querySelector('.box-search-icon');
const searchInput = document.querySelector('.content .header .search-input');

searchBtn.addEventListener('click', function (event) {
    event.stopPropagation();
    searchContainer.classList.toggle('active');
    document.querySelector(".content .header .logo").classList.add('d-none');
    searchBtn.classList.add('d-none');
    if (searchContainer.classList.contains('active')) {
        searchInput.focus();
    }
});

document.addEventListener('click', function (event) {
    if (!searchContainer.contains(event.target)) {
        searchContainer.classList.remove('active');
        searchBtn.classList.remove("d-none");
        document.querySelector(".content .header .logo").classList.remove('d-none');
    }
});

const toggleBtn = document.querySelector(".toggle-btn");
toggleBtn.addEventListener("click", () => {
    sidebar.classList.toggle("collapsed");
});

var dropdown_Links_Sidebar = document.querySelectorAll(".nav-link-list");
dropdown_Links_Sidebar.forEach(function (dropdown) {
    dropdown.addEventListener("click", function () {
        dropdown_Links_Sidebar.forEach(function (item) {
            if (item !== dropdown) {
                item.classList.remove("active");
                item.querySelector(".dropdown-container").style.display = "none";
            }
        });
        let dropdownContent = dropdown.querySelector(".dropdown-container");
        if (dropdownContent.style.display === "block") {
            dropdownContent.style.display = "none";
            dropdown.classList.remove("active");
        } else {
            dropdownContent.style.display = "block";
            dropdown.classList.add("active");
        }
    });
});


const userMenu = document.querySelector('.user-menu');
const userAvatar = document.querySelector('.user-avatar');
const userDropdownBtn = document.querySelector('.user-dropdown-btn');
const userDropdownContent = document.querySelector('.user-dropdown-content');

[userAvatar, userDropdownBtn].forEach(element => {
    element.addEventListener('click', function (event) {
        event.stopPropagation();
        userMenu.classList.toggle('active');
    });
});

document.addEventListener('click', function (event) {
    if (!userMenu.contains(event.target)) {
        userMenu.classList.remove('active');
    }
});





const dropdown_lang = document.querySelector('.language-dropdown');
const dropdownBtn_lang = document.querySelector('.dropdown-btn');
const dropdown_Content_Lang = document.querySelector('.dropdown-content');
const dropdown_Links_lang = document.querySelectorAll('.dropdown-content a');

dropdownBtn_lang.addEventListener('click', function (event) {
    event.stopPropagation();
    dropdown_lang.classList.toggle('active');
});

document.addEventListener('click', function (event) {
    if (!dropdown_lang.contains(event.target)) {
        dropdown_lang.classList.remove('active');
    }
});

dropdown_Links_lang.forEach(link => {
    link.addEventListener('click', function (event) {
        event.preventDefault();
        dropdownBtn_lang.querySelector('span').textContent = this.textContent;
        dropdown_lang.classList.remove('active')
    });
});

// Show Menu Notifications
function toggleNotifications() {
    const menu = document.getElementById('notificationsMenu');
    menu.style.display = menu.style.display === 'block' ? 'none' : 'block';
}

document.addEventListener('click', function (event) {
    const menu = document.getElementById('notificationsMenu');
    const bell = document.querySelector('.notification-bell');

    if (!menu.contains(event.target) && !bell.contains(event.target)) {
        menu.style.display = 'none';
    }
});


document.querySelector(".dark-mode-toggle").addEventListener("click" , () => {

    document.body.classList.toggle('dark');

    const toggleButton = document.querySelector(".dark-mode-toggle");

    if (document.body.classList.contains('dark')) {
        toggleButton.innerHTML = `
            <i style='color:#fff;font-size:17px;margin:6px 2px 0;' class="fa-regular fa-sun"></i>
            `;
    } else {
        toggleButton.innerHTML = `
              <svg width='22px' viewBox="0 0 24 24" stroke-width="1.5">
                    <path stroke="#0C1A67" d="M21 12.79A9 9 0 1 1 11.21 3 7 7 0 0 0 21 12.79z"></path>
                </svg>
            `;
    }

    fetch('/user/set-dark-mode', {
        method: 'POST',
        headers: {
            'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]').content,
            'Content-Type': 'application/json',
        },
        body: JSON.stringify({
            darkMode: document.body.classList.contains('dark'),
        }),
    })
    .then(response => {
        if (!response.ok) {
            throw new Error('Failed to update dark mode preference');
        }
        return response.json();
    })
    .then(data => {
        console.log(data.message); // Log success message
    })
    .catch(error => {
        console.error('Error:', error);
    });
})

// الحصول على العناصر من DOM
const clearAllButton = document.querySelector('.clear-all');
const notificationsList = document.querySelector('.notifications-list');

clearAllButton.addEventListener('click', () => {
    notificationsList.innerHTML = '';

    // إضافة رسالة "لا توجد إشعارات"
    const noNotificationsMessage = document.createElement('div');
    noNotificationsMessage.classList.add('no-notifications-message');
    noNotificationsMessage.textContent = 'No notifications available.';
    notificationsList.appendChild(noNotificationsMessage);
});
