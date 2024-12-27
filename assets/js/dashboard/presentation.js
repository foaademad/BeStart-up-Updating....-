
// Tab functionality
const tabs = document.querySelectorAll('.tab');
const cards = document.querySelectorAll('.card');

tabs.forEach(tab => {
  tab.addEventListener('click', () => {
    // Remove 'active' class from all tabs
    tabs.forEach(tab => tab.classList.remove('active'));

    // Add 'active' class to the clicked tab
    tab.classList.add('active');
  });
});

// fav function for when press on buttton change color to yollow
function toggleFavorite(element) {
    var iconImgs = element.querySelectorAll(".favorite");

    // Toggle visibility between the two icons within the clicked element
    iconImgs[0].classList.toggle("d-none");
    iconImgs[1].classList.toggle("d-none");
}

// view more cards
function show_more(element) {
    // العثور على السكشن الأب للزر الذي تم الضغط عليه
    const section = element.closest('section');

    // العثور على العنصر المستهدف (الكاردات الإضافية) داخل هذا السكشن
    const content = section.querySelector('.more-card');

    if (content) {
        // تبديل عرض الكاردات الإضافية
        content.classList.toggle('d-none');

        // تبديل نص الزر
        element.textContent = element.textContent === 'view less' ? 'view more' : 'view less';
    }
}


//page 2



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


// document.querySelectorAll(".card").forEach((card) => {
//   card.querySelector(".favorite").addEventListener("click", (e) => {
//     const favorite = card.querySelector(".favorite");
//     if (favorite) {
//       favorite.addEventListener("click", (e) => {
//         e.stopPropagation(); 
//         e.preventDefault();  
//         favorite.classList.toggle("active"); 
//       });
//     }

//   })
// })