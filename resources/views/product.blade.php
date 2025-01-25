<x-start></x-start>

<x-navbar></x-navbar>

<div x-data="{ isOpen: false }" class="relative bg-white">
    <div x-data="{ IsOpen: false }">
        <div class="relative lg:hidden" role="dialog" aria-modal="true">
            <div x-show="IsOpen" x-transition:enter="transition-opacity ease-linear duration-300"
                x-transition:enter-start="opacity-0" x-transition:enter-end="opacity-100"
                x-transition:leave="transition-opacity ease-linear duration-300" x-transition:leave-start="opacity-100"
                x-transition:leave-end="opacity-0" class="fixed inset-0 bg-black bg-opacity-25" aria-hidden="true">
            </div>

            <div class="relative inset-0 z-40 flex">
                <div x-show="IsOpen" x-transition:enter="transition ease-in-out duration-300 transform"
                    x-transition:enter-start="translate-x-full" x-transition:enter-end="translate-x-0"
                    x-transition:leave="transition ease-in-out duration-300 transform"
                    x-transition:leave-start="translate-x-0" x-transition:leave-end="translate-x-full"
                    class="relative ml-auto flex h-full w-full max-w-xs flex-col overflow-y-auto bg-white py-4 pb-12 shadow-xl">
                    <div class="flex items-center justify-between px-4">
                        <h2 class="text-lg font-medium text-gray-900">Filter</h2>
                        <button type="button" @click="IsOpen = !IsOpen"
                            class="-mr-2 flex h-10 w-10 items-center justify-center rounded-md bg-white p-2 text-gray-400">
                            <span class="sr-only">Close menu</span>
                            <svg class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                                stroke="currentColor" aria-hidden="true" data-slot="icon">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M6 18 18 6M6 6l12 12" />
                            </svg>
                        </button>
                    </div>

                    <!-- Filters -->
                    <form class="mt-4 border-t border-gray-200">
                        <h3 class="sr-only">Categories</h3>

                        <div x-data="{ open: false }" class="border-t border-gray-200 px-4 py-6">
                            <h3 class="-mx-2 -my-3 flow-root">
                                <!-- Expand/collapse section button -->
                                <button type="button" @click="open = !open"
                                    class="flex w-full items-center justify-between bg-white px-2 py-3 text-gray-400 hover:text-gray-500"
                                    aria-controls="filter-section-mobile-0" :aria-expanded="open">
                                    <span class="font-medium text-gray-900">Metode Pembayaran</span>
                                    <span class="ml-6 flex items-center">
                                        <!-- Expand icon, show/hide based on section open state. -->
                                        <svg x-show="!open" class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor"
                                            aria-hidden="true" data-slot="icon">
                                            <path
                                                d="M10.75 4.75a.75.75 0 0 0-1.5 0v4.5h-4.5a.75.75 0 0 0 0 1.5h4.5v4.5a.75.75 0 0 0 1.5 0v-4.5h4.5a.75.75 0 0 0 0-1.5h-4.5v-4.5Z" />
                                        </svg>
                                        <!-- Collapse icon, show/hide based on section open state. -->
                                        <svg x-show="open" class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor"
                                            aria-hidden="true" data-slot="icon">
                                            <path fill-rule="evenodd"
                                                d="M4 10a.75.75 0 0 1 .75-.75h10.5a.75.75 0 0 1 0 1.5H4.75A.75.75 0 0 1 4 10Z"
                                                clip-rule="evenodd" />
                                        </svg>
                                    </span>
                                </button>
                            </h3>
                            <!-- Filter section, show/hide based on section state. -->
                            <div x-show="open" x-transition class="pt-6" id="filter-section-mobile-0">
                                <div class="space-y-6">
                                    <div class="flex items-center">
                                        <input id="filter-mobile-color-0" name="color[]" value="transfer"
                                            type="checkbox"
                                            class="h-4 w-4 rounded border-gray-300 text-indigo-600 focus:ring-indigo-500">
                                        <label for="filter-mobile-color-0"
                                            class="ml-3 min-w-0 flex-1 text-gray-500">Transfer</label>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div x-data="{ open: false }" class="border-t border-gray-200 px-4 py-6">
                            <h3 class="-mx-2 -my-3 flow-root">
                                <!-- Expand/collapse section button -->
                                <button type="button" @click="open = !open"
                                    class="flex w-full items-center justify-between bg-white px-2 py-3 text-gray-400 hover:text-gray-500"
                                    aria-controls="filter-section-mobile-1" :aria-expanded="open">
                                    <span class="font-medium text-gray-900">Kategori</span>
                                    <span class="ml-6 flex items-center">
                                        <!-- Expand icon, show/hide based on section open state. -->
                                        <svg x-show="!open" class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor"
                                            aria-hidden="true" data-slot="icon">
                                            <path
                                                d="M10.75 4.75a.75.75 0 0 0-1.5 0v4.5h-4.5a.75.75 0 0 0 0 1.5h4.5v4.5a.75.75 0 0 0 1.5 0v-4.5h4.5a.75.75 0 0 0 0-1.5h-4.5v-4.5Z" />
                                        </svg>
                                        <!-- Collapse icon, show/hide based on section open state. -->
                                        <svg x-show="open" class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor"
                                            aria-hidden="true" data-slot="icon">
                                            <path fill-rule="evenodd"
                                                d="M4 10a.75.75 0 0 1 .75-.75h10.5a.75.75 0 0 1 0 1.5H4.75A.75.75 0 0 1 4 10Z"
                                                clip-rule="evenodd" />
                                        </svg>
                                    </span>
                                </button>
                            </h3>
                            <!-- Filter section, show/hide based on section state. -->
                            <div x-show="open" x-transition class="pt-6" id="filter-section-mobile-1">
                                <div class="space-y-6">
                                    <div class="flex items-center">
                                        <input id="filter-mobile-category-0" name="category[]" value="batuk-flu"
                                            type="checkbox"
                                            class="h-4 w-4 rounded border-gray-300 text-indigo-600 focus:ring-indigo-500">
                                        <label for="filter-mobile-category-0"
                                            class="ml-3 min-w-0 flex-1 text-gray-500">Batuk & Flu</label>
                                    </div>
                                    <div class="flex items-center">
                                        <input id="filter-mobile-category-1" name="category[]" value="pereda-nyeri"
                                            type="checkbox"
                                            class="h-4 w-4 rounded border-gray-300 text-indigo-600 focus:ring-indigo-500">
                                        <label for="filter-mobile-category-1"
                                            class="ml-3 min-w-0 flex-1 text-gray-500">Pereda Nyeri</label>
                                    </div>
                                    <div class="flex items-center">
                                        <input id="filter-mobile-category-2" name="category[]" value="vitamin"
                                            type="checkbox"
                                            class="h-4 w-4 rounded border-gray-300 text-indigo-600 focus:ring-indigo-500">
                                        <label for="filter-mobile-category-2"
                                            class="ml-3 min-w-0 flex-1 text-gray-500">Vitamin</label>
                                    </div>
                                    <div class="flex items-center">
                                        <input id="filter-mobile-category-3" name="category[]" value="alergi"
                                            type="checkbox"
                                            class="h-4 w-4 rounded border-gray-300 text-indigo-600 focus:ring-indigo-500">
                                        <label for="filter-mobile-category-3"
                                            class="ml-3 min-w-0 flex-1 text-gray-500">Alergi</label>
                                    </div>
                                    <div class="flex items-center">
                                        <input id="filter-mobile-category-4" name="category[]" value="anti-infeksi"
                                            type="checkbox"
                                            class="h-4 w-4 rounded border-gray-300 text-indigo-600 focus:ring-indigo-500">
                                        <label for="filter-mobile-category-4"
                                            class="ml-3 min-w-0 flex-1 text-gray-500">Anti Infeksi</label>
                                    </div>
                                    <div class="flex items-center">
                                        <input id="filter-mobile-category-4" name="category[]"
                                            value="kesehatan-pencernaan" type="checkbox"
                                            class="h-4 w-4 rounded border-gray-300 text-indigo-600 focus:ring-indigo-500">
                                        <label for="filter-mobile-category-4"
                                            class="ml-3 min-w-0 flex-1 text-gray-500">Kesehatan Pencernaan</label>
                                    </div>
                                    <div class="flex items-center">
                                        <input id="filter-mobile-category-4" name="category[]" value="anti-radang"
                                            type="checkbox"
                                            class="h-4 w-4 rounded border-gray-300 text-indigo-600 focus:ring-indigo-500">
                                        <label for="filter-mobile-category-4"
                                            class="ml-3 min-w-0 flex-1 text-gray-500">Anti Radang</label>
                                    </div>
                                    <div class="flex items-center">
                                        <input id="filter-mobile-category-4" name="category[]" value="kulit"
                                            type="checkbox"
                                            class="h-4 w-4 rounded border-gray-300 text-indigo-600 focus:ring-indigo-500">
                                        <label for="filter-mobile-category-4"
                                            class="ml-3 min-w-0 flex-1 text-gray-500">Kulit</label>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div x-data="{ open: false }" class="border-t border-gray-200 px-4 py-6">
                            <h3 class="-mx-2 -my-3 flow-root">
                                <!-- Expand/collapse section button -->
                                <button type="button" @click="open = !open"
                                    class="flex w-full items-center justify-between bg-white px-2 py-3 text-gray-400 hover:text-gray-500"
                                    aria-controls="filter-section-mobile-2" :aria-expanded="open">
                                    <span class="font-medium text-gray-900">Usia</span>
                                    <span class="ml-6 flex items-center">
                                        <!-- Expand icon, show/hide based on section open state. -->
                                        <svg x-show="!open" class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor"
                                            aria-hidden="true" data-slot="icon">
                                            <path
                                                d="M10.75 4.75a.75.75 0 0 0-1.5 0v4.5h-4.5a.75.75 0 0 0 0 1.5h4.5v4.5a.75.75 0 0 0 1.5 0v-4.5h4.5a.75.75 0 0 0 0-1.5h-4.5v-4.5Z" />
                                        </svg>
                                        <!-- Collapse icon, show/hide based on section open state. -->
                                        <svg x-show="open" class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor"
                                            aria-hidden="true" data-slot="icon">
                                            <path fill-rule="evenodd"
                                                d="M4 10a.75.75 0 0 1 .75-.75h10.5a.75.75 0 0 1 0 1.5H4.75A.75.75 0 0 1 4 10Z"
                                                clip-rule="evenodd" />
                                        </svg>
                                    </span>
                                </button>
                            </h3>
                            <!-- Filter section, show/hide based on section state. -->
                            <div x-show="open"x-transition class="pt-6" id="filter-section-mobile-2">
                                <div class="space-y-6">
                                    <div class="flex items-center">
                                        <input id="filter-mobile-size-0" name="usia[]" value="bayi"
                                            type="checkbox"
                                            class="h-4 w-4 rounded border-gray-300 text-indigo-600 focus:ring-indigo-500">
                                        <label for="filter-mobile-size-0"
                                            class="ml-3 min-w-0 flex-1 text-gray-500">Bayi</label>
                                    </div>
                                    <div class="flex items-center">
                                        <input id="filter-mobile-size-1" name="usia[]" value="balita"
                                            type="checkbox"
                                            class="h-4 w-4 rounded border-gray-300 text-indigo-600 focus:ring-indigo-500">
                                        <label for="filter-mobile-size-1"
                                            class="ml-3 min-w-0 flex-1 text-gray-500">Balita</label>
                                    </div>
                                    <div class="flex items-center">
                                        <input id="filter-mobile-size-2" name="usia[]" value="anak-anak"
                                            type="checkbox"
                                            class="h-4 w-4 rounded border-gray-300 text-indigo-600 focus:ring-indigo-500">
                                        <label for="filter-mobile-size-2"
                                            class="ml-3 min-w-0 flex-1 text-gray-500">Anak-anak</label>
                                    </div>
                                    <div class="flex items-center">
                                        <input id="filter-mobile-size-3" name="usia[]" value="remaja"
                                            type="checkbox"
                                            class="h-4 w-4 rounded border-gray-300 text-indigo-600 focus:ring-indigo-500">
                                        <label for="filter-mobile-size-3"
                                            class="ml-3 min-w-0 flex-1 text-gray-500">Remaja</label>
                                    </div>
                                    <div class="flex items-center">
                                        <input id="filter-mobile-size-4" name="usia[]" value="dewasa"
                                            type="checkbox"
                                            class="h-4 w-4 rounded border-gray-300 text-indigo-600 focus:ring-indigo-500">
                                        <label for="filter-mobile-size-4"
                                            class="ml-3 min-w-0 flex-1 text-gray-500">Dewasa</label>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>

        <main class="mx-auto max-w-9xl px-10 sm:px-6 lg:px-24">
            <div class="flex items-baseline justify-between border-b border-gray-200 pb-6 pt-24">
                <h1 class="text-4xl font-bold tracking-tight text-gray-900">
                    @if (isset($category))
                        {{ $category->name }}
                    @else
                        Semua Produk
                    @endif
                </h1>


                <div class="flex items-center">
                    <div class="relative inline-block text-left">
                        {{-- <div>
                            <button type="button" @click="isOpen = !isOpen"
                                class="group inline-flex justify-center text-sm font-medium text-gray-700 hover:text-gray-900"
                                id="menu-button" aria-expanded="false" aria-haspopup="true">
                                Urutkan
                                <svg class="-mr-1 ml-1 h-5 w-5 shrink-0 text-gray-400 group-hover:text-gray-500"
                                    viewBox="0 0 20 20" fill="currentColor" aria-hidden="true" data-slot="icon">
                                    <path fill-rule="evenodd"
                                        d="M5.22 8.22a.75.75 0 0 1 1.06 0L10 11.94l3.72-3.72a.75.75 0 1 1 1.06 1.06l-4.25 4.25a.75.75 0 0 1-1.06 0L5.22 9.28a.75.75 0 0 1 0-1.06Z"
                                        clip-rule="evenodd" />
                                </svg>
                            </button>
                        </div> --}}

                        {{-- <div x-show="isOpen" x-transition:enter="transition ease-out duration-100"
                            x-transition:enter-start="transform opacity-0 scale-95"
                            x-transition:enter-end="transform opacity-100 scale-100"
                            x-transition:leave="transition ease-in duration-75"
                            x-transition:leave-start="transform opacity-100 scale-100"
                            x-transition:leave-end="transform opacity-0 scale-95"
                            class="absolute right-0 z-10 mt-2 w-40 origin-top-right rounded-md bg-white shadow-2xl ring-1 ring-black ring-opacity-5 focus:outline-none"
                            role="menu" aria-orientation="vertical" aria-labelledby="menu-button" tabindex="-1">
                            <div class="py-1" role="none">
                                <a href="#"
                                    class="block px-4 py-2 text-sm text-gray-500 hover:bg-gray-100 hover:outline-none active:bg-gray-100 active:text-gray-900 focus:outline-none"
                                    role="menuitem" tabindex="-1" id="menu-item-0">
                                    Produk Populer
                                </a>

                                <a href="#"
                                    class="block px-4 py-2 text-sm text-gray-500 hover:bg-gray-100 hover:outline-none active:bg-gray-100 active:text-gray-900 focus:outline-none"
                                    role="menuitem" tabindex="-1" id="menu-item-1">
                                    Rating Terbaik
                                </a>

                                <a href="#"
                                    class="block px-4 py-2 text-sm text-gray-500 hover:bg-gray-100 hover:outline-none active:bg-gray-100 active:text-gray-900 focus:outline-none"
                                    role="menuitem" tabindex="-1" id="menu-item-2">
                                    Produk Terbaru
                                </a>

                                <a href="#"
                                    class="block px-4 py-2 text-sm text-gray-500 hover:bg-gray-100 hover:outline-none active:bg-gray-100 active:text-gray-900 focus:outline-none"
                                    role="menuitem" tabindex="-1" id="menu-item-3">
                                    Harga: Rendah ke Tinggi
                                </a>

                                <a href="#"
                                    class="block px-4 py-2 text-sm text-gray-500 hover:bg-gray-100 hover:outline-none active:bg-gray-100 active:text-gray-900 focus:outline-none"
                                    role="menuitem" tabindex="-1" id="menu-item-4">
                                    Harga: Tinggi ke Rendah
                                </a>

                            </div>
                        </div> --}}
                    </div>

                    {{-- <button type="button" class="-m-2 ml-5 p-2 text-gray-400 hover:text-gray-500 sm:ml-7">
                        <span class="sr-only">View grid</span>
                        <svg class="h-5 w-5" aria-hidden="true" viewBox="0 0 20 20" fill="currentColor"
                            data-slot="icon">
                            <path fill-rule="evenodd"
                                d="M4.25 2A2.25 2.25 0 0 0 2 4.25v2.5A2.25 2.25 0 0 0 4.25 9h2.5A2.25 2.25 0 0 0 9 6.75v-2.5A2.25 2.25 0 0 0 6.75 2h-2.5Zm0 9A2.25 2.25 0 0 0 2 13.25v2.5A2.25 2.25 0 0 0 4.25 18h2.5A2.25 2.25 0 0 0 9 15.75v-2.5A2.25 2.25 0 0 0 6.75 11h-2.5Zm9-9A2.25 2.25 0 0 0 11 4.25v2.5A2.25 2.25 0 0 0 13.25 9h2.5A2.25 2.25 0 0 0 18 6.75v-2.5A2.25 2.25 0 0 0 15.75 2h-2.5Zm0 9A2.25 2.25 0 0 0 11 13.25v2.5A2.25 2.25 0 0 0 13.25 18h2.5A2.25 2.25 0 0 0 18 15.75v-2.5A2.25 2.25 0 0 0 15.75 11h-2.5Z"
                                clip-rule="evenodd" />
                        </svg>
                    </button> --}}
                    <button type="button" @click="IsOpen = !IsOpen"
                        class="-m-2 ml-4 p-2 text-gray-400 hover:text-gray-500 sm:ml-6 lg:hidden">
                        <span class="sr-only">Filter</span>
                        <svg class="h-5 w-5" aria-hidden="true" viewBox="0 0 20 20" fill="currentColor"
                            data-slot="icon">
                            <path fill-rule="evenodd"
                                d="M2.628 1.601C5.028 1.206 7.49 1 10 1s4.973.206 7.372.601a.75.75 0 0 1 .628.74v2.288a2.25 2.25 0 0 1-.659 1.59l-4.682 4.683a2.25 2.25 0 0 0-.659 1.59v3.037c0 .684-.31 1.33-.844 1.757l-1.937 1.55A.75.75 0 0 1 8 18.25v-5.757a2.25 2.25 0 0 0-.659-1.591L2.659 6.22A2.25 2.25 0 0 1 2 4.629V2.34a.75.75 0 0 1 .628-.74Z"
                                clip-rule="evenodd" />
                        </svg>
                    </button>
                </div>
            </div>

            <form action="{{ route('products.search') }}" method="GET" class="max-w-md mx-auto m-8">
                <label for="default-search" class="mb-2 text-sm font-medium text-black sr-only">Search</label>
                <div class="relative">
                    <div class="absolute inset-y-0 start-0 flex items-center ps-3 pointer-events-none">
                        <svg class="w-4 h-4 text-gray-500 dark:text-gray-400" aria-hidden="true"
                            xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 20 20">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                stroke-width="2" d="m19 19-4-4m0-7A7 7 0 1 1 1 8a7 7 0 0 1 14 0Z" />
                        </svg>
                    </div>
                    <input type="search" id="default-search" name="q"
                        class="block w-full p-4 ps-10 text-sm text-gray-900 border border-main-color rounded-lg bg-white focus:ring-main-color focus:border-main-color"
                        placeholder="Cari Obat Sakit Kepala, Obat Sakit..." required />
                    <button type="submit"
                        class="text-white absolute end-2.5 bottom-2.5 bg-main-color hover:bg-third-color focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-4 py-2">Search</button>
                </div>
            </form>

            <section aria-labelledby="products-heading" class="pb-24 pt-6">
                <h2 id="products-heading" class="sr-only">Products</h2>

                <div class="grid grid-cols-1 gap-x-8 gap-y-10 lg:grid-cols-4">
                    <!-- Filters -->
                    <form method="GET" action="{{ route('products.filter') }}" class="hidden lg:block">
                        <h3 class="sr-only">Categories</h3>

                        <div x-data="{ open: true }" class="border-b border-gray-200 py-6">
                            <h3 class="-my-3 flow-root">
                                <!-- Expand/collapse section button -->
                                <button type="button" @click="open = !open"
                                    class="flex w-full items-center justify-between bg-white py-3 text-sm text-gray-400 hover:text-gray-500"
                                    aria-controls="filter-section-1" :aria-expanded="open">
                                    <span class="font-medium text-gray-900">Kategori</span>
                                    <span class="ml-6 flex items-center">
                                    </span>
                                </button>
                            </h3>
                            <!-- Filter section, show/hide based on section state. -->
                            <div x-show="open" x-transition class="pt-6" id="filter-section-1">
                                <div class="space-y-4">
                                    @foreach ($categories as $category)
                                        <div class="flex items-center">
                                            <input id="filter-category-{{ $category->id }}" name="category[]"
                                                value="{{ $category->id }}" type="checkbox"
                                                class="h-4 w-4 rounded border-gray-300 text-main-color focus:ring-main-color"
                                                {{ in_array($category->id, $selectedCategories ?? []) ? 'checked' : '' }}>
                                            <label for="filter-category-{{ $category->id }}"
                                                class="ml-3 text-sm text-gray-600">
                                                {{ $category->name }}
                                            </label>
                                        </div>
                                    @endforeach
                                </div>
                            </div>
                        </div>
                    </form>

                    <!-- Product grid -->
                    <div class="lg:col-span-3">
                        <!-- Your content -->
                        <div class="bg-white">
                            <div class="mx-auto max-w-2xl px-4 py-0 sm:px-6 sm:py-0 lg:max-w-7xl lg:px-8">
                                <div
                                    class="mt-5 grid grid-cols-1 gap-x-8 gap-y-12 sm:grid-cols-2 lg:grid-cols-4 xl:gap-x-8">
                                    @foreach ($products as $product)
                                        <div
                                            class="flex flex-col w-full max-w-xl rounded-xl border-2 border-gray-300 mx-3 my-2 px-2 gap-y-2">
                                            <div
                                                class="size-full flex items-center justify-center bg-gray-100 p-2 mt-2 mx-auto rounded-lg">
                                                <!-- Gambar yang dapat diklik -->
                                                <a href="{{ route('product.tampilkan', $product->id) }}">
                                                    <img src="{{ asset('assets/uploaded/' . $product->gambar) }}"
                                                        alt="{{ $product->name }}" class="w-48">
                                                </a>
                                            </div>

                                            <div class="px-4">
                                                <!-- Nama produk yang dapat diklik -->
                                                <a href="{{ route('product.tampilkan', $product->id) }}">
                                                    <p class="truncate text-xl font-bold mt-5">{{ $product->name }}
                                                    </p>
                                                </a>
                                                <p class="text-sm text-gray-500 mt-3 mb-3">Kategori:
                                                    {{ $product->category->name ?? 'Tidak ada kategori' }}</p>
                                                <span class="text-xl font-bold">Rp
                                                    {{ number_format($product->harga, 0, ',', '.') }}</span>

                                                <!-- Form untuk menambahkan produk ke keranjang -->
                                                <form action="{{ route('cart.add') }}" method="POST"
                                                    id="add-to-cart-form-{{ $product->id }}">
                                                    @csrf
                                                    <input type="hidden" name="product_id"
                                                        value="{{ $product->id }}">
                                                    <button type="submit"
                                                        class="mt-6 mb-4 w-full text-sm font-medium text-white bg-green-500 rounded-md py-3 hover:bg-green-600">
                                                        Tambah ke Keranjang
                                                    </button>
                                                </form>
                                            </div>
                                        </div>
                                    @endforeach
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </main>
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

<script>
    document.querySelectorAll('input[name="category[]"]').forEach((checkbox) => {
        checkbox.addEventListener('change', function() {
            this.closest('form').submit(); // Submit form saat checkbox berubah
        });
    });
</script>
