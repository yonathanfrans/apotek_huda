<!-- Navigation -->
<nav class='py-5 bg-main-color max-h-max flex justify-around items-center px-20 sticky top-0 z-50'>

    <!-- logo -->
    <img src="assets/img/logo.webp" alt="logo" class="h-12">

    <!-- search bar start -->
    <div class='max-w-md mx-auto flex-grow'>
        <div class="relative w-full h-12 rounded-full bg-white overflow-hidden">
            <input
                class="peer h-full w-full outline-none text-sm text-gray-700 px-5 pr-12 focus:outline-none focus:ring-0"
                type="text"
                id="search"
                placeholder="Search" />

            <div class="absolute inset-y-0 right-0 flex items-center pr-1">
                <div class="bg-main-color p-2 rounded-full text-white cursor-pointer">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z" />
                    </svg>
                </div>
            </div>
        </div>

    </div>
    <!-- search bar end -->

    <div class="flex justify-center gap-x-10">
        <!-- cart icon -->
        <div id="cart-icon" class="relative group inline-block">
            <svg data-popover-target="popover-bottom" data-popover-placement="bottom" data-popover-offset="20" class="h-8 cursor-pointer" viewBox="0 0 79 77" fill="none" xmlns="http://www.w3.org/2000/svg" xmln="http://www.w3.org/1999/xlink">
                <rect y="17" width="60" height="60" fill="url(#pattern0_2_44)" />
                <defs>
                    <pattern id="pattern0_2_44" patternContentUnits="objectBoundingBox" width="1" height="1">
                        <use xlink:href="#image0_2_44" transform="scale(0.01)" />
                    </pattern>
                    <image id="image0_2_44" width="100" height="100" xlink:href="data:image/png;base64,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" />
                </defs>
            </svg>
            <div class="absolute inline-flex items-center justify-center w-5 h-5 text-xs font-bold text-white bg-third-color border-1 border-white rounded-full -top-1 -end-2 ">1</div>

            <!-- Popover -->
            <div data-popover id="popover-bottom"  role="tooltip" class="p-2 opacity-0 invisible group-hover:opacity-100 group-hover:visible absolute left-1/2 transform -translate-x-1/2 transition-opacity duration-300 w-max max-h-64 bg-gray-100 text-gray-800 border border-gray-300 rounded-lg shadow-lg z-10">
                <!-- product card -->
                <div class="flex flex-row w-full h-full max-w-xs rounded-xl border-2 border-gray-300 bg-white">
                    <div class="w-fit flex items-center justify-center bg-gray-200 p-2 rounded-l-lg">
                        <img src="assets/img/oskadon-tablet.webp" alt="oskadon-tablet" class="w-20">
                    </div>

                    <div class="p-2">
                        <p class="text-xs">Oskadon Obat Sakit Kepala 4 Tablet</p>
                        <span id="product-price" class="text-xs font-bold">Rp. 8.000</span>

                        <div class="flex items-center gap-3 my-1">
                            <s class="text-mini font-semibold text-gray-500">Rp. 10.000</s>
                            <span class="text-mini text-red-600 font-bold bg-pink-200 px-1">20%</span>
                        </div>

                        <div class="flex items-center gap-x-2 pb-1">
                            <svg class="w-3 h-3 text-yellow-300" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 22 20">
                                <path d="M20.924 7.625a1.523 1.523 0 0 0-1.238-1.044l-5.051-.734-2.259-4.577a1.534 1.534 0 0 0-2.752 0L7.365 5.847l-5.051.734A1.535 1.535 0 0 0 1.463 9.2l3.656 3.563-.863 5.031a1.532 1.532 0 0 0 2.226 1.616L11 17.033l4.518 2.375a1.534 1.534 0 0 0 2.226-1.617l-.863-5.03L20.537 9.2a1.523 1.523 0 0 0 .387-1.575Z" />
                            </svg>
                            <p class="text-mini">5.0 | Terjual 1,6k+</p>

                            <!-- Quantity Input -->
                            <div class="flex items-center ml-5">
                                <button type="button" id="decrement-button" data-input-counter-decrement="counter-input" class="flex-shrink-0 bg-gray-100 hover:bg-gray-200 inline-flex items-center justify-center border border-gray-300 rounded-md h-5 w-5 focus:ring-gray-100 focus:ring-2 focus:outline-none">
                                    <svg class="w-2.5 h-2.5 text-main-color" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 18 2">
                                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M1 1h16" />
                                    </svg>
                                </button>
                                <input type="text" id="counter-input" data-input-counter data-input-counter-min="0" class="flex-shrink-0 text-gray-900 border-0 bg-transparent text-sm font-normal focus:outline-none focus:ring-0 max-w-[2.5rem] text-center" value="0" disabled />
                                <button type="button" id="increment-button" data-input-counter-increment="counter-input" class="flex-shrink-0 bg-gray-100 hover:bg-gray-200 inline-flex items-center justify-center border border-gray-300 rounded-md h-5 w-5 focus:ring-gray-100 focus:ring-2 focus:outline-none">
                                    <svg class="w-2.5 h-2.5 text-main-color" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 18 18">
                                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 1v16M1 9h16" />
                                    </svg>
                                </button>
                            </div>

                        </div>
                    </div>
                </div>

                <div class="flex justify-between -mx-2 px-4 py-3 border-y-2 border-gray-300 bg-white mt-10 text-lg font-bold">
                    <h3>Total : </h3>
                    <p id="total">Rp. 29.000</p>
                </div>

                <a href="#" class="flex justify-center pt-2 font-light text-xs text-gray-400">Lihat Semua</a>

                <!-- arrow -->
                <div class="absolute top-0 left-1/2 transform -translate-x-1/2 -translate-y-1/2 w-2 h-2 bg-white border-t border-l border-gray-300 rotate-45"></div>
            </div>
        </div>

        <button type="button" class="group px-3 py-2 text-md text-white font-semibold inline-flex items-center border-2 border-white rounded-lg bg-main-color hover:bg-white hover:text-main-color">
            <svg class="w-6 h-6 me-2 text-white group-hover:text-main-color" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
                <path d="M10 0a10 10 0 1 0 10 10A10.011 10.011 0 0 0 10 0Zm0 5a3 3 0 1 1 0 6 3 3 0 0 1 0-6Zm0 13a8.949 8.949 0 0 1-4.951-1.488A3.987 3.987 0 0 1 9 13h2a3.987 3.987 0 0 1 3.951 3.512A8.949 8.949 0 0 1 10 18Z" />
            </svg>
            Login
        </button>
    </div>
</nav>