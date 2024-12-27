const tabs = document.querySelectorAll(".filter-btn");
const cards = document.querySelectorAll(".card");
const favIcons = document.querySelectorAll(".fav-icon-star i");


const filterCards = () => {
    const activeTab = document.querySelector(".tabs .active");
    const filter = activeTab.getAttribute("data-type");

    cards.forEach((card) => {
        if (filter === "all" || card.classList.contains(filter)) {
            card.style.display = "flex";
        } else {
            card.style.display = "none";
        }
    });
};

tabs.forEach((tab) => {
    tab.addEventListener("click", () => {
        tabs.forEach((t) => t.classList.remove("active"));
        tab.classList.add("active");

        // Filter cards based on the clicked tab
        filterCards();
    });
});

// Filter cards on page load based on the active tab
filterCards();

favIcons.forEach((icon) => {
    icon.addEventListener("click", () => {
        if (icon.classList.contains("far")) {
            Swal.fire(translations.addedToFavorites.replace(':itemTitle', itemTitle), `Selected ${itemTitle} has been successfully added to favorites`, 'success');
            icon.classList.remove("far");
            icon.classList.add("fas");
        } else if (icon.classList.contains("fas")) {
            Swal.fire(translations.removedFromFavorites.replace(':itemTitle', itemTitle), `Selected ${itemTitle} has been successfully remove to favorites`, 'success');
            icon.classList.remove("fas");
            icon.classList.add("far");
        }
    });
});
