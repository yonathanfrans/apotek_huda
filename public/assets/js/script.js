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
const imageInputs = document.querySelectorAll(".imageInput");
const previewImages = document.querySelectorAll(".previewImage");

if (imageInputs && previewImages) {
    imageInputs.forEach((input, index) => {
        input.addEventListener("change", function (event) {
            const file = event.target.files[0];
            if (file) {
                const reader = new FileReader();
                reader.onload = function (e) {
                    previewImages[index].src = e.target.result;
                };
                reader.readAsDataURL(file);
            }
        });
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

// Fungsi tambah kurang kuantitas
let quantity = 1; // Kuantitas dimulai dari 1
const maxStock = 20; // Stok maksimum yang tersedia

function decreaseQuantity() {
    if (quantity > 1) {
        // Tidak boleh kurang dari 1
        quantity--;
        updateQuantityDisplay();
        checkButtons();
    }
}

function increaseQuantity() {
    if (quantity < maxStock) {
        // Tidak boleh lebih dari stok yang tersedia
        quantity++;
        updateQuantityDisplay();
        checkButtons();
    }
}

function updateQuantityDisplay() {
    const quantityDisplay = document.getElementById("quantity-display");
    quantityDisplay.textContent = quantity;
}

function checkButtons() {
    const increaseButton = document.getElementById("increase-btn");

    // Jika kuantitas mencapai stok maksimum, nonaktifkan tombol plus
    if (quantity >= maxStock) {
        increaseButton.disabled = true;
        increaseButton.classList.add("opacity-50", "cursor-not-allowed"); // Samarkan tombol plus
    } else {
        increaseButton.disabled = false;
        increaseButton.classList.remove("opacity-50", "cursor-not-allowed"); // Kembalikan tombol plus
    }
}

// Inisialisasi tampilan kuantitas
updateQuantityDisplay();
checkButtons();

// Script untuk tombol "Manage"
const manageButton = document.getElementById("manage-button");
if (manageButton) {
    manageButton.addEventListener("click", function () {
        // Ambil elemen tab "Pesanan" dan kontennya
        const pesananTab = document.getElementById("pesanan-styled-tab");
        const pesananContent = document.getElementById("styled-pesanan");

        if (pesananTab && pesananContent) {
            // Nonaktifkan tab yang aktif saat ini
            const activeTab = document.querySelector(
                '[role="tab"][aria-selected="true"]'
            );
            const activeContent = document.querySelector(
                '[role="tabpanel"]:not(.hidden)'
            );

            if (activeTab && activeContent) {
                activeTab.setAttribute("aria-selected", "false");
                activeTab.classList.remove("text-gray-200", "bg-fourth-color");
                activeTab.classList.add(
                    "text-dark-color",
                    "hover:text-gray-200",
                    "hover:bg-fourth-color"
                );
                activeContent.classList.add("hidden");
            }

            // Aktifkan tab "Pesanan"
            pesananTab.setAttribute("aria-selected", "true");
            pesananTab.classList.remove(
                "text-dark-color",
                "hover:text-gray-200",
                "hover:bg-fourth-color"
            );
            pesananTab.classList.add("text-gray-200", "bg-fourth-color");
            pesananContent.classList.remove("hidden");

            // Update LocalStorage untuk menyimpan tab yang aktif
            localStorage.setItem("activeTab", "pesanan-styled-tab");
        }
    });
}

// Script untuk tombol "Setting"
const settingButton = document.getElementById("setting-button");
if (settingButton) {
    settingButton.addEventListener("click", function () {
        // Ambil elemen tab "Users" dan kontennya
        const usersTab = document.getElementById("users-styled-tab");
        const usersContent = document.getElementById("styled-users");

        if (usersTab && usersContent) {
            // Nonaktifkan tab yang aktif saat ini
            const activeTab = document.querySelector(
                '[role="tab"][aria-selected="true"]'
            );
            const activeContent = document.querySelector(
                '[role="tabpanel"]:not(.hidden)'
            );

            if (activeTab && activeContent) {
                activeTab.setAttribute("aria-selected", "false");
                activeTab.classList.remove("text-gray-200", "bg-fourth-color");
                activeTab.classList.add(
                    "text-dark-color",
                    "hover:text-gray-200",
                    "hover:bg-fourth-color"
                );
                activeContent.classList.add("hidden");
            }

            // Aktifkan tab "Users"
            usersTab.setAttribute("aria-selected", "true");
            usersTab.classList.remove(
                "text-dark-color",
                "hover:text-gray-200",
                "hover:bg-fourth-color"
            );
            usersTab.classList.add("text-gray-200", "bg-fourth-color");
            usersContent.classList.remove("hidden");

            // Simpan tab aktif ke LocalStorage
            localStorage.setItem("activeTab", "users-styled-tab");
        }
    });
}

// Script untuk mengaktifkan tab Dashboard
document.querySelectorAll('[role="tab"]').forEach((tab) => {
    tab.addEventListener("click", function () {
        const target = document.querySelector(
            this.getAttribute("data-tabs-target")
        );

        if (target) {
            // Nonaktifkan tab yang aktif saat ini
            const activeTab = document.querySelector(
                '[role="tab"][aria-selected="true"]'
            );
            const activeContent = document.querySelector(
                '[role="tabpanel"]:not(.hidden)'
            );

            if (activeTab && activeContent) {
                activeTab.setAttribute("aria-selected", "false");
                activeTab.classList.remove("text-gray-200", "bg-fourth-color");
                activeTab.classList.add(
                    "text-dark-color",
                    "hover:text-gray-200",
                    "hover:bg-fourth-color"
                );
                activeContent.classList.add("hidden");
            }

            // Aktifkan tab yang diklik
            this.setAttribute("aria-selected", "true");
            this.classList.remove(
                "text-dark-color",
                "hover:text-gray-200",
                "hover:bg-fourth-color"
            );
            this.classList.add("text-gray-200", "bg-fourth-color");
            target.classList.remove("hidden");

            // Update LocalStorage untuk tab yang diklik
            localStorage.setItem("activeTab", this.id);
        }
    });
});

// Script untuk login dan register admin
const loginForm = document.getElementById("login-form");
const registerForm = document.getElementById("register-form");
const showRegisterBtn = document.getElementById("show-register");
const showLoginBtn = document.getElementById("show-login");

// Function to show the register form and hide the login form
showRegisterBtn.addEventListener("click", (e) => {
    e.preventDefault();
    loginForm.classList.add("hidden");
    registerForm.classList.remove("hidden");
});

// Function to show the login form and hide the register form
showLoginBtn.addEventListener("click", (e) => {
    e.preventDefault();
    registerForm.classList.add("hidden");
    loginForm.classList.remove("hidden");
});
