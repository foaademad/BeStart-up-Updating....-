const monthlyBtn = document.getElementById("monthlyBtn");
const yearlyBtn = document.getElementById("yearlyBtn");
const prices = [document.getElementById("price1"), document.getElementById("price2"), document.getElementById("price3")];

monthlyBtn.addEventListener("click", () => {
    prices.forEach(price => {
        price.innerHTML = `$19<span>/month</span>`;
    });
    monthlyBtn.classList.add("active");
    yearlyBtn.classList.remove("active");
});

yearlyBtn.addEventListener("click", () => {
    prices.forEach(price => {
        price.innerHTML = `$199<span>/month</span>`;
    });
    yearlyBtn.classList.add("active");
    monthlyBtn.classList.remove("active");
});
