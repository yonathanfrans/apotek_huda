<nav class="bg-main-color border-gray-200 sticky top-0 z-50">
    <div class="max-w-screen-xl flex flex-wrap items-center justify-between mx-auto p-4">
        <!-- Logo -->
        <a href="/" class="flex items-center space-x-3 rtl:space-x-reverse">
            <img src="{{ asset('assets/img/logo.webp') }}" class="h-12" alt="Apotek Huda Logo" />
        </a>

        <!-- Menu Navigasi -->
        <div class="flex justify-center flex-1">
            <ul class="flex flex-col font-medium p-4 md:p-0 mt-4 md:space-x-8 rtl:space-x-reverse md:flex-row md:mt-0">
                <li>
                    <a href="/"
                        class="block py-2 px-3 rounded hover:bg-second-color md:hover:bg-transparent md:hover:text-second-color md:p-0
                        {{ Request::is('/') ? 'text-second-color font-bold' : 'text-white' }}">
                        Beranda
                    </a>
                </li>
                <li>
                    <a href="{{ route('products.index') }}"
                        class="block py-2 px-3 rounded hover:bg-second-color md:hover:bg-transparent md:hover:text-second-color md:p-0
                        {{ Request::is('products*') ? 'text-second-color font-bold' : 'text-white' }}">
                        Produk
                    </a>
                </li>
                <li>
                    @if (Auth::check())
                        <!-- Tampilkan menu Profile jika user sudah login -->
                        <a href="{{ route('profile') }}"
                            class="block py-2 px-3 rounded hover:bg-second-color md:hover:bg-transparent md:hover:text-second-color md:p-0
                            {{ Request::is('profile') ? 'text-second-color font-bold' : 'text-white' }}">
                            Profile
                        </a>
                    @else
                        <!-- Tampilkan menu Login jika user belum login -->
                        <a href="{{ route('login') }}"
                            class="block py-2 px-3 rounded hover:bg-second-color md:hover:bg-transparent md:hover:text-second-color md:p-0
                            {{ Request::is('login') ? 'text-second-color font-bold' : 'text-white' }}">
                            Login
                        </a>
                    @endif
                </li>
            </ul>
        </div>

        <!-- Icon Cart -->
        <div id="cart-icon" class="relative group inline-block mb-2">
            <a href="{{ route('cart') }}">
                <svg data-popover-target="popover-bottom" data-popover-placement="bottom" data-popover-offset="20"
                    class="h-8 cursor-pointer" viewBox="0 0 79 77" fill="none" xmlns="http://www.w3.org/2000/svg"
                    xmln="http://www.w3.org/1999/xlink">
                    <rect y="17" width="60" height="60" fill="url(#pattern0_2_44)" />
                    <defs>
                        <pattern id="pattern0_2_44" patternContentUnits="objectBoundingBox" width="1"
                            height="1">
                            <use xlink:href="#image0_2_44" transform="scale(0.01)" />
                        </pattern>
                        <image id="image0_2_44" width="100" height="100"
                            xlink:href="data:image/png;base64,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" />
                    </defs>
                </svg>
            </a>
        </div>
    </div>
</nav>
