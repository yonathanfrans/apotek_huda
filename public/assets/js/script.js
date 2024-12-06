// Quantity Product
const decrementButton = document.getElementById("decrement-button");
const incrementButton = document.getElementById("increment-button");
const counterInput = document.getElementById("counter-input");
const totalElement = document.getElementById("total");
const productPriceElement = document.getElementById("product-price");

// Fungsi untuk mengambil harga dari elemen span
function getPrice() {
    if (productPriceElement) {
        const priceText = productPriceElement.innerText;
        const price = parseInt(priceText.replace(/[^\d]/g, "")); // Hapus karakter selain angka
        return isNaN(price) ? 0 : price; // Jika harga tidak valid, kembalikan 0
    }
    return 0;
}

// Fungsi untuk menghitung total
function updateTotal(quantity = 0) {
    const price = getPrice();
    const fixedQuantity = quantity > 0 ? quantity : 0;
    const total = price * fixedQuantity;
    if (totalElement) {
        totalElement.innerHTML = `Rp. ${total.toLocaleString()}`;
    }
}

// Fungsi untuk mengurangi quantity
if (decrementButton && counterInput) {
    decrementButton.addEventListener("click", () => {
        let counterValue = parseInt(counterInput.value);
        if (counterValue > 0) {
            counterValue--;
            updateTotal(counterValue);
        }
    });
}

// Fungsi untuk menambah quantity
if (incrementButton && counterInput) {
    incrementButton.addEventListener("click", () => {
        let counterValue = parseInt(counterInput.value);
        counterValue++;
        updateTotal(counterValue);
    });
}

// Inisialisasi total saat halaman dimuat
window.onload = () => {
    if (counterInput && !counterInput.value) {
        counterInput.value = 0;
    }
    updateTotal(); // Update total saat halaman pertama kali dimuat
};

// Preview profile image
const imageInput = document.getElementById("imageInput");
if (imageInput) {
    imageInput.addEventListener("change", function (event) {
        const file = event.target.files[0];
        if (file) {
            const reader = new FileReader();
            reader.onload = function (e) {
                const profileImage = document.getElementById("profileImage");
                if (profileImage) {
                    profileImage.src = e.target.result;
                }
            };
            reader.readAsDataURL(file);
        }
    });
}

// Script Rating
const stars = document.querySelectorAll("#rating-stars svg");

if (stars.length > 0) {
    stars.forEach((star) => {
        star.addEventListener("click", () => {
            const rating = star.getAttribute("data-rating");
            updateRating(rating);
        });
    });
}

function updateRating(rating) {
    // Update star colors
    stars.forEach((star) => {
        const starRating = star.getAttribute("data-rating");
        if (starRating <= rating) {
            star.classList.add("text-yellow-400");
            star.classList.remove("text-gray-300");
        } else {
            star.classList.add("text-gray-300");
            star.classList.remove("text-yellow-400");
        }
    });
}
