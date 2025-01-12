<x-start></x-start>

<x-navbar></x-navbar>

<div class="max-w-8xl mx-auto p-8 bg-white shadow-md rounded-lg mt-10 mb-10">
    <!-- Address Section -->
    <div class="border-b p-3 pb-8 mb-4">
        <div class="flex justify-between items-center">
            <div>
                <h2 class="text-lg font-semibold">Alamat Pengirim</h2>
                <p class="text-gray-600">Zizan (+62) 8123456789</p>
                <p class="text-gray-600">Jalan ABC, Perumahan ABC 1 no 1 rt. 01 rw. 01, Kec. ABC Kel. ABC, KOTA
                    BANDUNG, JAWA BARAT, 12345</p>
            </div>
            <button id="changeAddressBtn" class="text-blue-500">Ubah</button>
        </div>
    </div>

    <h2 class="text-lg font-semibold p-2 pb-3 mb-2">Produk Dipesan</h2>

    @foreach ($cartItems as $productId => $product)
        <div class="flex justify-between items-center border-b p-4 pb-6 mb-4">
            <div class="flex items-center">
                <img src="{{ asset('assets/uploaded/' . $product['image']) }}" alt="Product" class="w-12 h-12 mr-4">
                <p>{{ $product['name'] }}</p>
            </div>
            <div class="text-right">
                <p>Rp {{ number_format($product['price'], 0, ',', '.') }}</p>
                <p>x{{ $product['quantity'] }}</p>
                <p class="font-semibold">Rp {{ number_format($product['price'] * $product['quantity'], 0, ',', '.') }}
                </p>
            </div>
        </div>
    @endforeach

    <!-- Total Section -->
    <div class="flex justify-between items-center font-semibold p-2 pb-6">
        <p>Total Biaya Pesanan ({{ count($cartItems) }} produk)</p>
        <p>Rp {{ number_format($grandTotal, 0, ',', '.') }}</p>
    </div>

    <!-- Submit Button -->
    <div class="mt-6">
        <button onclick="sendWhatsAppOrder()"
            class="w-full bg-green-600 text-white py-4 rounded-lg hover:bg-green-700">Buat Pesanan</button>
    </div>
</div>

<!-- Address Popup -->
<div id="addressModal"
    class="hidden fixed inset-0 bg-gray-800 bg-opacity-55 backdrop-blur-sm flex items-center justify-center p-4">
    <div class="bg-white w-full max-w-5xl rounded-lg p-6">
        <h2 class="text-lg font-semibold mb-4">Alamat Saya</h2>
        <div class="mb-8">
            <div class="flex items-start p-4 border-b pb-4 gap-2">
                <input type="radio" name="address" class="mt-1">
                <div>
                    <p class="font-medium">Zizan | (+62) 8123456789</p>
                    <p class="text-gray-600 text-sm">
                        Jalan ABC, Perumahan ABC 1 no 1 rt. 01 rw. 01, Kec. ABC Kel. ABC, KOTA BANDUNG, JAWA BARAT,
                        12345
                    </p>
                </div>
            </div>
            <div class="flex items-start p-4 gap-2">
                <input type="radio" name="address" class="mt-1">
                <div>
                    <p class="font-medium">Nasyifa | (+62) 8123456789</p>
                    <p class="text-gray-600 text-sm">
                        Jalan ABC, Perumahan ABC 1 no 1 rt. 01 rw. 01, Kec. ABC Kel. ABC, KOTA BANDUNG, JAWA BARAT,
                        12345
                    </p>
                </div>
            </div>
        </div>
        <div class="flex flex-col sm:flex-row justify-end gap-4">
            <button id="cancelAddressBtn" class="bg-gray-200 px-4 py-3 rounded-lg hover:bg-gray-300">
                Batalkan
            </button>
            <button id="confirmAddressBtn" class="bg-main-color text-white px-4 py-3 rounded-lg hover:bg-green-700">
                Konfirmasi
            </button>
        </div>
    </div>
</div>


<!-- Footer -->
<footer class="bg-main-color border-t-20 border-third-color">
    <div class="mx-auto w-full max-w-screen-xl p-4 py-6 lg:py-8">
        <div class="md:flex md:justify-between text-white mt-4">
            <div class="mb-6 md:mb-0 flex items-center gap-x-2 cursor-default">
                <img src="assets/img/footer-apotek.webp" class="w-24" alt="Apotek Huda Logo" />
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
    function sendWhatsAppOrder() {
        // Ambil data dari elemen halaman
        var nama = "Zizan"; // Anda bisa menggantinya dengan input nama dari pengguna
        var nomorTelepon = "+628123456789"; // Nomor telepon
        var alamat =
        "Jalan ABC, Perumahan ABC 1 no 1 rt. 01 rw. 01, Kec. ABC Kel. ABC, KOTA BANDUNG, JAWA BARAT, 12345"; // Alamat

        // Ambil data produk dari halaman checkout
        var products = [];
        var totalPrice = 0;

        // Ambil semua produk dari cartItems yang ada di halaman checkout
        document.querySelectorAll('.flex.justify-between.items-center.border-b.p-4.pb-6.mb-4').forEach(function(item) {
            var productName = item.querySelector('.flex.items-center p').textContent;
            var quantity = item.querySelector('.text-right p:nth-child(2)').textContent.replace('x', '').trim();
            var pricePerUnit = parseFloat(item.querySelector('.text-right p').textContent.replace('Rp ', '')
                .replace('.', '').trim());

            var totalProductPrice = pricePerUnit * quantity;
            totalPrice += totalProductPrice;

            // Format harga produk per unit dan total produk
            products.push(`${productName} ${quantity} x Rp. ${totalProductPrice.toLocaleString()}`);
        });

        // Total Ongkir dan Pajak
        var shippingCost = "Rp. 5.000"; // Biaya pengiriman
        var tax = "Rp. 2.500"; // Pajak
        var grandTotal = totalPrice + 5000 + 2500; // Grand total harga

        // Membuat pesan untuk WhatsApp
        var message = `Halo, saya ingin melakukan pemesanan dengan rincian sebagai berikut:\n\n` +
            `Nama: ${nama}\n` +
            `Nomor Telepon: ${nomorTelepon}\n` +
            `Alamat: ${alamat}\n\n` +
            `Produk yang dipesan:\n${products.join('\n')}\n\n` +
            `Ongkos Kirim: ${shippingCost}\n` +
            `Pajak: ${tax}\n\n` +
            `Total Harga: Rp. ${grandTotal.toLocaleString()}\n\nTerima kasih.`;

        // URL WhatsApp
        var whatsappURL = `https://wa.me/6285156857428?text=${encodeURIComponent(message)}`;
        window.open(whatsappURL, '_blank');
    }

    // Toggle modals
    const changeAddressBtn = document.getElementById('changeAddressBtn');
    const addressModal = document.getElementById('addressModal');
    const cancelAddressBtn = document.getElementById('cancelAddressBtn');
    const confirmAddressBtn = document.getElementById('confirmAddressBtn');

    const editAddressModal = document.getElementById('editAddressModal');
    const cancelEditAddressBtn = document.getElementById('cancelEditAddressBtn');

    changeAddressBtn.addEventListener('click', () => addressModal.classList.remove('hidden'));
    cancelAddressBtn.addEventListener('click', () => addressModal.classList.add('hidden'));
    confirmAddressBtn.addEventListener('click', () => {
        addressModal.classList.add('hidden');
    });

    cancelEditAddressBtn.addEventListener('click', () => editAddressModal.classList.add('hidden'));
</script>

<x-end></x-end>
