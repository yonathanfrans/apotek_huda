<!-- End HTML -->
<script src="assets/js/script.js"></script>
<script src="https://cdn.jsdelivr.net/npm/flowbite@2.5.2/dist/flowbite.min.js"></script>
<script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>
<script>
    let quantity = 1; // Kuantitas dimulai dari 1
    const maxStock = 20; // Stok maksimum yang tersedia

    function decreaseQuantity() {
        if (quantity > 1) { // Tidak boleh kurang dari 1
            quantity--;
            updateQuantityDisplay();
            checkButtons();
        }
    }

    function increaseQuantity() {
        if (quantity < maxStock) { // Tidak boleh lebih dari stok yang tersedia
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
            increaseButton.classList.add('opacity-50', 'cursor-not-allowed'); // Samarkan tombol plus
        } else {
            increaseButton.disabled = false;
            increaseButton.classList.remove('opacity-50', 'cursor-not-allowed'); // Kembalikan tombol plus
        }
    }

    // Inisialisasi tampilan kuantitas
    updateQuantityDisplay();
    checkButtons();
</script>
</body>

</html>
