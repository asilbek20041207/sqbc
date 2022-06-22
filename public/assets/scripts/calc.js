jQuery(document).ready(function () {
    $(".phonemask").mask("+998 11 111 11 11");
});

const input = document.querySelector(".calc-form__input");
const button = document.querySelector(".calc-form__button");

input.addEventListener("keyup", function () {
    this.value = this.value.replace(/ /g, "");
    this.value = this.value.replace(/\B(?=(\d{3})+(?!\d))/g, " ");
});

input.addEventListener("keypress", function (e) {
    console.log(e.which);
    if (e.which < 48 || e.which > 57) {
        e.preventDefault();
    }
});

button.addEventListener("click", async () => {
    const price = +input.value.replace(/\s/g, "");

    if (price) {
        const rate = getTariffRate(price);
        const priceWithoutTax = Math.round((price * rate) / 100);
        const priceWithTax = priceWithoutTax * 0.15 + priceWithoutTax;

        const formattedPrice = priceWithTax
            .toFixed(2)
            .replace(/\d(?=(\d{3})+\.)/g, "$& ");

        document.querySelector("#result").textContent = formattedPrice;
        document.querySelector("#rate").textContent = rate;
    } else {
        alert("Пожалуйста, введите корректную сумму.");
    }
});

function getTariffRate(price) {
    const billion = 1000000000;
    const tenBillion = 10000000000;
    const hundrenBillion = 100000000000;

    if (price <= billion) {
        return 1;
    } else if (price > billion && price <= tenBillion) {
        return 0.7;
    } else if (price > tenBillion && price <= hundrenBillion) {
        return 0.5;
    } else if (price > hundrenBillion) {
        return 0.3;
    }

    return false;
}

function numberWithSpaces(value) {
    return value.toString().replace(/\B(?=(\d{3})+(?!\d))/g, " ");
}

const modal = document.querySelector(".modal");
const openModalBtn = document.querySelector(".open-modal");
const closeModalBtn = document.querySelector(".close-modal");

openModalBtn.addEventListener("click", () => {
    modal.classList.add("active");
});

closeModalBtn.addEventListener("click", () => {
    modal.classList.remove("active");
});
