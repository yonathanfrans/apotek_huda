<x-start></x-start>
<meta name="csrf-token" content="{{ csrf_token() }}">

<x-navbar></x-navbar>

<form action="{{ route('upload.resep') }}" method="POST" enctype="multipart/form-data">
    @csrf
    <div class="py-20 bg-gray-100 flex items-center justify-center px-4">
        <div class="w-full max-w-7xl bg-white shadow-lg rounded-lg p-7">
            <h2 class="text-xl font-semibold text-gray-800 mb-4">Upload Resep</h2>

            <!-- File Upload Input -->
            <div class="flex items-center justify-center w-full">
                <label for="dropzone-file"
                    class="flex flex-col items-center justify-center w-full h-64 border-2 border-gray-300 border-dashed rounded-lg cursor-pointer bg-gray-50 hover:bg-gray-100">
                    <div class="flex flex-col items-center justify-center pt-5 pb-6">
                        <svg class="w-8 h-8 mb-4 text-gray-500" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                            fill="none" viewBox="0 0 20 16">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M13 13h3a3 3 0 0 0 0-6h-.025A5.56 5.56 0 0 0 16 6.5 5.5 5.5 0 0 0 5.207 5.021C5.137 5.017 5.071 5 5 5a4 4 0 0 0 0 8h2.167M10 15V6m0 0L8 8m2-2 2 2" />
                        </svg>
                        <p class="mb-2 text-sm text-gray-500"><span class="font-semibold">Click to upload</span> or drag
                            and
                            drop</p>
                        <p class="text-xs text-gray-500">JPG, PNG, PDF (Max 2MB)</p>
                    </div>
                    <input id="dropzone-file" type="file" class="hidden" onchange="showLoading()">
                </label>
            </div>

            <!-- Loading Spinner -->
            <div id="loading-spinner" class="flex justify-center items-center hidden mt-4">
                <svg class="w-8 h-8 animate-spin text-gray-500" xmlns="http://www.w3.org/2000/svg" fill="none"
                    viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4v16m8-8H4" />
                </svg>
            </div>

            <!-- Display Uploaded Image -->
            <div id="uploaded-image-container" class="mt-4 hidden">
                <h3 class="text-gray-700">Gambar yang diupload:</h3>
                <img id="uploaded-image" src="" alt="Uploaded Image"
                    class="mt-2 w-full max-w-xs mx-auto rounded-lg">
            </div>

            <!-- Additional Information -->
            <div class="mt-4">
                <label for="description" class="block text-gray-700 font-medium">Tambahkan Keterangan</label>
                <textarea id="description" rows="4"
                    class="w-full mt-2 p-3 border border-gray-300 rounded-lg focus:ring focus:ring-green-500 focus:outline-none"
                    placeholder="Tambahkan keterangan resep agar admin mudah memahami"></textarea>
            </div>

            <!-- Buttons -->
            <div class="flex justify-end mt-6 space-x-4">
                <button class="px-4 py-2 bg-gray-200 text-gray-700 rounded-lg hover:bg-gray-300">Kembali</button>
                <button id="submit-button" type="button"
                    class="px-4 py-2 bg-main-color text-white rounded-lg hover:bg-green-700"
                    onclick="uploadResep()">Kirim Resep</button>
            </div>
        </div>
    </div>
</form>

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
    function showLoading() {
        // Menampilkan loading spinner
        document.getElementById("loading-spinner").classList.remove("hidden");
    }

    function uploadResep() {
        const formData = new FormData();
        const fileInput = document.getElementById("dropzone-file");
        const description = document.getElementById("description").value;

        if (fileInput.files.length === 0) {
            alert("Harap pilih gambar terlebih dahulu.");
            return;
        }

        // Menambahkan data gambar dan keterangan ke FormData
        formData.append("gambar", fileInput.files[0]);
        formData.append("keterangan", description);

        // Membuat request AJAX untuk mengupload gambar
        fetch("{{ route('upload.resep') }}", { // Ubah dengan route yang sesuai
            method: "POST",
            body: formData,
            headers: {
                'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]').getAttribute('content')
            },
        })
        .then(response => response.json())
        .then(data => {
            // Sembunyikan spinner setelah upload selesai
            document.getElementById("loading-spinner").classList.add("hidden");

            if (data.success) {
                alert("Resep berhasil diupload!");

                // Menampilkan gambar yang diupload
                const imageUrl = "{{ asset('storage/uploads/') }}" + "/" + data.filename; // Pastikan URL gambar sesuai
                document.getElementById("uploaded-image").src = imageUrl;
                document.getElementById("uploaded-image-container").classList.remove("hidden");
            } else {
                alert("Terjadi kesalahan saat mengupload resep.");
            }
        })
        .catch(error => {
            // Sembunyikan spinner jika terjadi error
            document.getElementById("loading-spinner").classList.add("hidden");
            alert("Terjadi kesalahan: " + error);
        });
    }
</script>


<x-end></x-end>
