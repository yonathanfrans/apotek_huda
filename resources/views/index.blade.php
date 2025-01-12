<x-start></x-start>

<x-navbar></x-navbar>

<!-- Floating button -->
<div class="group fixed bottom-0 right-0  flex justify-center items-center w-32 h-32">
    <!-- main -->
    <div class=" flex items-center justify-center p-3 z-50 absolute  ">
        <svg class="w-20 h-20 group-hover:rotate-45 transition-all duration-[0.6s]" viewBox="0 0 109 109" fill="none"
            xmlns="http://www.w3.org/2000/svg">
            <g clip-path="url(#clip0_43_33)">
                <rect width="109" height="109" rx="54.5" fill="#80AF81" />
                <path
                    d="M49.0909 83.6364V23.6364H59.2727V83.6364H49.0909ZM24.1818 58.7273V48.5455H84.1818V58.7273H24.1818Z"
                    fill="white" />
            </g>
            <defs>
                <clipPath id="clip0_43_33">
                    <rect width="109" height="109" rx="54.5" fill="white" />
                </clipPath>
            </defs>
        </svg>
    </div>

    <!-- sub top 1 -->
    <div
        class="absolute transition-all duration-[0.2s] ease-out scale-x-0 group-hover:scale-x-100 group-hover:-translate-y-24 p-2 hover:p-3">
        <svg class="w-20 h-20" viewBox="0 0 109 109" fill="none" xmlns="http://www.w3.org/2000/svg"
            xmlns:xlink="http://www.w3.org/1999/xlink">
            <rect width="109" height="109" rx="54.5" fill="#80AF81" />
            <rect x="19" y="19" width="71" height="71" fill="url(#pattern0_46_127)" />
            <defs>
                <pattern id="pattern0_46_127" patternContentUnits="objectBoundingBox" width="1" height="1">
                    <use xlink:href="#image0_46_127" transform="scale(0.01)" />
                </pattern>
                <image id="image0_46_127" width="100" height="100"
                    xlink:href="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAGQAAABkCAYAAABw4pVUAAAACXBIWXMAAAsTAAALEwEAmpwYAAAFVUlEQVR4nO2dXYxfQxTAr7aU4GFDfZX4qDS0VcSjSESEICgtfVGCVEJMiK82Flk80NiXDSEiikSECoJG4iu7pV1tNNHWppLqrvp80G4REluqP5n0SDYbanfu3JkzM/eX3DTZ7G7Oub/t/945M3OmqlpaWlpaWlpaWgoEmAzMAq4ElgLPAWuATcAgsBPYJddO+dom+Z7l8jP2Z0+1vyt2PkkCnATcBKwAhvHHr8D7wBLgLGBS7FzVAhwvN2or4fgGeBSYGTt/FQD7A9cC/cRnDbAImFKVBnCAiNiCPr4CbgMOqnIH2A+4AfgB/XwHXGdjrnIEmAusJj0+Bk6rcgGYCnQDf5IufwDL7EdtlcGb0yfkw3pgRpUiwDwZqOXGL8DCKiWALvLn/iqRMseTlMMTakf78vB+lfJ4Rd3D3v6VSN2pVN5QVbgEemLfEQU8VWkAeDD2nVDEfbFlLIh9B5Sxx869xJIxA/g59h1QyE/AiTHeqOyoVSsjwLvycXo1cK7U0o4DOuRfOwl2ukxUnQdcBtwKPOKh+Lku6JuX1KY0sgG4ETikZn59HmJZ5u+O7zvYuQoLhTtkcsnLIM2TEFuQnOMjnv+bz9BWQv8UmO45Tx9CLKsanU+RySVN9AOHNpCnLyGWRb7j+yfIA4Hv0cPXwLSGcu3zvJDC/wMeuBld7/sXek+yGSGWxU2sDhlCD697TbB5IYNeV7PIChFNnOktuTBCLNf4DFDTNOx6b4mFFbLaV3Az0cWSmvlMA84Gzt/HtbGh5179+XjgYXRxhmMe02XeYnfE2Lt8DATtSj4t/OYyGgeOUfLKvrXWQFGKb5pY65jHSvQwu46Q29HFS461N02YOkLeRBfdGcxovlZnSY+dbNFEp0Mevehi2KkqLdvItHGXQx4aHuZjOcVFyBXowzjkEfM197+43EWI3SyZtBD2Vqg1co+LkOdJX8jB6ORZFyF2o4o2TCZCVrkIGUAfJhMhG12EbEMfJhMhQy5CfG7Y94XJRMh2FyG2VYU2TCZCRjQL6ZHVhB3juKY6VKs7HK6mKxS7XISE2h8YZoXfOAGOCJDzDpfAvqVMIecEyHmbS2BfUKaQxQFyHnAJzC6DLFFId4Cce10Cs82/ShSyMkDOz7gE1kmZQr4MkPNSl8AWUpgQ9raNCrHVYoFLcLZHYWlCZmueoLKDqh8LEzI/QL7bnZcCBVrkoEnIvaoXigN3BwjQSr9qnNfJE4x/ygR+t70+CJDvHSl8ppZUXJzlLESS2oweTOJCPq8lQ5J6CD2YxIU84EPIHPRgEhdS7+NqVGIfoQOTsJA+LzKUNZkxCQuZ51PIZCWbPk2iQoa8NzizNyN2VqQr5BavMkZtjQ5RCc1NyGBjnYECVoBzEjK/ERmjCo5rIyZnEhPS33gzfynL/x4pQZOQkJFgTfxts8dISZqEhEx8VtAVqaLGaPFnEhGyLvhJPcAJMtkSEpOAkOFoJyhIG4qQW8aMciH2XlzU3B0fX9L2ZLVQGOVCJrwptRGAxwIlbBQLebzSgoxPni5YyHJ1x1ZIAfLFAoW8oE7GmP8pXQUJ6VEr418qw39lLGS3bUtepQRwcQPjFKNAiO2ifUmVIsCRwHsZCekFjq1SRh72nZ4KkiaSkBHJQc+xRnWR4yHeSVDIh7bCXeWKLJjYnICQLbYjUlUCcqrbpcBnCoUMSOPoIs9VnyQn27w1ziKlaUiI3aTztsSS53Hdjn11O2WeZU8gIRukOHp0c5llAHCUnFWyYkwTnLpCbLu/l4HrbS/f5jLIHOAw4IKJzlHLnsE7Zd7m8OYibGlpaWlpaWlpqVTzN2F2x39rAiE5AAAAAElFTkSuQmCC" />
            </defs>
        </svg>
    </div>

    <!-- sub top 2 -->
    <div
        class="absolute transition-all duration-[0.2s] ease-out scale-x-0 group-hover:scale-x-100 group-hover:-translate-y-48 p-2 hover:p-3 delay-[0.1s]">
        <svg class="w-20 h-20" viewBox="0 0 109 109" fill="none" xmlns="http://www.w3.org/2000/svg"
            xmlns:xlink="http://www.w3.org/1999/xlink">
            <rect width="109" height="109" rx="54.5" fill="#80AF81" />
            <rect x="19" y="19" width="71" height="71" fill="url(#pattern0_46_123)" />
            <defs>
                <pattern id="pattern0_46_123" patternContentUnits="objectBoundingBox" width="1" height="1">
                    <use xlink:href="#image0_46_123" transform="scale(0.01)" />
                </pattern>
                <image id="image0_46_123" width="100" height="100"
                    xlink:href="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAGQAAABkCAYAAABw4pVUAAAACXBIWXMAAAsTAAALEwEAmpwYAAAFXklEQVR4nO2d3W8VRRiHt9SoNxZjUcIFQT5MjS0YgUo1KjUxwc8bopKWkHhD44UJCGgDwYBUE6/x666WhopUjSH+DQbjv6BikAstbemHCDERHzJ2Gmvpnp09Z2Z2Z+d9kk2a03P2nXd/Z+admXdmTpIIgiAIgiAIgiAIgiAIgrAkQBOwHngO6AP6S3b16bKpMjZVUkbgTmAXMApcJhzGgC+AV5QPSegA9wLvA1OEzxVgAFiRhAZwG7APmKF6XAWOA7cnIQCsBX6g+nwPrEnKDPB0RZqnPM3Y9qSMAC8B14mP68CLSZkAuiMVY56/gGeSEsWMGJqpX/WVxmThMUX3pqoewL8B1i3wWQ0Yz6W897x6JkUKcoDqi9G0hN/Laoiyr8hB3yzV5Z+FNWMJ/zekfG6mkMGjHoFXmYsGzyAtpgz4UeH/c1NVD+QXDZ7DpRoB/g4/aswV5FXiYH2NZ/BAxmdf9inIWeLgnArgKUH924zPfu4znxHSFLoNUTYsqhlZYih+95JP0f3wonMUo8AR1SwATwFb9LVdv6b+96XlL86lGjEjjbU+BHmeYibxTgKdeb51ujZvAz4qqBPyrFs15px83bMQ/cBdFsrdAhz2LEyfnade27G3PDkzDNznoPwrgdOefDhku/xLOXTMsROzQK8HP/YAfzj25VjiwRGVvnQZsDc7d+I/X7Zom644HrIgY0Cbcwdu9afNYTc+WEFmfdaMxQBb9eIF2wQrSG+duZjHgd3Am/pSfz9WT05CxxTbBCnIcE77DwOn9AReGhP6PZty3nskdkGumHZtgRW6K3wjx/3Ve4eA1hxd4qmYBek3tNkBXGjAzk9Au6EtNe0SpSCqdrQYijFjwd60iSjAcou1JChBThrYatXfblv8olLPBnY/jlGQTgNbw9hnyMBuV2yCjGXN2gKbcgZwU9Q9HzGYJR6PSZCzBnZO4Y7PDOyrfEo0ghwxGPRN4I6JrMEj8E5MgtRcAMDcCNw1XR4WcgQjyJMZNnbjnh6DBeTRCJIVVA/hnoMZZdhswUZlBDmIew5klCEqQbKarF7csyujDFE1WRLUA+v2NlsamKUh3d5FjBoIP+RQkEED+1/F1GRdNpg62Qj8jX3UPTsybC+LbepEsa2gWjJoYNfWwDQoQT40sHUP8CP2uGCyuwn4NEZBpgwTVO06ueQrQXW3JXvBCaI4bGizHfi5ATsqyfWQoa2jFv0LThBVS1Ya2m3VMeVGzgA+qJo+QxurLB+YE5wgitM57W9U+YyM6flx/Z6OnPc+Y9m3IAVR7KmjHM061dqzYKFcj94P0lzH/V5z4FewgqhV6FudFz7dp0eBPx34Fawg84PFNucO3OrPg7LYOp1JtTbXoxidVdiO4HrDztV6YkqdMcNFM+V9w46vLW0jpl3inOVf5aA3VeiWNp+bPqf0WtsWC+Vergd9tkbhpdn0qQ4Z9s20Xt7ZtdTJChmztmqi8BPPQsyzw60ac06uo1jGda7iqF6q073g4IBu/Zr639eO13aZcL8PQZr0sRFCGY7W0KKo47eF2ox4ESOy45kaYafvA8zUhhuhDAeYaVHeSymMgIcResomzCoett8o06b5Fxei7G+4+NXjjULEWLCPQx0eLMzxXT25GNuirJEA/y9qELo6KQP6OAvXM6dl5lrWAnLvRPxzFdeAF5Iyog+krHUGSRWbqSeSMqNjyvlIAvjqJAT0tHdfRccp0/oHz4rtTTUweByoSDM2Cbxb2KDPJmpeRx9wfCawqfvfdCp5p/e5KV/ofIr6maQdwF7gbeAE8EHB1wldlr26bO5PpRYEQRAEQRAEQRAEQRCEJFxuAn852MVcPaxkAAAAAElFTkSuQmCC" />
            </defs>
        </svg>
    </div>

    <!-- sub top 3 -->
    <div
        class="absolute transition-all duration-[0.2s] ease-out scale-x-0 group-hover:scale-x-100 group-hover:-translate-y-72 p-2 hover:p-3 delay-[0.2s]">
        <svg class="w-20 h-20" viewBox="0 0 109 109" fill="none" xmlns="http://www.w3.org/2000/svg"
            xmlns:xlink="http://www.w3.org/1999/xlink">
            <rect width="109" height="109" rx="54.5" fill="#80AF81" />
            <rect x="19" y="19" width="71" height="71" fill="url(#pattern0_46_125)" />
            <defs>
                <pattern id="pattern0_46_125" patternContentUnits="objectBoundingBox" width="1" height="1">
                    <use xlink:href="#image0_46_125" transform="scale(0.01)" />
                </pattern>
                <image id="image0_46_125" width="100" height="100"
                    xlink:href="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAGQAAABkCAYAAABw4pVUAAAACXBIWXMAAAsTAAALEwEAmpwYAAAE70lEQVR4nO2dy49UVRCHK4CCYfwTBAUMbhASEnwlLmA0gi5RF+rC6J6NARNE2aELw2tFiGJGQPwbiEbjKxEWiBs1YgzOzjAKKjQP5zMVyqTpMJN7u2/fU3Xu+ZKbTDrdM6fOb+4951RVV4kUCoVCoZApwBJgHfA8sAs4BnwDnAXOATPAVbtm7LWz9p5j9pnn7HcsSW1POIBFwHpgB3ASuEJzXAdOA28Dk8Di1Pa6BFgIPAF8CPxNe/wFTJk4C6TrAMuBd4Bp0vOb3TnLpWsAK4D9QA9/XLO75gHJHWAVcAL4F//cAD7Sfx7JDeBOW6SbXKDb4jKwO5sdGvAU8DPx+Ql4UqIC3GGL5Cx5cUjveAm4e9KDWa6cBlZKBIBngD/Jnz+ALeIZ4CXbNnaFG8Cr4hFgW4brRRXU5t3iCVu8u84e8QDweuqZcMT21GK82NHH1FzoXLyScjel7uzCreicPJ3COdiFre0oW+L72hJjMXCK9PTMY/wQsNQu/fmAEy/yt62c6G0SUjMNrJ1njOucxFj2tuEoTL2I9+YTY0CU1HfK7NgckpZs4MFru7/GmA868RI3H7u3mIAHNtQY88P4YFfTYqx0FFyaqDHuCfwEuZqLPAIf44eJGuO+Gz8cb0qM1ebV9MKGgI8sbA7vb0KQI/jiQLBFvZ/3moj8eYtv9HRLW3Hbq+mlntC5XDaKIJrE5pHp+URxdDBszk1v6Z1ejcL++w/aOjFh1yP2mrc7YzBDsn7aqp4wU488YzYNI4gmPhfGwwfDZBq2mYXeNS5p3lodQR5PPeIO8FhEv1XOVPdvAZ+nHm0H+LSqGHc5iCN0gSuVMurtUFVohzVVBNFvu7pDakIMtlYx5E0cInkKsrOKIfrdbndInoJMVTHkKxwieQryRRVDvicAkocg31UR5FcCIHkI8ksVQS4QAMlDkN+rCOI5lpCbIL0iSEBByiPL2SOrLOrOFvWy7XW27XV5MBykgh3ZHAxduk4yFWQqrHMxU0F2hnW/ZyrI1mwCVJKHIGuyCeFKfEGqhXDNmM9wjsQX5JNKYpgxb+EciS/IG1klykl8QR6tm0qqRYbdIrEFuVgrldQM0tq1bpHYghypJYYZpKW/3SKxBdk4jCALgPM4ReIKol+CWlhbEO+V4iSuIMNXngPu8RrSlZiCXBu52D/wPg6RmIIcHkmMvrIangoHRBWkmcIBZpx2CXCFxBPkaCNi9BUQ+CelNTK6DamLzzRb8i914EpGH7/vQNSQtRZ/SGWRjD7+lAXMxtN7xIoJJCnxJ6OPPQU6V5PNzP7chu1LZFxE3h2rGH2NWr5ObWkA2ikTa6Isi5Jymn0h5T5RtpRS43O6Rza3KkafKC84qOPrCZ2Ll5OI0SfK9tSz4IjXxAPqUk49Ew7w0dBloOVRhA6e+bc8+p/SFMwh2szEtn25M5NsNzXkOSXnw+OpcE2LgUUZtl6dtf4psVqv3sYhqR7P6Pw4dkdhW5j/a1vQwpqXreRh8z1AUmPNxI57jNHfBh3jUeBeyR11vNmz2EtPkkFflKbRrpauYbuxPVZ+OzXnbSzDF8vPBUtb3aQVn63IcJtZ6Po3Nw5Vj70LcLMJwHpgB3Cy4cfadWtOr9vxySwX6nHDzeSKtcCzmr1hNem/BM4A5yxQdtWuC/baGXvPlH1GP/tgEaBQKBQKkjH/AUSnvQQvw+bMAAAAAElFTkSuQmCC" />
            </defs>
        </svg>
    </div>
</div>

<!-- Carousel -->
<div id="animation-carousel" class="relative w-full max-w-screen-xl mx-auto my-16" data-carousel="slide">
    <!-- Carousel wrapper -->
    <div class="relative h-56 overflow-hidden rounded-lg md:h-96">
        <!-- Item 1 -->
        <div class="hidden duration-500 ease-in-out" data-carousel-item>
            <img src="assets/img/carousel-1.webp"
                class="absolute block w-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2" alt="carousel-1">
        </div>
        <!-- Item 2 -->
        <div class="hidden duration-500 ease-in-out" data-carousel-item>
            <img src="assets/img/carousel-2.webp"
                class="absolute block w-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2" alt="carousel-2">
        </div>
        <!-- Item 3 -->
        <div class="hidden duration-500 ease-in-out" data-carousel-item>
            <img src="assets/img/carousel-3.webp"
                class="absolute block w-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2" alt="carousel-3">
        </div>
    </div>
    <!-- Slider controls -->
    <button
        class="absolute top-1/2 left-0 z-30 flex items-center justify-center px-8 cursor-pointer group focus:outline-none transform -translate-y-1/2"
        data-carousel-prev>
        <svg class="w-4 h-4 text-white rtl:rotate-180" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
            fill="none" viewBox="0 0 6 10">
            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                d="M5 1 1 5l4 4" />
        </svg>
    </button>

    <button
        class="absolute top-1/2 right-0 z-30 flex items-center justify-center px-8 cursor-pointer group focus:outline-none transform -translate-y-1/2"
        data-carousel-next>
        <svg class="w-4 h-4 text-white rtl:rotate-180" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
            fill="none" viewBox="0 0 6 10">
            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                d="m1 9 4-4-4-4" />
        </svg>
    </button>
</div>

<!-- Kategori Card -->
<div class="max-w-screen-xl mx-auto my-10 py-3 bg-white border border-gray-300 rounded-lg shadow-xl ">
    <div class="flex items-center justify-between px-9">
        <h5 class="mb-2 text-2xl font-semibold tracking-tight text-gray-900 cursor-default">Kategori Pilihan</h5>
        <button data-modal-target="default-modal" data-modal-toggle="default-modal"
            class="inline-flex font-normal place-items-center text-black gap-4 bg-second-color py-1 px-3 rounded-full">
            Tampilkan Semua
            <svg class="w-6 h-6 text-gray border-2 border-black rounded-full px-1" aria-hidden="true"
                xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 10">
                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                    d="M1 5h12m0 0L9 1m4 4L9 9" />
            </svg>
        </button>
    </div>

    <div class="grid grid-cols-7 m-2 px-2 gap-8">
        <a href="#" class="flex flex-col items-center font-medium text-lg">
            <img src="assets/img/Coughing.webp" alt="img-batuk" class="w-20 h-20">
            Batuk & Flu
        </a>
        <a href="#" class="flex flex-col items-center font-medium">
            <img src="assets/img/Coughing.webp" alt="img-batuk" class="w-20 h-20">
            Batuk & Flu
        </a>
        <a href="#" class="flex flex-col items-center font-medium">
            <img src="assets/img/Coughing.webp" alt="img-batuk" class="w-20 h-20">
            Batuk & Flu
        </a>
        <a href="#" class="flex flex-col items-center font-medium">
            <img src="assets/img/Coughing.webp" alt="img-batuk" class="w-20 h-20">
            Batuk & Flu
        </a>
        <a href="#" class="flex flex-col items-center font-medium">
            <img src="assets/img/Coughing.webp" alt="img-batuk" class="w-20 h-20">
            Batuk & Flu
        </a>
        <a href="#" class="flex flex-col items-center font-medium">
            <img src="assets/img/Coughing.webp" alt="img-batuk" class="w-20 h-20">
            Batuk & Flu
        </a>
        <a href="#" class="flex flex-col items-center font-medium">
            <img src="assets/img/Coughing.webp" alt="img-batuk" class="w-20 h-20">
            Batuk & Flu
        </a>
        <a href="#" class="flex flex-col items-center font-medium">
            <img src="assets/img/Coughing.webp" alt="img-batuk" class="w-20 h-20">
            Batuk & Flu
        </a>
        <a href="#" class="flex flex-col items-center font-medium">
            <img src="assets/img/Coughing.webp" alt="img-batuk" class="w-20 h-20">
            Batuk & Flu
        </a>
        <a href="#" class="flex flex-col items-center font-medium">
            <img src="assets/img/Coughing.webp" alt="img-batuk" class="w-20 h-20">
            Batuk & Flu
        </a>
        <a href="#" class="flex flex-col items-center font-medium">
            <img src="assets/img/Coughing.webp" alt="img-batuk" class="w-20 h-20">
            Batuk & Flu
        </a>
        <a href="#" class="flex flex-col items-center font-medium">
            <img src="assets/img/Coughing.webp" alt="img-batuk" class="w-20 h-20">
            Batuk & Flu
        </a>
        <a href="#" class="flex flex-col items-center font-medium">
            <img src="assets/img/Coughing.webp" alt="img-batuk" class="w-20 h-20">
            Batuk & Flu
        </a>
        <a href="#" class="flex flex-col items-center font-medium">
            <img src="assets/img/Coughing.webp" alt="img-batuk" class="w-20 h-20">
            Batuk & Flu
        </a>

    </div>


</div>

<!-- Modal Kategori -->
<div id="default-modal" tabindex="-1" aria-hidden="true"
    class="hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 justify-center items-center w-full md:inset-0 h-[calc(100%-1rem)] max-h-full">
    <div class="bg-white rounded-xl max-w-3xl p-6 space-y-4 shadow-lg bg-no-repeat bg-center"
        style="background-image: url('assets/img/modal-apotek.webp'); background-size: 40%;">
        <!-- Judul Modal -->
        <div class="flex items-center justify-between px-4">
            <h2 class="text-xl font-bold text-gray-800 cursor-default">KATEGORI</h2>
            <svg class="w-4 h-4 text-gray-400 cursor-pointer" data-modal-hide="default-modal" aria-hidden="true"
                xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 14">
                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                    d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6" />
            </svg>
        </div>
        <hr class="border-t-2 border-main-color">
        <!-- Isi Modal -->
        <div class="flex flex-row flex-wrap m-2 px-2 gap-8 gap-x-14">
            <a href="#" class="flex flex-col items-center font-medium text-lg">
                <img src="assets/img/Coughing.webp" alt="img-batuk" class="w-20 h-20">
                Batuk & Flu
            </a>
            <a href="#" class="flex flex-col items-center font-medium">
                <img src="assets/img/Coughing.webp" alt="img-batuk" class="w-20 h-20">
                Batuk & Flu
            </a>
            <a href="#" class="flex flex-col items-center font-medium">
                <img src="assets/img/Coughing.webp" alt="img-batuk" class="w-20 h-20">
                Batuk & Flu
            </a>
            <a href="#" class="flex flex-col items-center font-medium">
                <img src="assets/img/Coughing.webp" alt="img-batuk" class="w-20 h-20">
                Batuk & Flu
            </a>
            <a href="#" class="flex flex-col items-center font-medium">
                <img src="assets/img/Coughing.webp" alt="img-batuk" class="w-20 h-20">
                Batuk & Flu
            </a>
            <a href="#" class="flex flex-col items-center font-medium">
                <img src="assets/img/Coughing.webp" alt="img-batuk" class="w-20 h-20">
                Batuk & Flu
            </a>
            <a href="#" class="flex flex-col items-center font-medium">
                <img src="assets/img/Coughing.webp" alt="img-batuk" class="w-20 h-20">
                Batuk & Flu
            </a>
            <a href="#" class="flex flex-col items-center font-medium">
                <img src="assets/img/Coughing.webp" alt="img-batuk" class="w-20 h-20">
                Batuk & Flu
            </a>
            <a href="#" class="flex flex-col items-center font-medium">
                <img src="assets/img/Coughing.webp" alt="img-batuk" class="w-20 h-20">
                Batuk & Flu
            </a>
            <a href="#" class="flex flex-col items-center font-medium">
                <img src="assets/img/Coughing.webp" alt="img-batuk" class="w-20 h-20">
                Batuk & Flu
            </a>
            <a href="#" class="flex flex-col items-center font-medium">
                <img src="assets/img/Coughing.webp" alt="img-batuk" class="w-20 h-20">
                Batuk & Flu
            </a>
            <a href="#" class="flex flex-col items-center font-medium">
                <img src="assets/img/Coughing.webp" alt="img-batuk" class="w-20 h-20">
                Batuk & Flu
            </a>
            <a href="#" class="flex flex-col items-center font-medium">
                <img src="assets/img/Coughing.webp" alt="img-batuk" class="w-20 h-20">
                Batuk & Flu
            </a>
            <a href="#" class="flex flex-col items-center font-medium">
                <img src="assets/img/Coughing.webp" alt="img-batuk" class="w-20 h-20">
                Batuk & Flu
            </a>

        </div>
    </div>
</div>

<!-- Section Upload, Voucher, Konsultasi -->
<div class="max-w-screen-xl mx-auto my-20 pr-8">
    <div class="flex items-center justify-center gap-2">
        <a href= "{{ route('upload') }}" class="size-fit pt-8 ">
            <img src="assets/img/upload-resep.webp" alt="upload-resep"
                class="object-cover drop-shadow-[11px_11px_15px_0px_#cbd5e0]">
        </a>
        <a href="#" class="size-fit">
            <img src="assets/img/promo&voucher.webp" alt="promo&voucher"
                class="object-cover drop-shadow-[11px_11px_15px_0px_#cbd5e0]">
        </a>
        <a href="https://wa.me/+6285156857428?text=Halo..%20Saya%20ingin%20melakukan%20konsultasi%20resep%20obat" class="size-fit">
            <img src="assets/img/konsultasi.webp" alt="konsultasi"
                class="object-cover drop-shadow-[11px_11px_15px_0px_#cbd5e0]">
        </a>        
    </div>
</div>

<!-- Banner Daftar & Dapatkan -->
<div class="max-w-screen-xl mx-auto my-20">
    <div class="size-fit">
        <img src="assets/img/daftar&dapatkan.webp" alt="daftar&dapatkan">
    </div>
</div>

<!-- Promo Card -->
<div class="max-w-screen-xl mx-auto my-24">
    <div class="flex items-center justify-between px-3">
        <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 cursor-default">Obat Promo Bulan Ini</h5>
        <a href="{{ route('products.index') }}" class="inline-flex font-normal place-items-center text-black gap-4 bg-second-color py-1 px-3 rounded-full">
            Tampilkan Semua
            <svg class="w-6 h-6 text-gray border-2 border-black rounded-full px-1" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 10">
                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M1 5h12m0 0L9 1m4 4L9 9" />
            </svg>
        </a>
    </div>

    <div class="flex flex-row items-center flex-nowrap mt-7">
        <!-- Product Card -->
        @foreach ($allProducts as $product)
            <a href="{{ route('product.tampilkan', $product->id) }}"
                class="flex flex-col w-full max-w-xs rounded-xl border-2 border-gray-300 mx-3 my-2 px-2 gap-y-2">
                <div class="size-full flex items-center justify-center bg-gray-100 p-5 mt-2 mx-auto rounded-lg">
                    <img src="{{ asset('assets/uploaded/' . $product->gambar) }}" alt="{{ $product->name }}"
                        class="w-48">
                </div>

                <div class="px-2">
                    <p class="text-xl">{{ $product->name }}</p>
                    <span class="text-3xl font-bold">Rp. {{ number_format($product->harga, 0, ',', '.') }}</span>

                    <div class="flex items-center gap-5 my-2">
                        <s class="text-base font-semibold text-gray-500">Rp.
                            {{ number_format($product->harga * 1.25, 0, ',', '.') }}</s>
                        <span class="text-xs text-red-600 font-bold bg-pink-200 px-1">20%</span>
                    </div>
                </div>
            </a>
        @endforeach
    </div>
</div>

<!-- Rekomendasi Card -->
<div class="max-w-screen-xl mx-auto my-20">
    <div class="flex items-center justify-between px-3">
        <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 cursor-default">Rekomendasi Obat Sakit Kepala
        </h5>
        <button data-modal-target="default-modal" data-modal-toggle="default-modal"
            class="inline-flex font-normal place-items-center text-black gap-4 bg-second-color py-1 px-3 rounded-full ">
            Tampilkan Semua
            <svg class="w-6 h-6 text-gray border-2 border-black rounded-full px-1" aria-hidden="true"
                xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 10">
                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                    d="M1 5h12m0 0L9 1m4 4L9 9" />
            </svg>
        </button>
    </div>

    <div class="flex flex-row items-center flex-nowrap mt-7">
        <!-- Product Card -->
        @foreach ($headacheProducts as $product)
            <a href="{{ route('product.tampilkan', $product->id) }}"
                class="flex flex-col w-full max-w-xs rounded-xl border-2 border-gray-300 mx-3 my-2 px-2 gap-y-2">
                <div class="size-full flex items-center justify-center bg-gray-100 p-5 mt-2 mx-auto rounded-lg">
                    <img src="{{ asset('assets/uploaded/' . $product->gambar) }}" alt="{{ $product->name }}"
                        class="w-48">
                </div>

                <div class="px-2">
                    <p class="text-xl">{{ $product->name }}</p>
                    <span class="text-3xl font-bold">Rp. {{ number_format($product->harga, 0, ',', '.') }}</span>

                    <div class="flex items-center gap-5 my-2">
                        <s class="text-base font-semibold text-gray-500">Rp.
                            {{ number_format($product->harga * 1.25, 0, ',', '.') }}</s>
                        <span class="text-xs text-red-600 font-bold bg-pink-200 px-1">20%</span>
                    </div>
                </div>
            </a>
        @endforeach
    </div>
</div>

<!-- Section Keuntungan Belanja -->
<div class="max-w-screen-xl mx-auto my-24">
    <h5 class="mb-5 ml-3 text-2xl font-bold tracking-tight text-gray-900 cursor-default">Keuntungan Belanja di Apotek
        Huda</h5>
    <div class="flex items-center justify-start ml-10 mt-10 gap-x-20">
        <span class="w-44">
            <img src="assets/img/gratis-ongkir.webp" alt="gratis-ongkir" class="object-cover w-42">
        </span>
        <span class="w-44">
            <img src="assets/img/pengiriman-cepat.webp" alt="pengiriman-cepat" class="object-cover">
        </span>
        <span class="w-44">
            <img src="assets/img/promo-menarik.webp" alt="promo-menarik" class="object-cover">
        </span>
        <span class="w-44">
            <img src="assets/img/dijamin-asli.webp" alt="dijamin-asli" class="object-cover">
        </span>
        <span class="w-44">
            <img src="assets/img/psef.webp" alt="psef" class="object-cover">
        </span>
    </div>
</div>

{{-- <!-- Artikel Section -->
<div class="max-w-screen-xl mx-auto my-32">
    <h5 class="mb-5 ml-3 text-2xl font-bold tracking-tight text-gray-900 cursor-default">Artikel Kesehatan</h5>
    <div class="flex flex-row items-center flex-nowrap mt-7 gap-x-4">
        <!-- Artikel Card -->
        <div class="flex flex-col w-full max-w-xs rounded-3xl border-2 border-gray-300 mx-3 my-2 gap-y-2">
            <div class="size-full">
                <img src="assets/img/artikel.webp" alt="artikel" class="object-cover">
            </div>

            <div class="px-5 mb-3 pb-2">
                <h5 class="text-xl font-bold pb-3">Pentingnya Menjaga Kesehatan Mata di Usia Dini</h5>
                <p class="text-sm mb-3 font-normal text-gray-700">Beberapa hal yang perlu diperhatikan dalam menjaga
                    kesehatan mata di usia dini. </p>
                <a href="#"
                    class="font-semibold text-base italic underline underline-offset-4 hover:text-second-color">
                    Baca Selengkapnya...
                </a>

            </div>
        </div>

        <div class="flex flex-col w-full max-w-xs rounded-3xl border-2 border-gray-300 mx-3 my-2 gap-y-2">
            <div class="size-full">
                <img src="assets/img/artikel.webp" alt="artikel" class="object-cover">
            </div>

            <div class="px-5 mb-3 pb-2">
                <h5 class="text-xl font-bold pb-3">Pentingnya Menjaga Kesehatan Mata di Usia Dini</h5>
                <p class="text-sm mb-3 font-normal text-gray-700">Beberapa hal yang perlu diperhatikan dalam menjaga
                    kesehatan mata di usia dini. </p>
                <a href="#"
                    class="font-semibold text-base italic underline underline-offset-4 hover:text-second-color">
                    Baca Selengkapnya...
                </a>

            </div>
        </div>

        <div class="flex flex-col w-full max-w-xs rounded-3xl border-2 border-gray-300 mx-3 my-2 gap-y-2">
            <div class="size-full">
                <img src="assets/img/artikel.webp" alt="artikel" class="object-cover">
            </div>

            <div class="px-5 mb-3 pb-2">
                <h5 class="text-xl font-bold pb-3">Pentingnya Menjaga Kesehatan Mata di Usia Dini</h5>
                <p class="text-sm mb-3 font-normal text-gray-700">Beberapa hal yang perlu diperhatikan dalam menjaga
                    kesehatan mata di usia dini. </p>
                <a href="#"
                    class="font-semibold text-base italic underline underline-offset-4 hover:text-second-color">
                    Baca Selengkapnya...
                </a>


            </div>
        </div>

        <div class="flex flex-col w-full max-w-xs rounded-3xl border-2 border-gray-300 mx-3 my-2 gap-y-2">
            <div class="size-full">
                <img src="assets/img/artikel.webp" alt="artikel" class="object-cover">
            </div>

            <div class="px-5 mb-3 pb-2">
                <h5 class="text-xl font-bold pb-3">Pentingnya Menjaga Kesehatan Mata di Usia Dini</h5>
                <p class="text-sm mb-3 font-normal text-gray-700">Beberapa hal yang perlu diperhatikan dalam menjaga
                    kesehatan mata di usia dini. </p>
                <a href="#"
                    class="font-semibold text-base italic underline underline-offset-4 hover:text-second-color">
                    Baca Selengkapnya...
                </a>


            </div>
        </div>

    </div>
</div> --}}

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
