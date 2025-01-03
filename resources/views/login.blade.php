<x-start></x-start>

<section class="bg-[#537547] min-h-screen flex items-center justify-center">
    <!-- Login Container -->
    <div class="bg-[#30533E] flex rounded-2xl shadow-lg max-w-4xl p-5 items-center">
        <!-- Form -->
        <div class="w-full sm:px-4 md:w-1/2 md:px-16 mx-auto">
            <h2 class="text-white font-bold text-3xl text-center">Welcome to Apotek Huda</h2>
            <p class="text-white text-sm mt-4 text-center">If you already a member, easily log in</p>

            @if (session('success'))
                <div id="toast"
                    class="fixed top-5 right-5 bg-green-500 text-white px-4 py-2 rounded-lg shadow-md opacity-0 translate-y-10 transition-all duration-500">
                    {{ session('success') }}
                </div>
            @endif

            <form action="{{ route('login') }}" method="POST" class="flex flex-col gap-4">
                @csrf
                <input class="bg-[#FDEBEB] p-2 mt-8 rounded-lg border @error('email') border-red-500 @enderror"
                    type="text" name="email" placeholder="Email" value="{{ old('email') }}">
                @error('email')
                    <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                @enderror
                <div class="relative">
                    <input id="password"
                        class="bg-[#FDEBEB] p-2 rounded-lg border w-full @error('password') border-red-500 @enderror"
                        type="password" name="password" placeholder="Password">
                    @error('password')
                        <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                    @enderror
                    <!-- Eye Icon -->
                    <svg id="togglePassword" xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                        fill="gray" class="bi bi-eye absolute top-1/2 right-3 -translate-y-1/2 cursor-pointer"
                        viewBox="0 0 16 16">
                        <path
                            d="M16 8s-3-5.5-8-5.5S0 8 0 8s3 5.5 8 5.5S16 8 16 8M1.173 8a13 13 0 0 1 1.66-2.043C4.12 4.668 5.88 3.5 8 3.5s3.879 1.168 5.168 2.457A13 13 0 0 1 14.828 8q-.086.13-.195.288c-.335.48-.83 1.12-1.465 1.755C11.879 11.332 10.119 12.5 8 12.5s-3.879-1.168-5.168-2.457A13 13 0 0 1 1.172 8z" />
                        <path
                            d="M8 5.5a2.5 2.5 0 1 0 0 5 2.5 2.5 0 0 0 0-5M4.5 8a3.5 3.5 0 1 1 7 0 3.5 3.5 0 0 1-7 0" />
                    </svg>
                </div>

                <p class="text-white text-sm border-gray-400 py-4">
                    <a href="{{ route('forgot') }}" class="text-white hover:underline">Forgot your password?</a>
                </p>

                <button class="bg-white rounded-lg text-black py-2 hover:scale-95 duration-300">Login</button>
            </form>

            <div class="mt-3 text-xs flex justify-between items-center">
                <p class="text-white text-sm">Don't have an account? <a href="{{ route('register') }}">Register</a>
                </p>
            </div>
        </div>

        <!-- Image -->
        <div class="md:block hidden w-1/2">
            <img class="rounded-2xl" src="assets/img/pic-3.webp" alt="">
        </div>
    </div>
</section>

<script>
    document.addEventListener('DOMContentLoaded', function() {
        const toast = document.getElementById('toast');
        if (toast) {
            // Tampilkan toast dengan animasi
            toast.classList.remove('opacity-0', 'translate-y-10');
            toast.classList.add('opacity-100', 'translate-y-0');

            // Sembunyikan toast setelah 5 detik
            setTimeout(() => {
                toast.classList.add('opacity-0', 'translate-y-10');
                toast.classList.remove('opacity-100', 'translate-y-0');
            }, 5000); // Toast akan hilang setelah 5 detik
        }
    });

    document.addEventListener('DOMContentLoaded', function() {
        const togglePassword = document.getElementById('togglePassword');
        const passwordInput = document.getElementById('password');

        if (togglePassword) {
            togglePassword.addEventListener('click', function() {
                // Toggle antara type 'password' dan 'text'
                const type = passwordInput.type === 'password' ? 'text' : 'password';
                passwordInput.type = type;

                // Ubah ikon berdasarkan status input type
                if (type === 'password') {
                    togglePassword.setAttribute('fill', 'gray');
                } else {
                    togglePassword.setAttribute('fill', 'black');
                }
            });
        }
    });
</script>

<x-end></x-end>
