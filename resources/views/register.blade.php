<x-start></x-start>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/flowbite@2.5.2/dist/flowbite.min.css" rel="stylesheet" />
    @vite('resources/css/app.css')
    <title>Register - Apotek Huda</title>
</head>

            <!-- Notifikasi sukses -->
            @if (session('success'))
                <div class="fixed top-5 right-5 bg-green-500 text-white p-4 rounded-lg shadow-lg" id="successMessage">
                    {{ session('success') }}
                </div>
            @endif

    <section class="bg-[#537547] min-h-screen flex items-center justify-center">
        <!-- Login Container -->
        <div class="bg-[#30533E] flex rounded-2xl shadow-lg max-w-4xl p-5 items-center">
            <!-- Form -->
            <div class="w-full sm:px-4 md:w-1/2 md:px-16 mx-auto">
                <h2 class="text-white font-bold text-2xl">Register to Apotek Huda</h2>
                <div class="mt-3 text-sm flex justify-between items-center">
                    <p class="text-white text-center">Already have an account? <a href="{{ route('login') }}" class="text-[#88C273] underline">Login</a></p>
                </div>

                <form action="/register" method="post" class="flex flex-col gap-4">
                    @csrf

                    <input class="bg-[#FDEBEB] p-2 mt-8 rounded-lg border" type="text" name="name" placeholder="Name">
                    <input class="bg-[#FDEBEB] p-2 rounded-lg border" type="text" name="email" placeholder="Email">
                    <div class="relative">
                        <input class=" bg-[#FDEBEB] p-2 rounded-lg border w-full" type="password" name="password" placeholder="Password">
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="gray" class="bi bi-eye absolute top-1/2 right-3 -translate-y-1/2" viewBox="0 0 16 16">
                            <path d="M16 8s-3-5.5-8-5.5S0 8 0 8s3 5.5 8 5.5S16 8 16 8M1.173 8a13 13 0 0 1 1.66-2.043C4.12 4.668 5.88 3.5 8 3.5s3.879 1.168 5.168 2.457A13 13 0 0 1 14.828 8q-.086.13-.195.288c-.335.48-.83 1.12-1.465 1.755C11.879 11.332 10.119 12.5 8 12.5s-3.879-1.168-5.168-2.457A13 13 0 0 1 1.172 8z" />
                            <path d="M8 5.5a2.5 2.5 0 1 0 0 5 2.5 2.5 0 0 0 0-5M4.5 8a3.5 3.5 0 1 1 7 0 3.5 3.5 0 0 1-7 0" />
                        </svg>
                    </div>
                    <div>
                        <select id="gender" name="jenis_kelamin" class="bg-[#FDEBEB] p-2 rounded-lg border">
                            <option value="L">Laki-laki</option>
                            <option value="P">Perempuan</option>
                        </select>
                    </div>
                    <input type="tel" name="nomor_telepon" id="telepon"
                        pattern="[0-9]{9,13}"
                        inputmode="numeric"
                        placeholder="Nomor Telepon"
                        oninput="this.value = this.value.replace(/[^0-9]/g, '');"
                        minlength="9"
                        maxlength="13"
                        class="bg-[#FDEBEB] p-2 rounded-lg border" required>

                    <input datepicker datepicker-autohide id="tglLahir" datepicker-orientation="top" datepicker-class="text-blue-300" datepicker-format="yyyy-mm-dd" type="text" name="tanggal_lahir" class="bg-[#FDEBEB] p-2 rounded-lg border" placeholder="Pilih Tanggal">

                    <input type="hidden" name="role" value="Customer">

                <div class="mt-2 flex items-start">
                    <input type="checkbox" id="agreement" name="agreement" class="mt-1 mr-2">
                    <label for="agreement" class="text-sm text-white">I agree to the <a href="#"
                            class="text-[#88C273] underline">terms and conditions</a></label>
                </div>


                    <button type="submit" class="bg-white mt-3 rounded-lg text-black py-2 hover:scale-95 duration-300">Register</button>
                </form>
            </div>

            <!-- Image -->
            <div class="md:block hidden w-1/2">
                <img class="rounded-2xl" src="assets/img/pic-3.webp" alt="">
            </div>
        </div>
    </section>

    <script src="https://cdn.jsdelivr.net/npm/flowbite@2.5.2/dist/flowbite.min.js"></script>
</body>

</html>
