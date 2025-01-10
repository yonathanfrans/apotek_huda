<x-start></x-start>

<x-navbar></x-navbar>

<div class="max-w-8xl mx-auto my-10 bg-white rounded-lg shadow-lg p-6">
    <div class="flex flex-col lg:flex-row gap-6">
        <!-- Image Section -->
        <div class="lg:w-1/3">
            <img src="assets/img/oskadon-tablet.webp" alt="oskadon-tablet"
                class="rounded-lg border w-96 h-96 object-cover mx-auto mt-5">
        </div>

        <!-- Product Details Section -->
        <div class="lg:w-2/3">
            <h1 class="text-3xl font-bold text-gray-800">Oskadon Obat Sakit Kepala 4 Tablet</h1>
            <div class="flex items-center gap-2 mt-6">
                <span class="text-green-600 text-lg font-semibold">3.0</span>
                <div class="flex text-yellow-500">
                    <span>⭐⭐⭐⭐⭐</span>
                </div>
                <span class="text-gray-600">1,3RB Penilaian | 5RB+ Terjual</span>
            </div>

            <!-- Price Section -->
            <div class="mt-6">
                <div class="flex items-center gap-4">
                    <span class="line-through text-gray-500 text-lg">Rp 10.000</span>
                    <span class="text-red-600 text-2xl font-bold">Rp 8.000</span>
                    <span class="text-white bg-red-500 px-2 py-1 rounded-lg text-sm">20%</span>
                </div>
            </div>

            <!-- Delivery Options -->
            <div class="mt-6">
                <h3 class="text-gray-700 font-semibold">Pengiriman</h3>
                <div class="flex gap-4 mt-5">
                    <img src="assets/img/grab-bike.webp" alt="Grab" class="h-6">
                    <img src="assets/img/spx-express.webp" alt="SPX" class="h-6">
                    <img src="assets/img/gojek.webp" alt="Gojek" class="h-6">
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
                    <span class="text-gray-500">tersisa 20 buah</span>
                </div>
            </div>

            <!-- Action Buttons -->
            <div class="mt-10 flex gap-4">
                <button class="flex-1 bg-gray-200 text-gray-700 py-4 px-4 rounded-lg hover:bg-gray-300">Masukkan
                    Keranjang</button>
                <a href="{{ route('checkout') }}">
                    <button class="flex-1 bg-main-color text-white py-4 px-4 rounded-lg hover:bg-green-700">
                        Beli Sekarang
                    </button>
                </a>
            </div>
        </div>
    </div>
    </section>

    <!-- Description Section -->
    <div class="mt-20">
        <h2 class="text-lg font-bold text-gray-800">Deskripsi</h2>
        <p class="text-gray-700 mt-2 leading-relaxed">
            OSKADON adalah obat yang digunakan sebagai penurun demam dan pereda nyeri seperti sakit gigi, sakit kepala,
            dan nyeri ringan lainnya. Oskadon mengandung paracetamol, obat yang memiliki efek sebagai antipiretik
            sekaligus analgesik. Selain paracetamol, kandungan oskadon terdiri dari caffeine, yaitu obat stimulan sistem
            saraf pusat yang berguna mencegah kantuk.
        </p>
    </div>

    <div class="mt-8">
        <h2 class="text-lg font-bold text-gray-800">Indikasi Umum</h2>
        <p class="text-gray-700 mt-2 leading-relaxed">
            Mengurangi sakit kepala, pusing, menghilangkan segala macam rasa nyeri dan menghilangkan demam.
        </p>
    </div>

    <div class="mt-8">
        <h2 class="text-lg font-bold text-gray-800">Komposisi</h2>
        <p class="text-gray-700 mt-2 leading-relaxed">
            Paracetamol 500 mg dan Caffein 35 mg.
        </p>
    </div>

    <div class="mt-8">
        <h2 class="text-lg font-bold text-gray-800">Dosis</h2>
        <p class="text-gray-700 mt-2 leading-relaxed">
            Dewasa: 3 kali sehari 1 tablet.
        </p>
    </div>

    <div class="mt-8">
        <h2 class="text-lg font-bold text-gray-800">Aturan Pakai</h2>
        <p class="text-gray-700 mt-2 leading-relaxed">
            Dikonsumsi setelah makan
        </p>
    </div>

    <div class="mt-8">
        <h2 class="text-lg font-bold text-gray-800">Perhatian</h2>
        <p class="text-gray-700 mt-2 leading-relaxed">
            Penderita dengan riwayat penyakit ginjal atau gangguan fungsi hati. Wanita hamil dan menyusui.
        </p>
    </div>

    <div class="mt-8">
        <h2 class="text-lg font-bold text-gray-800">Kontra Indikasi</h2>
        <p class="text-gray-700 mt-2 leading-relaxed">
            Gangguan fungsi hati berat.
        </p>
    </div>

    <div class="mt-8">
        <h2 class="text-lg font-bold text-gray-800">Efek Samping</h2>
        <p class="text-gray-700 mt-2 leading-relaxed">
            Jarang terjadi walaupun dapat timbul gangguan saluran pencernaan termasuk mual muntah, nyeri lambung atau
            rasa panas di ulu hati, diare, konstipasi dan pendarahan lambung. Juga pernah dilaporkan terjadi ruam kulit,
            pusing, penyempitan bronkhus, trombositopenia, limfopenia, gangguan hati dan ginjal. Penurunan ketajaman
            pengelihatan dan kesulitan membedakan warna dapat terjadi tetapi sangat jarang dan akan sembuh bila obat
            dihentikan. Dosis besar dapat menimbulkan kerusakan hati.
        </p>
    </div>

    <div class="mt-8">
        <h2 class="text-lg font-bold text-gray-800">Golongan Produk</h2>
        <p class="text-gray-700 mt-2 leading-relaxed">
            Obat bebas (Hijau)
        </p>
    </div>

    <div class="mt-8">
        <h2 class="text-lg font-bold text-gray-800">Kemasan</h2>
        <p class="text-gray-700 mt-2 leading-relaxed">
            Dus, 50 strip, 4 tablet
        </p>
    </div>

    <div class="mt-8">
        <h2 class="text-lg font-bold text-gray-800">Manufaktur</h2>
        <p class="text-gray-700 mt-2 leading-relaxed">
            Supra Ferbindo Farma
        </p>
    </div>
    <div class="mt-8">
        <h2 class="text-lg font-bold text-gray-800">No. Registrasi</h2>
        <p class="text-gray-700 mt-2 leading-relaxed">
            BPOM: DBL8730700110A1
        </p>
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

<x-end></x-end>
