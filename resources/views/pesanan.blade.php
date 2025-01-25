<x-start></x-start>

<x-navbar></x-navbar>

<section class="py-8 relative">
    <div class="w-full max-w-7xl px-4 md:px-5 lg:px-5 mx-auto">
        <div class="w-full flex-col justify-start items-center gap-10 inline-flex">
            <div class="w-full flex-col justify-start items-center gap-4 flex">
                <h2 class="w-full text-center text-black text-3xl font-bold font-manrope leading-normal">Order Tracking
                </h2>
                {{-- <p class="max-w-4xl text-center text-gray-500 text-base font-normal leading-relaxed">Order tracking is a
                    service provided by companies to allow customers to monitor the progress and location of their
                    purchases from the time they are placed until they are delivered.</p> --}}
            </div>
            <div class="w-full flex-col justify-start items-start gap-10 flex">
                <div class="w-full justify-between items-center flex sm:flex-row flex-col gap-3">
                    <h3 class="text-gray-900 text-2xl font-semibold font-manrope leading-9">Order Details</h3>
                    <button
                        class="sm:w-fit w-full px-5 py-2.5 bg-main-color hover:bg-second-color transition-all duration-400 ease-in-out rounded-lg shadow-[0px_1px_2px_0px_rgba(16,_24,_40,_0.05)] justify-center items-center flex">
                        <span class="px-2 py-px text-center text-white text-base font-semibold leading-relaxed">Download
                            Invoice</span>
                    </button>
                </div>
                <div
                    class="w-full py-6 border-t border-b border-gray-100 md:justify-between justify-center md:items-start items-center md:gap-8 gap-10 flex flex-wrap">
                    <!-- Order Number -->
                    <div class="flex-col justify-start items-start gap-3 inline-flex">
                        <h6 class="text-gray-500 text-base font-normal leading-relaxed">Nomor Order</h6>
                        <h4 class="text-black text-xl font-semibold leading-8">{{ $order->tag }}</h4>
                    </div>

                    <!-- Order Placed -->
                    <div class="flex-col justify-start items-start gap-3 inline-flex">
                        <h6 class="text-gray-500 text-base font-normal leading-relaxed">Order Dibuat</h6>
                        <h4 class="text-black text-xl font-semibold leading-8">
                            {{ \Carbon\Carbon::parse($order->created_at)->format('M d, Y') }}
                        </h4>
                    </div>

                    <!-- Order Delivered -->
                    <div class="flex-col justify-start items-start gap-3 inline-flex">
                        <h6 class="text-gray-500 text-base font-normal leading-relaxed">Orderan Telah Sampai</h6>
                        <h4 class="text-black text-xl font-semibold leading-8">
                            {{ $order->status === 'Completed' ? \Carbon\Carbon::parse($order->updated_at)->format('M d, Y') : 'Pending' }}
                        </h4>
                    </div>

                    <!-- No of Items -->
                    <div class="flex-col justify-start items-start gap-3 inline-flex">
                        <h6 class="text-gray-500 text-base font-normal leading-relaxed">Jumlah Barang</h6>
                        <h4 class="text-black text-xl font-semibold leading-8">{{ $order->jumlah }} items</h4>
                    </div>

                    <!-- Status -->
                    <div class="flex-col justify-start items-start gap-3 inline-flex">
                        <h6 class="text-gray-500 text-base font-normal leading-relaxed">Status</h6>
                        <h4 class="text-black text-xl font-semibold leading-8">{{ ucfirst($order->status) }}</h4>
                    </div>
                </div>

            </div>
            <div class="w-full flex-col justify-start items-start gap-10 flex">
                <div class="w-full justify-between items-start flex sm:flex-row flex-col gap-3">
                    <h3 class="text-gray-900 text-2xl font-semibold font-manrope leading-9">Order Tracking</h3>
                    <h3 class="text-right text-gray-600 text-2xl font-semibold font-manrope leading-9">Order ID:
                        {{ $order->tag }}</h3>
                </div>
                <div class="w-full py-9 rounded-xl border border-gray-200 flex-col justify-start items-start flex">
                    <div class="w-full flex-col justify-center sm:items-center items-start gap-8 flex">
                        <ol class="flex sm:items-center items-start w-full sm:gap-0 gap-5">
                            <li
                                class="flex w-full relative justify-center text-main-color text-base font-semibold after:content-['']  after:w-full after:h-0.5 after:bg-indigo-600 after:inline-block after:absolute lg:after:top-4 after:top-3 xl:after:left-40 lg:after:left-36 md:after:left-28 sm:after:left-20 after:left-16">
                                <div class="block sm:whitespace-nowrap z-10 flex flex-col items-center text-center">
                                    <span
                                        class="w-6 h-6 bg-main-color text-center border-2 border-transparent rounded-full flex justify-center items-center mx-auto mb-1 text-base font-bold text-white lg:w-8 lg:h-8">1</span>
                                    Order Placed
                                    <span class="text-main-color text-base font-normal text-center">{{ \Carbon\Carbon::parse($order->created_at)->format('M d, Y') }}</span>
                                </div>
                            </li>
                            <li
                                class="flex w-full relative justify-center text-main-color text-base font-semibold after:content-['']  after:w-full after:h-0.5 after:bg-indigo-600 after:inline-block after:absolute lg:after:top-4 after:top-3 xl:after:left-40 lg:after:left-36 md:after:left-28 sm:after:left-20 after:left-16">
                                <div class="block sm:whitespace-nowrap z-10 flex flex-col items-center text-center">
                                    <span
                                        class="w-6 h-6 bg-main-color rounded-full flex justify-center items-center mx-auto mb-1 text-white text-base font-bold lg:w-8 lg:h-8">2</span>
                                    Order Packed
                                    <span class="text-main-color text-base font-normal text-center">{{ \Carbon\Carbon::parse($order->created_at)->format('M d, Y') }}</span>
                                </div>
                            </li>
                            <li
                                class="flex w-full relative justify-center text-main-color text-base font-semibold after:content-['']  after:w-full after:h-0.5 after:bg-gray-300 after:inline-block after:absolute lg:after:top-4 after:top-3 xl:after:left-40 lg:after:left-36 md:after:left-28 sm:after:left-20 after:left-16">
                                <div class="block sm:whitespace-nowrap z-10 flex flex-col items-center text-center">
                                    <span
                                        class="w-6 h-6 bg-main-color rounded-full flex justify-center items-center mx-auto mb-1 text-white text-base font-bold lg:w-8 lg:h-8">3</span>
                                    In Transit
                                    <span class="text-main-color text-base font-normal text-center">{{ \Carbon\Carbon::parse($order->updated_at)->format('M d, Y') }}</span>
                                </div>
                            </li>
                            <li class="flex w-full relative justify-center text-gray-500 text-base font-semibold">
                                <div class="block sm:whitespace-nowrap z-10 flex flex-col items-center text-center">
                                    <span
                                        class="w-6 h-6 text-main-color border-2 bg-transparent border-main-color rounded-full flex justify-center items-center mx-auto mb-1 text-sm lg:w-8 lg:h-8">4</span>
                                    Out for Delivery
                                    <span class="text-gray-500 text-base font-normal text-center">{{ $order->status === 'Completed' ? \Carbon\Carbon::parse($order->updated_at)->format('M d, Y') : 'Pending' }}</span>
                                </div>
                            </li>
                        </ol>
                    </div>
                </div>
            </div>
            <div class="w-full flex-col justify-start items-start gap-10 flex">
                <h3 class="text-gray-900 text-2xl font-semibold font-manrope leading-9">Items from the order</h3>
                <div class="w-full justify-center items-start ">
                    <div class="w-full hidden md:grid grid-cols-2 p-4 bg-gray-50">
                        <span class="text-gray-500 text-base font-normal leading-relaxed">Product</span>
                        <p class="flex items-center justify-between">
                            <span
                                class="w-full max-w-[200px] text-center px-8 text-gray-500 text-base font-normal leading-relaxed ">Size</span>
                            <span
                                class="w-full max-w-[260px] text-center px-8 text-gray-500 text-base font-normal leading-relaxed ">Quantity</span>
                            <span
                                class="w-full max-w-[200px] text-center px-8 text-gray-500 text-base font-normal leading-relaxed ">Price</span>
                            <span class="w-full max-w-[200px] text-center"></span>
                        </p>
                    </div>
                    <div
                        class="grid grid-cols-1 md:grid-cols-2 min-[550px]:gap-6 py-3 border-b border-gray-200 max-sm:max-w-xl max-xl:mx-auto">
                        <div
                            class="flex items-center flex-col min-[550px]:flex-row gap-3 min-[550px]:gap-4 w-full max-sm:justify-center max-sm:max-w-xl max-xl:mx-auto">
                            <div
                                class="w-[120px] h-[120px] img-box bg-gray-50 rounded-xl justify-center items-center inline-flex">
                                <img src="https://pagedone.io/asset/uploads/1713334568.png" alt="Denim Shirt image"
                                    class="xl:w-[75px] object-cover">
                            </div>
                            <div class="pro-data w-full max-w-sm flex-col justify-start items-start gap-2 inline-flex">
                                <h4 class="w-full text-black text-lg font-medium leading-8 max-[550px]:text-center">Top
                                    for Women</h4>
                                <h5
                                    class="w-full text-gray-500 text-base font-normal leading-relaxed min-[550px]:my-0 my-2 max-[550px]:text-center">
                                    Product ID: 4553458120</h5>
                            </div>
                        </div>
                        <div
                            class="w-full flex items-center justify-between flex-col min-[550px]:flex-row w-full max-sm:max-w-xl max-xl:mx-auto gap-2">
                            <h5 class="w-full max-w-[142px] text-center text-black text-lg font-medium leading-relaxed">
                                L</h5>
                            <button class="max-w-[160px] flex items-center w-full mx-0 justify-center gap-5">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                    viewBox="0 0 24 24" fill="none">
                                    <path d="M18 12H6" stroke="#111827" stroke-width="1.6" stroke-linecap="round">
                                    </path>
                                </svg>
                                <input type="text"
                                    class="w-12 h-12 focus:outline-none text-gray-900 placeholder-gray-900 text-lg font-medium leading-relaxed px-2.5 bg-white rounded-full border border-gray-200 justify-center items-center flex"
                                    placeholder="02">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                    viewBox="0 0 24 24" fill="none">
                                    <path d="M12 6V18M18 12H6" stroke="#111827" stroke-width="1.6"
                                        stroke-linecap="round"></path>
                                </svg>
                            </button>
                            <h5
                                class="max-w-[142px] w-full text-center text-black text-lg font-medium leading-relaxed pl-5">
                                $50.00</h5>
                            <button
                                class="group max-w-[176px] text-center w-full flex items-center justify-center transition-all duration-700 ease-in-out">
                                <svg class="text-gray-500 group-hover:text-gray-900 transition-all duration-700 ease-in-out"
                                    xmlns="http://www.w3.org/2000/svg" width="40" height="40" viewBox="0 0 40 40"
                                    fill="none">
                                    <g filter="url(#filter0_d_484_1442)">
                                        <path d="M13.5 13.5L26.5 26.5M26.5 13.5L13.5 26.5" stroke="currentColor"
                                            stroke-width="1.6" stroke-linecap="round"></path>
                                    </g>
                                    <defs>
                                        <filter id="filter0_d_484_1442" x="-2" y="-1" width="44" height="44"
                                            filterUnits="userSpaceOnUse" color-interpolation-filters="sRGB">
                                            <feFlood flood-opacity="0" result="BackgroundImageFix"></feFlood>
                                            <feColorMatrix in="SourceAlpha" type="matrix"
                                                values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0" result="hardAlpha">
                                            </feColorMatrix>
                                            <feOffset dy="1"></feOffset>
                                            <feGaussianBlur stdDeviation="1"></feGaussianBlur>
                                            <feComposite in2="hardAlpha" operator="out"></feComposite>
                                            <feColorMatrix type="matrix"
                                                values="0 0 0 0 0.0627451 0 0 0 0 0.0941176 0 0 0 0 0.156863 0 0 0 0.05 0">
                                            </feColorMatrix>
                                            <feBlend mode="normal" in2="BackgroundImageFix"
                                                result="effect1_dropShadow_484_1442"></feBlend>
                                            <feBlend mode="normal" in="SourceGraphic"
                                                in2="effect1_dropShadow_484_1442" result="shape"></feBlend>
                                        </filter>
                                    </defs>
                                </svg>
                            </button>
                        </div>
                    </div>
                    <div
                        class="grid grid-cols-1 md:grid-cols-2 min-[550px]:gap-6 py-3 border-b border-gray-200 max-sm:max-w-xl max-xl:mx-auto">
                        <div
                            class="flex items-center flex-col min-[550px]:flex-row gap-3 min-[550px]:gap-4 w-full max-sm:justify-center max-sm:max-w-xl max-xl:mx-auto">
                            <div
                                class="w-[120px] h-[120px] img-box bg-gray-50 rounded-xl justify-center items-center inline-flex">
                                <img src="https://pagedone.io/asset/uploads/1713334581.png"
                                    alt="Blue T-shirt for Men image" class="xl:w-[75px] object-cover">
                            </div>
                            <div class="pro-data w-full max-w-sm flex-col justify-start items-start gap-2 inline-flex">
                                <h4 class="w-full text-black text-lg font-medium leading-8 max-[550px]:text-center">
                                    Blue T-shirt for Men</h4>
                                <h5
                                    class="w-full text-gray-500 text-base font-normal leading-relaxed min-[550px]:my-0 my-2 max-[550px]:text-center">
                                    Product ID: 8953458747</h5>
                            </div>
                        </div>
                        <div
                            class="flex items-center justify-between flex-col min-[550px]:flex-row w-full max-sm:max-w-xl max-xl:mx-auto gap-2">
                            <h5
                                class="w-full max-w-[142px] text-center text-black text-lg font-medium leading-relaxed">
                                M</h5>
                            <button class="max-w-[160px] flex items-center w-full mx-0 justify-center gap-5">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                    viewBox="0 0 24 24" fill="none">
                                    <path d="M18 12H6" stroke="#111827" stroke-width="1.6" stroke-linecap="round">
                                    </path>
                                </svg>
                                <input type="text"
                                    class="w-12 h-12 focus:outline-none text-gray-900 placeholder-gray-900 text-lg font-medium leading-relaxed px-2.5 bg-white rounded-full border border-gray-200 justify-center items-center flex"
                                    placeholder="02">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                    viewBox="0 0 24 24" fill="none">
                                    <path d="M12 6V18M18 12H6" stroke="#111827" stroke-width="1.6"
                                        stroke-linecap="round"></path>
                                </svg>
                            </button>
                            <h5
                                class="max-w-[142px] w-full text-center text-black text-lg font-medium leading-relaxed pl-5">
                                $50.00</h5>
                            <button
                                class="group max-w-[176px] text-center w-full flex items-center justify-center transition-all duration-700 ease-in-out">
                                <svg class="text-gray-500 group-hover:text-gray-900 transition-all duration-700 ease-in-out"
                                    xmlns="http://www.w3.org/2000/svg" width="40" height="40"
                                    viewBox="0 0 40 40" fill="none">
                                    <g filter="url(#filter0_d_484_1442)">
                                        <path d="M13.5 13.5L26.5 26.5M26.5 13.5L13.5 26.5" stroke="currentColor"
                                            stroke-width="1.6" stroke-linecap="round"></path>
                                    </g>
                                    <defs>
                                        <filter id="filter0_d_484_1442" x="-2" y="-1" width="44" height="44"
                                            filterUnits="userSpaceOnUse" color-interpolation-filters="sRGB">
                                            <feFlood flood-opacity="0" result="BackgroundImageFix"></feFlood>
                                            <feColorMatrix in="SourceAlpha" type="matrix"
                                                values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0" result="hardAlpha">
                                            </feColorMatrix>
                                            <feOffset dy="1"></feOffset>
                                            <feGaussianBlur stdDeviation="1"></feGaussianBlur>
                                            <feComposite in2="hardAlpha" operator="out"></feComposite>
                                            <feColorMatrix type="matrix"
                                                values="0 0 0 0 0.0627451 0 0 0 0 0.0941176 0 0 0 0 0.156863 0 0 0 0.05 0">
                                            </feColorMatrix>
                                            <feBlend mode="normal" in2="BackgroundImageFix"
                                                result="effect1_dropShadow_484_1442"></feBlend>
                                            <feBlend mode="normal" in="SourceGraphic"
                                                in2="effect1_dropShadow_484_1442" result="shape"></feBlend>
                                        </filter>
                                    </defs>
                                </svg>
                            </button>
                        </div>
                    </div>
                </div>
            </div>
            <div class="w-full justify-start items-start gap-8 grid sm:grid-cols-2 grid-cols-1">
                <div
                    class="w-full p-6 rounded-xl border border-gray-200 flex-col justify-start items-start gap-4 inline-flex">
                    <div class="w-full justify-between items-start gap-2.5 inline-flex">
                        <h4 class="text-gray-600 text-xl font-medium leading-8">Discount</h4>
                        <h4 class="text-right text-black text-xl font-medium leading-8">$0.00</h4>
                    </div>
                    <div class="w-full justify-between items-start gap-2.5 inline-flex">
                        <h4 class="text-gray-600 text-xl font-medium leading-8">Delivery</h4>
                        <h4 class="text-right text-black text-xl font-medium leading-8">$20.00</h4>
                    </div>
                </div>
                <div
                    class="w-full p-6 rounded-xl border border-gray-200 flex-col justify-start items-start gap-4 inline-flex">
                    <div class="w-full justify-between items-start gap-2.5 inline-flex">
                        <h4 class="text-gray-600 text-xl font-medium leading-8">Subtotal</h4>
                        <h4 class="text-right text-black text-xl font-medium leading-8">$200.00</h4>
                    </div>
                    <div class="w-full justify-between items-start gap-2.5 inline-flex">
                        <h4 class="text-gray-600 text-xl font-medium leading-8">Total</h4>
                        <h4 class="text-right text-black text-xl font-medium leading-8">$220.00</h4>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>


<x-end></x-end>
