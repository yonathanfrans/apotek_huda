// Carousel
let currentIndex = 0;
const slides = document.getElementById("carouselSlides").children;
const totalSlides = slides.length;

function showSlide(index) {
    const offset = -index * 100;
    document.getElementById(
        "carouselSlides"
    ).style.transform = `translateX(${offset}%)`;
}

function nextSlide() {
    currentIndex = (currentIndex + 1) % totalSlides;
    showSlide(currentIndex);
}

function prevSlide() {
    currentIndex = (currentIndex - 1 + totalSlides) % totalSlides;
    showSlide(currentIndex);
}

setInterval(nextSlide, 5000);

// Modal product
function openModal() {
    document.getElementById("modal").classList.remove("hidden");
}

function closeModal() {
    document.getElementById("modal").classList.add("hidden");
}

// popover
function togglePopover() {
    const popover = document.getElementById("popover");
    popover.classList.toggle("opacity-0");
    popover.classList.toggle("invisible");
}
document.addEventListener("click", function (event) {
    const popover = document.getElementById("popover");
    const cartIcon = document.getElementById("cart-icon");

    if (!cartIcon.contains(event.target)) {
        popover.classList.add("opacity-0", "invisible");
    }
});

// Quantity Product
const quantityInput = document.getElementById("quantity");
const totalElement = document.getElementById("total");
const productPriceElement = document.getElementById("product-price");

// Fungsi untuk mengambil harga dari elemen span
function getPrice() {
    const priceText = productPriceElement.innerText; 
    const price = parseInt(priceText.replace(/[^\d]/g, "")); // Hapus karakter selain angka
    return isNaN(price) ? 0 : price; // Jika harga tidak valid, kembalikan 0
}

// Fungsi untuk menghitung total
function updateTotal() {
    const price = getPrice(); 
    const quantity = parseInt(quantityInput.value) || 0; // Ambil nilai quantity, pastikan tidak NaN
    const total = price * quantity;
    totalElement.innerHTML = `Rp. ${total.toLocaleString()}`;
}

// Fungsi untuk mengurangi quantity
function decreaseQuantity() {
    let currentValue = parseInt(quantityInput.value);
    if (currentValue > 0) {
        quantityInput.value = currentValue - 1;
        updateTotal();
    }
}

// Fungsi untuk menambah quantity
function increaseQuantity() {
    let currentValue = parseInt(quantityInput.value);
    quantityInput.value = currentValue + 1;
    updateTotal();
}

// Fungsi untuk validasi angka
function validateNumber(input) {
    input.value = input.value.replace(/[^0-9]/g, ""); // Hapus karakter non-numerik
    updateTotal(); // Update total setiap kali input berubah
}

// Inisialisasi total saat halaman dimuat
window.onload = () => {
    if (!quantityInput.value) {
        quantityInput.value = 0;
    }
    updateTotal(); // Update total saat halaman pertama kali dimuat
};
