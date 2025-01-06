<x-start></x-start>

<x-navbar></x-navbar>

<!-- sidebar -->
<button data-drawer-target="default-sidebar" data-drawer-toggle="default-sidebar" aria-controls="default-sidebar"
    type="button"
    class="inline-flex items-center p-2 mt-2 ms-3 text-sm text-gray-500 rounded-lg sm:hidden hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-gray-200">
    <span class="sr-only">Open sidebar</span>
    <svg class="w-6 h-6" aria-hidden="true" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
        <path clip-rule="evenodd" fill-rule="evenodd"
            d="M2 4.75A.75.75 0 012.75 4h14.5a.75.75 0 010 1.5H2.75A.75.75 0 012 4.75zm0 10.5a.75.75 0 01.75-.75h7.5a.75.75 0 010 1.5h-7.5a.75.75 0 01-.75-.75zM2 10a.75.75 0 01.75-.75h14.5a.75.75 0 010 1.5H2.75A.75.75 0 012 10z">
        </path>
    </svg>
</button>
<aside id="default-sidebar"
    class="fixed top-0 left-0 z-40 w-64 h-screen pt-24 transition-transform -translate-x-full sm:translate-x-0 bg-fourth-color"
    aria-label="Sidebar">
    <div class="h-full px-3 py-4 overflow-y-auto">
        <ul class="space-y-5 font-medium" id="default-styled-tab" data-tabs-toggle="#default-styled-tab-content"
            data-tabs-active-classes="text-second-color bg-gray-100"
            data-tabs-inactive-classes="text-white hover:text-second-color hover:bg-gray-100" role="tablist">
            <li>
                <a href="/">
                    <svg xmlns="http://www.w3.org/2000/svg" class="w-8 text-white mb-4 mx-1" viewBox="0 0 24 24"
                        fill="currentColor">
                        <path
                            d="M12 2C6.486 2 2 6.486 2 12s4.486 10 10 10 10-4.486 10-10S17.514 2 12 2zm5 11h-5v4l-5-5 5-5v4h5v2z">
                        </path>
                    </svg>
                </a>
            </li>
            <li role="presentation">
                <a class="flex gap-x-2 items-center p-2 rounded-lg group" id="profile-styled-tab"
                    data-tabs-target="#styled-profile" type="button" role="tab" aria-controls="profile"
                    aria-selected="false">
                    <svg class="flex-shrink-0 w-6 h-6 transition duration-75 group-hover:text-inherit group:text-inherit"
                        aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 18">
                        <path
                            d="M14 2a3.963 3.963 0 0 0-1.4.267 6.439 6.439 0 0 1-1.331 6.638A4 4 0 1 0 14 2Zm1 9h-1.264A6.957 6.957 0 0 1 15 15v2a2.97 2.97 0 0 1-.184 1H19a1 1 0 0 0 1-1v-1a5.006 5.006 0 0 0-5-5ZM6.5 9a4.5 4.5 0 1 0 0-9 4.5 4.5 0 0 0 0 9ZM8 10H5a5.006 5.006 0 0 0-5 5v2a1 1 0 0 0 1 1h11a1 1 0 0 0 1-1v-2a5.006 5.006 0 0 0-5-5Z" />
                    </svg>
                    <span class="flex-1 ms-3 text-lg whitespace-nowrap cursor-default">Akun Saya</span>
                </a>
            </li>
            <li role="presentation">
                <a class="flex gap-x-2 items-center p-2 rounded-lg group" id="pesanan-styled-tab"
                    data-tabs-target="#styled-pesanan" type="button" role="tab" aria-controls="pesanan"
                    aria-selected="false">
                    <svg class="flex-shrink-0 w-6 h-6 transition duration-75 group-hover:text-inherit group:text-inherit"
                        aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 18 20">
                        <path
                            d="M17 5.923A1 1 0 0 0 16 5h-3V4a4 4 0 1 0-8 0v1H2a1 1 0 0 0-1 .923L.086 17.846A2 2 0 0 0 2.08 20h13.84a2 2 0 0 0 1.994-2.153L17 5.923ZM7 9a1 1 0 0 1-2 0V7h2v2Zm0-5a2 2 0 1 1 4 0v1H7V4Zm6 5a1 1 0 1 1-2 0V7h2v2Z" />
                    </svg>
                    <span class="flex-1 ms-3 text-lg whitespace-nowrap cursor-default">History Pesanan</span>
                </a>
            </li>
            <li role="presentation">
                <a class="flex gap-x-2 items-center p-2 rounded-lg group" id="voucher-styled-tab"
                    data-tabs-target="#styled-voucher" type="button" role="tab" aria-controls="voucher"
                    aria-selected="false">
                    <svg class="w-6 h-6 transition duration-75 group-hover:text-inherit group:text-inherit"
                        xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
                        fill="currentColor" version="1.1" id="Layer_1" viewBox="0 0 512 512" xml:space="preserve">
                        <g>
                            <g>
                                <path
                                    d="M395.13,306.087c-9.206,0-16.696,7.49-16.696,16.696c0,9.206,7.49,16.696,16.696,16.696s16.696-7.49,16.696-16.696    C411.826,313.577,404.336,306.087,395.13,306.087z" />
                            </g>
                        </g>
                        <g>
                            <g>
                                <path
                                    d="M261.565,172.522c-9.206,0-16.696,7.49-16.696,16.696s7.49,16.696,16.696,16.696c9.206,0,16.696-7.49,16.696-16.696    S270.771,172.522,261.565,172.522z" />
                            </g>
                        </g>
                        <g>
                            <g>
                                <path
                                    d="M495.304,72.348H144.696v50.087c0,9.217-7.479,16.696-16.696,16.696s-16.696-7.479-16.696-16.696V72.348H16.696    C7.479,72.348,0,79.826,0,89.044v333.913c0,9.217,7.479,16.696,16.696,16.696h94.609v-50.087c0-9.217,7.479-16.696,16.696-16.696    s16.696,7.479,16.696,16.696v50.087h350.609c9.217,0,16.696-7.479,16.696-16.696V89.044C512,79.826,504.521,72.348,495.304,72.348    z M144.696,322.783c0,9.217-7.479,16.696-16.696,16.696s-16.696-7.479-16.696-16.696v-33.391c0-9.217,7.479-16.696,16.696-16.696    s16.696,7.479,16.696,16.696V322.783z M144.696,222.609c0,9.217-7.479,16.696-16.696,16.696s-16.696-7.479-16.696-16.696v-33.391    c0-9.217,7.479-16.696,16.696-16.696s16.696,7.479,16.696,16.696V222.609z M211.478,189.217c0-27.619,22.468-50.087,50.087-50.087    c27.619,0,50.087,22.468,50.087,50.087c0,27.619-22.468,50.087-50.087,50.087C233.946,239.304,211.478,216.836,211.478,189.217z     M257.512,343.544c-4.271,0-8.544-1.631-11.804-4.892c-6.521-6.521-6.521-17.087,0-23.609L387.37,173.37    c6.521-6.522,17.086-6.522,23.608,0c6.521,6.521,6.521,17.087,0,23.609L269.315,338.652    C266.054,341.914,261.782,343.544,257.512,343.544z M395.13,372.87c-27.619,0-50.087-22.468-50.087-50.087    c0-27.619,22.468-50.087,50.087-50.087s50.087,22.468,50.087,50.087C445.217,350.402,422.75,372.87,395.13,372.87z" />
                            </g>
                        </g>
                    </svg>
                    <span class="ms-3 text-lg cursor-default">Voucher</span>
                </a>
            </li>
            <li class="border-t py-2">
                <form action="/logout" method="post">
                    @csrf
                    <button type="submit" class="flex gap-x-2 items-center p-2 text-white rounded-lg  hover:bg-gray-100 hover:text-second-color hover:w-full  group">
                        <svg class="w-6 h-6 text-white group-hover:text-second-color" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 16 16">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 8h11m0 0-4-4m4 4-4 4m-5 3H3a2 2 0 0 1-2-2V3a2 2 0 0 1 2-2h3" />
                        </svg>
                        <span class="ms-3 text-lg whitespace-nowrap">Sign Out</span>
                    </button>
                </form>
            </li>
        </ul>
    </div>
</aside>

<!-- Content tab -->
<div class="px-5 py-10 sm:ml-64" id="default-styled-tab-content">
    <!-- Tab profile -->
    <div class="hidden" id="styled-profile" role="tabpanel" aria-labelledby="profile-tab">
        <div class="px-7 py-4 border-2 border-gray-200 bg-white rounded-lg ">
            <h1 class="text-2xl font-bold">Profil Saya</h1>
            <p class="text-gray-500">Kelola informasi profil Anda</p>
            <hr class="my-5 border-gray-400">

            <form action="#" class="grid grid-cols-3 mx-5">
                <div class="col-span-2 flex items-center justify-center">
                    <div class="flex flex-col gap-y-9 w-60">
                        <label for="username" class="font-semibold">Username</label>
                        <label for="nama" class="font-semibold">Nama</label>
                        <label for="email" class="font-semibold">Email</label>
                        <label for="telepon" class="font-semibold">Nomor Telepon</label>
                        <label for="gender" class="font-semibold">Gender</label>
                        <label for="tglLahir" class="font-semibold">Tanggal Lahir</label>

                    </div>
                    <div class="flex flex-col w-full gap-y-5 ">
                        <input type="text" name="username" id="username"
                            class="border-0 border-b-2 border-gray-300 text-gray-700  focus:border-2 focus:rounded-lg focus:border-third-color outline-none text-sm w-full p-2.5 focus:outline-none focus:ring-0"
                            placeholder="usernameanda123" required>
                        <input type="text" name="nama" id="nama"
                            class="border-0 border-b-2 border-gray-300 text-gray-700  focus:border-2 focus:rounded-lg focus:border-third-color outline-none text-sm w-full p-2.5 focus:outline-none focus:ring-0"
                            placeholder="Nama Anda" required>
                        <input type="email" name="email" id="email"
                            class="border-0 border-b-2 border-gray-300 text-gray-700  focus:border-2 focus:rounded-lg focus:border-third-color outline-none text-sm w-full p-2.5 focus:outline-none focus:ring-0"
                            placeholder="youremail@mail.com" required>
                        <input type="tel" name="telepon" id="telepon" pattern="[0-9]{9,13}"
                            inputmode="numeric" placeholder="+62 8123456789"
                            oninput="this.value = this.value.replace(/[^0-9]/g, '');" minlength="9" maxlength="13"
                            class="border-0 border-b-2 border-gray-300 text-gray-700  focus:border-2 focus:rounded-lg focus:border-third-color outline-none text-sm w-full p-2.5 focus:outline-none focus:ring-0"
                            required>
                        <select id="gender" name="gender"
                            class="border-0 border-b-2 border-gray-300 text-gray-700  focus:border-2 focus:rounded-lg focus:border-third-color outline-none text-sm w-full p-2 focus:outline-none focus:ring-0">
                            <option value="pria">Pria</option>
                            <option value="wanita">Wanita</option>
                        </select>
                        <input datepicker datepicker-autohide id="tglLahir" datepicker-orientation="top"
                            datepicker-class="text-blue-300" datepicker-format="dd-mm-yyyy" type="text"
                            name="tglLahir"
                            class="border-0 border-b-2 border-gray-300 text-gray-700 focus:flex focus:border-2 focus:rounded-lg focus:border-third-color outline-none text-sm w-full p-2.5 focus:outline-none focus:ring-0"
                            placeholder="Pilih Tanggal">
                    </div>
                </div>

                <div class="flex flex-col items-center justify-center gap-y-5 ml-12">
                    <img class="previewImage size-52 rounded-full object-cover" src="assets/img/profile.jpg"
                        alt="Rounded avatar">
                    <label class="block my-2">
                        <span class="border-2 px-4 py-2 rounded-lg text-gray-400 cursor-pointer">Pilih Gambar</span>
                        <input class="imageInput hidden" type="file" accept=".jpg,.png">
                    </label>
                    <span class="text-gray-400 text-sm">
                        Ukuran gambar: maks. 2mb <br>
                        Format gambar: .JPG, .PNG
                    </span>
                    <button type="submit"
                        class="mt-5 py-2.5 px-5  text-white bg-main-color rounded-lg border border-gray-200 hover:bg-fourth-color">Simpan</button>
                </div>
            </form>
        </div>

        <!-- Tab Alamat -->
        <div class="px-7 py-4 mt-10 border-2 border-gray-200 bg-white rounded-lg">
            <div class="flex justify-between items-center px-2">
                <h1 class="text-2xl font-bold">Alamat Saya</h1>
                <button type="button" data-modal-target="alamat-modal" data-modal-toggle="alamat-modal"
                    class="px-4 py-3 text-base font-medium text-center inline-flex items-center text-white bg-main-color rounded-lg hover:bg-fourth-color">
                    <svg xmlns="http://www.w3.org/2000/svg" class="w-4 h-4 text-white me-2 font-extrabold"
                        fill="currentColor" viewBox="0 0 24 24">
                        <path fill-rule="evenodd"
                            d="M 11 2 L 11 11 L 2 11 L 2 13 L 11 13 L 11 22 L 13 22 L 13 13 L 22 13 L 22 11 L 13 11 L 13 2 Z">
                        </path>
                    </svg>
                    Tambah Alamat Baru
                </button>
            </div>
            <hr class="my-5 border-gray-400">

            <div class="mx-5">
                <div class="flex justify-between items-center px-2">
                    <div class="flex flex-col gap-y-3 ">
                        <p>Zizan <span class="text-gray-400">| (+62) 8123456789</span></p>
                        <p class="text-sm text-gray-500">Jalan ABC, Perumahan ABC 1 no 1 rt. 01 rw. 01, Kec. ABC Kel.
                            ABC, KOTA BANDUNG, JAWA BARAT, 12345</p>
                    </div>
                    <div class="space-x-5">
                        <a data-modal-target="alamat-modal" data-modal-toggle="alamat-modal"
                            class="text-main-color font-semibold hover:underline">Ubah</a>
                        <a data-modal-target="popup-hapusAlamat" data-modal-toggle="popup-hapusAlamat"
                            class="text-main-color font-semibold hover:underline">Hapus</a>
                    </div>
                </div>
                <hr class="my-3 border-gray-400">
            </div>
        </div>
        <!-- Modal Alamat -->
        <div id="alamat-modal" tabindex="-1" aria-hidden="true"
            class="hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 justify-center items-center w-full md:inset-0 h-[calc(100%-1rem)] max-h-full">
            <div class="relative p-4 w-full max-w-xl max-h-full">
                <!-- Modal content -->
                <div class="relative bg-white rounded-lg shadow">
                    <!-- Modal header -->
                    <div class="flex items-center justify-between p-4 md:p-5 border-b rounded-t">
                        <h3 class="text-xl font-semibold text-gray-900">
                            Alamat
                        </h3>
                        <button type="button"
                            class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm w-8 h-8 ms-auto inline-flex justify-center items-center"
                            data-modal-hide="alamat-modal">
                            <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                                fill="none" viewBox="0 0 14 14">
                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                    stroke-width="2" d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6" />
                            </svg>
                            <span class="sr-only">Close modal</span>
                        </button>
                    </div>
                    <!-- Modal body -->
                    <form class="p-4 md:p-5">
                        <div class="grid gap-4 mb-4 grid-cols-2">
                            <div class="col-span-2 sm:col-span-1">
                                <label for="name"
                                    class="block mb-2 text-sm font-medium text-gray-900 ">Name</label>
                                <input type="text" name="name" id="name"
                                    class="border-gray-300 text-gray-700 focus:border-2 rounded-lg focus:border-third-color outline-none text-sm w-full p-2.5 focus:outline-none focus:ring-0"
                                    placeholder="Nama Anda" required="">
                            </div>
                            <div class="col-span-2 sm:col-span-1">
                                <label for="telepon" class="block mb-2 text-sm font-medium text-gray-900 ">Nomor
                                    Telepon</label>
                                <input type="tel" pattern="[0-9]{9,13}" inputmode="numeric"
                                    placeholder="+62 8123456789"
                                    oninput="this.value = this.value.replace(/[^0-9]/g, '');" minlength="9"
                                    maxlength="13"
                                    class="border border-gray-300 text-gray-700 focus:border-2 rounded-lg focus:border-third-color outline-none text-sm w-full p-2.5 focus:outline-none focus:ring-0">
                            </div>
                            <div class="col-span-2">
                                <label for="description" class="block mb-2 text-sm font-medium text-gray-900 ">Alamat
                                    Lengkap</label>
                                <textarea id="description" rows="4"
                                    class="block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500"
                                    placeholder="Masukkan alamat lengkap anda"></textarea>
                            </div>
                        </div>
                        <button type="submit"
                            class="py-2.5 px-5  text-white bg-main-color rounded-lg border border-gray-200 hover:bg-fourth-color">Simpan</button>
                    </form>
                </div>
            </div>
        </div>

        <!-- Modal Hapus Alamat -->
        <div id="popup-hapusAlamat" tabindex="-1" aria-hidden="true"
            class="hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 justify-center items-center w-full md:inset-0 h-[calc(100%-1rem)] max-h-full">
            <div class="relative p-4 w-full max-w-md max-h-full">
                <div class="relative bg-white rounded-lg shadow">
                    <button type="button"
                        class="absolute top-3 end-2.5 text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm w-8 h-8 ms-auto inline-flex justify-center items-center"
                        data-modal-hide="popup-hapusAlamat">
                        <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none"
                            viewBox="0 0 14 14">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                stroke-width="2" d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6" />
                        </svg>
                        <span class="sr-only">Close modal</span>
                    </button>
                    <div class="p-4 md:p-5 text-center">
                        <svg class="mx-auto mb-4 text-gray-400 w-12 h-12 " aria-hidden="true"
                            xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 20 20">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                stroke-width="2" d="M10 11V6m0 8h.01M19 10a9 9 0 1 1-18 0 9 9 0 0 1 18 0Z" />
                        </svg>
                        <h3 class="mb-5 text-lg font-normal text-gray-500 ">Apakah Anda yakin ingin menghapus alamat
                            ini?</h3>
                        <button data-modal-hide="popup-hapusAlamat" type="button"
                            class="text-white bg-main-color rounded-lg border border-gray-200 hover:bg-fourth-color font-medium text-sm inline-flex items-center px-5 py-2.5 text-center">
                            Hapus
                        </button>
                        <button data-modal-hide="popup-hapusAlamat" type="button"
                            class="py-2.5 px-5 ms-3 text-sm font-medium text-gray-900 focus:outline-none bg-white rounded-lg border border-gray-200 hover:bg-gray-100  focus:z-10 focus:ring-4 focus:ring-gray-100">Batal</button>
                    </div>
                </div>
            </div>
        </div>

    </div>

    <!-- Tab Pesanan -->
    <div class="hidden px-7 py-4 border-2 border-gray-200 bg-white rounded-lg " id="styled-pesanan" role="tabpanel"
        aria-labelledby="pesanan-tab">
        <h1 class="text-2xl font-bold">History Belanja</h1>
        <hr class="my-5 border-gray-400">

        <div class="mx-5">
            <div class="grid grid-cols-3 px-2">
                <div class="flex flex-row items-center justify-center gap-x-3 ">
                    <img src="assets/img/oskadon-tablet.webp" alt="oskadon-tablet" class="w-28">
                    <div class="flex flex-col">
                        <p class="text-sm">Oskadon Obat Sakit Kepala 4 Tablet</p>
                        <p class="text-xs font-bold">x<span>3</span></p>
                    </div>
                </div>
                <div class="flex flex-col items-center justify-center gap-2">
                    <span class="text-xl font-bold">Rp. 8.000</span>
                    <s class="text-sm font-semibold text-gray-500">Rp. 10.000</s>
                </div>
                <div class="flex flex-col items-center justify-center gap-5">
                    <button type="button" data-modal-target="popup-rating" data-modal-toggle="popup-rating"
                        class="w-60 py-2 px-10 text-white bg-main-color rounded-lg border border-gray-200 active:text-main-color active:bg-white">Nilai</button>
                    <button type="button"
                        class="w-60 py-2 px-10 text-main-color rounded-lg border border-gray-400 active:text-white active:bg-main-color">Beli
                        Lagi</button>
                    <button type="button" data-modal-target="popup-detail-pesanan"
                        data-modal-toggle="popup-detail-pesanan"
                        class="w-60 py-2 px-10 text-main-color rounded-lg border border-gray-400 active:text-white active:bg-main-color">
                        Lihat Detail
                    </button>
                </div>
            </div>
            <hr class="my-3 border-gray-400">
        </div>

        <!-- Modal Rating -->
        <div id="popup-rating" tabindex="-1" aria-hidden="true"
            class="hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 justify-center items-center w-full md:inset-0 h-[calc(100%-1rem)] max-h-full">
            <div class="relative p-4 w-full max-w-md max-h-full">
                <div class="relative bg-white rounded-lg shadow">
                    <button type="button"
                        class="absolute top-3 end-2.5 text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm w-8 h-8 ms-auto inline-flex justify-center items-center"
                        data-modal-hide="popup-rating">
                        <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none"
                            viewBox="0 0 14 14">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                stroke-width="2" d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6" />
                        </svg>
                        <span class="sr-only">Close modal</span>
                    </button>
                    <div class="p-4 md:p-5 text-center">
                        <img src="assets/img/oskadon-tablet.webp" alt="oskadon-tablet" class="w-28 mx-auto mb-4">
                        <h3 class="mb-5 text-lg font-normal">Oskadon Obat Sakit Kepala 4 Tablet</h3>


                        <div class="flex items-center justify-center mb-4" id="rating-stars">
                            <svg class="size-5 text-second-color ms-1 cursor-pointer" data-rating="1"
                                aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor"
                                viewBox="0 0 22 20">
                                <path
                                    d="M20.924 7.625a1.523 1.523 0 0 0-1.238-1.044l-5.051-.734-2.259-4.577a1.534 1.534 0 0 0-2.752 0L7.365 5.847l-5.051.734A1.535 1.535 0 0 0 1.463 9.2l3.656 3.563-.863 5.031a1.532 1.532 0 0 0 2.226 1.616L11 17.033l4.518 2.375a1.534 1.534 0 0 0 2.226-1.617l-.863-5.03L20.537 9.2a1.523 1.523 0 0 0 .387-1.575Z" />
                            </svg>
                            <svg class="size-5 text-second-color ms-1 cursor-pointer" data-rating="2"
                                aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor"
                                viewBox="0 0 22 20">
                                <path
                                    d="M20.924 7.625a1.523 1.523 0 0 0-1.238-1.044l-5.051-.734-2.259-4.577a1.534 1.534 0 0 0-2.752 0L7.365 5.847l-5.051.734A1.535 1.535 0 0 0 1.463 9.2l3.656 3.563-.863 5.031a1.532 1.532 0 0 0 2.226 1.616L11 17.033l4.518 2.375a1.534 1.534 0 0 0 2.226-1.617l-.863-5.03L20.537 9.2a1.523 1.523 0 0 0 .387-1.575Z" />
                            </svg>
                            <svg class="size-5 text-second-color ms-1 cursor-pointer" data-rating="3"
                                aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor"
                                viewBox="0 0 22 20">
                                <path
                                    d="M20.924 7.625a1.523 1.523 0 0 0-1.238-1.044l-5.051-.734-2.259-4.577a1.534 1.534 0 0 0-2.752 0L7.365 5.847l-5.051.734A1.535 1.535 0 0 0 1.463 9.2l3.656 3.563-.863 5.031a1.532 1.532 0 0 0 2.226 1.616L11 17.033l4.518 2.375a1.534 1.534 0 0 0 2.226-1.617l-.863-5.03L20.537 9.2a1.523 1.523 0 0 0 .387-1.575Z" />
                            </svg>
                            <svg class="size-5 text-second-color ms-1 cursor-pointer" data-rating="4"
                                aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor"
                                viewBox="0 0 22 20">
                                <path
                                    d="M20.924 7.625a1.523 1.523 0 0 0-1.238-1.044l-5.051-.734-2.259-4.577a1.534 1.534 0 0 0-2.752 0L7.365 5.847l-5.051.734A1.535 1.535 0 0 0 1.463 9.2l3.656 3.563-.863 5.031a1.532 1.532 0 0 0 2.226 1.616L11 17.033l4.518 2.375a1.534 1.534 0 0 0 2.226-1.617l-.863-5.03L20.537 9.2a1.523 1.523 0 0 0 .387-1.575Z" />
                            </svg>
                            <svg class="size-5 ms-1 text-second-color cursor-pointer" data-rating="5"
                                aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor"
                                viewBox="0 0 22 20">
                                <path
                                    d="M20.924 7.625a1.523 1.523 0 0 0-1.238-1.044l-5.051-.734-2.259-4.577a1.534 1.534 0 0 0-2.752 0L7.365 5.847l-5.051.734A1.535 1.535 0 0 0 1.463 9.2l3.656 3.563-.863 5.031a1.532 1.532 0 0 0 2.226 1.616L11 17.033l4.518 2.375a1.534 1.534 0 0 0 2.226-1.617l-.863-5.03L20.537 9.2a1.523 1.523 0 0 0 .387-1.575Z" />
                            </svg>
                        </div>

                        <button data-modal-hide="popup-rating" type="button"
                            class="text-white bg-main-color rounded-lg border border-gray-200 hover:bg-fourth-color font-medium text-md inline-flex items-center px-5 py-2.5 text-center">
                            Simpan
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Modal Pop-up -->
    <div id="popup-detail-pesanan" tabindex="-1"
        class="hidden fixed z-50 top-0 left-0 w-full h-full overflow-y-auto">
        <div class="relative w-full max-w-md h-full md:h-auto mx-auto mt-20">
            <div class="bg-white rounded-lg shadow">
                <!-- Header -->
                <div class="flex justify-between items-center p-4 border-b">
                    <h3 class="text-lg font-semibold">Detail Pesanan</h3>
                    <button class="text-gray-400" data-modal-hide="popup-detail-pesanan">×</button>
                </div>
                <!-- Body -->
                <div class="p-6">
                    <p><strong>Status:</strong> <span>Sudah Dibayar</span></p>
                    <p><strong>Total:</strong> Rp. <span></span>24.000</p>
                    <p><strong>Invoice:</strong>
                        <a href="{{ asset('storage/invoice.pdf') }}" class="text-blue-500 underline" target="_blank">Lihat Invoice</a>
                    </p>
                </div>
                <!-- Footer -->
                <div class="p-4 border-t">
                    <button class="bg-red-500 text-white rounded px-4 py-2"
                        data-modal-hide="popup-detail-pesanan">Tutup</button>
                </div>
            </div>
        </div>
    </div>



    <!-- Tab Voucher -->
    <div class="hidden px-7 py-4 border-2 border-gray-200 bg-white rounded-lg " id="styled-voucher" role="tabpanel"
        aria-labelledby="voucher-tab">
        <h1 class="text-2xl font-bold">Voucher Saya</h1>
        <hr class="my-5 border-gray-400">

        <div class="mx-5 flex justify-stretch items-center flex-wrap gap-y-8 gap-x-5">
            <div class="flex flex-row items-center gap-x-4 border border-l-0 border-gray-400">
                <img src="assets/img/voucher-1.webp" class="w-auto object-fill" alt="voucher1">
                <div class="flex flex-col text-gray-400">
                    <p class="font-bold">Discount 10%</p>
                    <p class="text-sm ">Minimal Belanja Rp. 30k</p>
                    <p class="mt-8 text-xs">Berakhir dalam 20 jam <a href="#"
                            class="pl-2 text-blue-500">S&K</a></p>
                </div>
                <button type="button"
                    class="text-gray-900 bg-white border border-gray-600 rounded-lg hover:bg-main-color hover:text-white font-medium text-sm px-5 py-2 me-2 ml-10">Pakai</button>
            </div>
        </div>
    </div>

</div>

<x-end></x-end>
