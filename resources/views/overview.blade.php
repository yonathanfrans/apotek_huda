<x-start></x-start>

<x-navbar></x-navbar>

<div class="max-w-8xl mx-auto my-10 bg-white rounded-lg shadow-lg p-6">
    <div class="flex flex-col lg:flex-row gap-6">
        <!-- Image Section -->
        <div class="lg:w-1/3">
            <img src="{{ asset('assets/uploaded/' . $product->gambar) }}" alt="{{ $product->name }}"
                class="rounded-lg border w-96 h-96 object-cover mx-auto mt-5">
        </div>

        <!-- Product Details Section -->
        <div class="lg:w-2/3">
            <h1 class="text-3xl font-bold text-gray-800">{{ $product->name }}</h1>

            <!-- Price Section -->
            <div class="mt-6">
                <div class="flex items-center gap-4">
                    <span class="text-black font-bold text-2xl">Rp
                        {{ number_format($product->harga, 0, ',', '.') }}</span>
                    {{-- <span class="text-red-600 text-2xl font-bold">Rp
                        {{ number_format($product->harga * 0.8, 0, ',', '.') }}</span>
                    <span class="text-white bg-red-500 px-2 py-1 rounded-lg text-sm">20%</span> --}}
                </div>
            </div>

            <!-- Delivery Options -->
            <div class="mt-6">
                <h3 class="text-gray-700 font-semibold">Pengiriman</h3>
                <div class="flex gap-4 mt-5">
                    <img src="{{ asset('assets/img/grab-bike.webp') }}" alt="Grab" class="h-6">
                    <img src="{{ asset('assets/img/spx-express.webp') }}" alt="SPX" class="h-6">
                    <img src="{{ asset('assets/img/gojek.webp') }}" alt="Gojek" class="h-6">
                </div>
            </div>

            <!-- Quantity Section -->
            <div class="mt-6">
                <h3 class="text-gray-700 font-semibold">Kuantitas</h3>
                <div class="flex items-center mt-2 gap-4">
                    <div class="flex items-center border rounded-lg">
                        <!-- Tombol Minus -->
                        <button class="px-3 py-2 bg-gray-200 font-bold flex items-center justify-center"
                            onclick="decreaseQuantity()">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24"
                                stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M18 12H6" />
                            </svg>
                        </button>
                        <!-- Tampilan Kuantitas -->
                        <span id="quantity-display" class="w-12 text-center">
                            1
                        </span>
                        <!-- Tombol Plus -->
                        <button id="increase-btn"
                            class="px-3 py-2 bg-gray-200 font-bold flex items-center justify-center transition-opacity duration-300"
                            onclick="increaseQuantity()">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24"
                                stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M12 6v12m6-6H6" />
                            </svg>
                        </button>
                    </div>
                    <span class="text-gray-500">tersisa {{ $product->stok }} buah</span>
                </div>
            </div>

            <!-- Action Buttons -->
            <div class="mt-10 flex gap-4">
                <form action="{{ route('cart.add') }}" method="POST" id="add-to-cart-form-{{ $product->id }}">
                    @csrf
                    <input type="hidden" name="product_id" value="{{ $product->id }}">
                    <button type="submit"
                        class="flex bg-gray-200 text-gray-700 py-4 px-4 rounded-lg hover:bg-gray-300">
                        Tambah ke Keranjang
                    </button>
                </form>
                <form method="POST" action="{{ route('cart.add') }}" class="inline">
                    @csrf
                    <input type="hidden" name="product_id" value="{{ $product->id }}">
                    <button type="submit"
                        class="flex bg-main-color text-white py-4 px-4 rounded-lg hover:bg-green-700">
                        Beli Sekarang
                    </button>
                </form>
            </div>
        </div>
    </div>

    <!-- Description Section -->
    <div class="mt-20">
        <h2 class="text-lg font-bold text-gray-800">Deskripsi</h2>
        <p class="text-gray-700 mt-2 leading-relaxed">
            {{ $product->deskripsi }}
        </p>
    </div>
</div>


<!-- Footer -->
<footer class="bg-main-color border-t-20 border-third-color">
    <div class="mx-auto w-full max-w-screen-xl p-4 py-6 lg:py-8">
        <div class="md:flex md:justify-between text-white mt-4">
            <div class="mb-6 md:mb-0 flex items-center gap-x-2 cursor-default">
                <img src="{{ asset('{{ asset('assets/img/footer-apotek.webp') }}') }}" class="w-24" alt="Apotek Huda Logo" />
                <span class="self-center text-2xl font-semibold font-second-font uppercase">apotek huda</span>
            </div>
            <div class="grid grid-cols-2 gap-8 sm:gap-6 sm:grid-cols-3">
                <div>
                    <h2 class="mb-6 text-lg font-semibold cursor-default">Tentang Kami</h2>
                    <ul class="font-medium">
                        <li class="mb-4">
                            <a href="#" class="hover:underline">Visi & Misi</a>
                        </li>
                        <li>
                            <a href="#" class="hover:underline">Lokasi</a>
                        </li>
                    </ul>
                </div>
                <div>
                    <h2 class="mb-6 text-lg font-semibold cursor-default">Hubungi Kami</h2>
                    <ul class=" font-medium">
                        <li class="mb-4">
                            <a href="#" class="hover:underline ">WhatsApp</a>
                        </li>
                        <li>
                            <a href="#" class="hover:underline">Gmail</a>
                        </li>
                    </ul>
                </div>
                <div>
                    <h2 class="mb-6 text-lg font-semibold cursor-default">Legalitas</h2>
                    <ul class=" font-medium">
                        <li class="mb-4">
                            <a href="#" class="hover:underline">Kebijakan Privasi</a>
                        </li>
                        <li>
                            <a href="#" class="hover:underline">Syarat & Ketentuan</a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        <hr class="my-6 border-gray-200 sm:mx-auto lg:my-8" />
        <div class="flex items-center justify-center">
            <p class="text-sm text-gray-400 sm:text-center cursor-default">
                © 2024 Apotek Huda. All Rights Reserved.
            </p>
        </div>
    </div>
</footer>

<script>
    // Fungsi tambah kurang kuantitas
    let quantity = 1; // Kuantitas dimulai dari 1
    const maxStock = {{ $product->stok }}; // Stok maksimum yang tersedia

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
</script>

<x-end></x-end>
