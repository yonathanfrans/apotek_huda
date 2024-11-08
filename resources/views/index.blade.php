<!doctype html>
<html>

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  @vite('resources/css/app.css')
</head>

<body class="font-main-font">

  <!-- Navigation -->
  <nav class='py-5 bg-main-color max-h-max flex justify-around items-center px-20 sticky top-0 z-50'>

    <!-- logo -->
    <img src="assets/img/logo.webp" alt="logo" class="h-12">

    <!-- search bar start -->
    <div class='max-w-md mx-auto flex-grow'>
      <div class="flex items-center w-full h-12 rounded-full focus-within:shadow-lg bg-white overflow-hidden">
        <input
          class="peer h-full w-full outline-none text-sm text-gray-700 px-5"
          type="search"
          id="search"
          placeholder="Search" />

        <div class="grid place-items-center h-full w-12 text-white cursor-pointer ">
          <div class="bg-main-color p-2 rounded-full mr-1 mx-1">
            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z" />
            </svg>
          </div>
        </div>
      </div>
    </div>
    <!-- search bar end -->

    <div class="flex justify-center gap-x-10">
      <div id="cart-icon" class="relative group inline-block">
        <svg onclick="togglePopover()" class="h-8 cursor-pointer" viewBox="0 0 79 77" fill="none" xmlns="http://www.w3.org/2000/svg" xmln="http://www.w3.org/1999/xlink">
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
        <div id="popover" class="p-2 opacity-0 invisible group-hover:opacity-100 group-hover:visible absolute left-1/2 transform -translate-x-1/2 transition-opacity duration-300 w-max max-h-64 mt-5 bg-gray-100 text-gray-800 border border-gray-300 rounded-lg shadow-lg z-10">
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
                  <button type="button" onclick="decreaseQuantity()" class="flex-shrink-0 bg-gray-100 hover:bg-gray-200 inline-flex items-center justify-center border border-gray-300 rounded-md h-5 w-5 focus:ring-gray-100 focus:ring-2 focus:outline-none">
                    <svg class="w-2.5 h-2.5 text-main-color" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 18 2">
                      <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M1 1h16" />
                    </svg>
                  </button>
                  <input type="text" oninput="validateNumber(this); updateTotal();" id="quantity" data-input-counter class="flex-shrink-0 text-gray-900 border-0 bg-transparent text-sm font-normal focus:outline-none focus:ring-0 max-w-[2.5rem] text-center" min="0" value="0" />
                  <button type="button" onclick="increaseQuantity()" class="flex-shrink-0 bg-gray-100 hover:bg-gray-200 inline-flex items-center justify-center border border-gray-300 rounded-md h-5 w-5 focus:ring-gray-100 focus:ring-2 focus:outline-none">
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

  <!-- Floating button -->
  <div class="group fixed bottom-0 right-0  flex justify-center items-center w-32 h-32">
    <!-- main -->
    <div class=" flex items-center justify-center p-3 z-50 absolute  ">
      <svg class="w-20 h-20 group-hover:rotate-45 transition  transition-all duration-[0.6s]" viewBox="0 0 109 109" fill="none" xmlns="http://www.w3.org/2000/svg">
        <g clip-path="url(#clip0_43_33)">
          <rect width="109" height="109" rx="54.5" fill="#80AF81" />
          <path d="M49.0909 83.6364V23.6364H59.2727V83.6364H49.0909ZM24.1818 58.7273V48.5455H84.1818V58.7273H24.1818Z" fill="white" />
        </g>
        <defs>
          <clipPath id="clip0_43_33">
            <rect width="109" height="109" rx="54.5" fill="white" />
          </clipPath>
        </defs>
      </svg>
    </div>

    <!-- sub top 1 -->
    <div class="absolute transition-all duration-[0.2s] ease-out scale-x-0 group-hover:scale-x-100 group-hover:-translate-y-24 p-2 hover:p-3">
      <svg class="w-20 h-20" viewBox="0 0 109 109" fill="none" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
        <rect width="109" height="109" rx="54.5" fill="#80AF81" />
        <rect x="19" y="19" width="71" height="71" fill="url(#pattern0_46_127)" />
        <defs>
          <pattern id="pattern0_46_127" patternContentUnits="objectBoundingBox" width="1" height="1">
            <use xlink:href="#image0_46_127" transform="scale(0.01)" />
          </pattern>
          <image id="image0_46_127" width="100" height="100" xlink:href="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAGQAAABkCAYAAABw4pVUAAAACXBIWXMAAAsTAAALEwEAmpwYAAAFVUlEQVR4nO2dXYxfQxTAr7aU4GFDfZX4qDS0VcSjSESEICgtfVGCVEJMiK82Flk80NiXDSEiikSECoJG4iu7pV1tNNHWppLqrvp80G4REluqP5n0SDYbanfu3JkzM/eX3DTZ7G7Oub/t/945M3OmqlpaWlpaWlpaWgoEmAzMAq4ElgLPAWuATcAgsBPYJddO+dom+Z7l8jP2Z0+1vyt2PkkCnATcBKwAhvHHr8D7wBLgLGBS7FzVAhwvN2or4fgGeBSYGTt/FQD7A9cC/cRnDbAImFKVBnCAiNiCPr4CbgMOqnIH2A+4AfgB/XwHXGdjrnIEmAusJj0+Bk6rcgGYCnQDf5IufwDL7EdtlcGb0yfkw3pgRpUiwDwZqOXGL8DCKiWALvLn/iqRMseTlMMTakf78vB+lfJ4Rd3D3v6VSN2pVN5QVbgEemLfEQU8VWkAeDD2nVDEfbFlLIh9B5Sxx869xJIxA/g59h1QyE/AiTHeqOyoVSsjwLvycXo1cK7U0o4DOuRfOwl2ukxUnQdcBtwKPOKh+Lku6JuX1KY0sgG4ETikZn59HmJZ5u+O7zvYuQoLhTtkcsnLIM2TEFuQnOMjnv+bz9BWQv8UmO45Tx9CLKsanU+RySVN9AOHNpCnLyGWRb7j+yfIA4Hv0cPXwLSGcu3zvJDC/wMeuBld7/sXek+yGSGWxU2sDhlCD697TbB5IYNeV7PIChFNnOktuTBCLNf4DFDTNOx6b4mFFbLaV3Az0cWSmvlMA84Gzt/HtbGh5179+XjgYXRxhmMe02XeYnfE2Lt8DATtSj4t/OYyGgeOUfLKvrXWQFGKb5pY65jHSvQwu46Q29HFS461N02YOkLeRBfdGcxovlZnSY+dbNFEp0Mevehi2KkqLdvItHGXQx4aHuZjOcVFyBXowzjkEfM197+43EWI3SyZtBD2Vqg1co+LkOdJX8jB6ORZFyF2o4o2TCZCVrkIGUAfJhMhG12EbEMfJhMhQy5CfG7Y94XJRMh2FyG2VYU2TCZCRjQL6ZHVhB3juKY6VKs7HK6mKxS7XISE2h8YZoXfOAGOCJDzDpfAvqVMIecEyHmbS2BfUKaQxQFyHnAJzC6DLFFId4Cce10Cs82/ShSyMkDOz7gE1kmZQr4MkPNSl8AWUpgQ9raNCrHVYoFLcLZHYWlCZmueoLKDqh8LEzI/QL7bnZcCBVrkoEnIvaoXigN3BwjQSr9qnNfJE4x/ygR+t70+CJDvHSl8ppZUXJzlLESS2oweTOJCPq8lQ5J6CD2YxIU84EPIHPRgEhdS7+NqVGIfoQOTsJA+LzKUNZkxCQuZ51PIZCWbPk2iQoa8NzizNyN2VqQr5BavMkZtjQ5RCc1NyGBjnYECVoBzEjK/ERmjCo5rIyZnEhPS33gzfynL/x4pQZOQkJFgTfxts8dISZqEhEx8VtAVqaLGaPFnEhGyLvhJPcAJMtkSEpOAkOFoJyhIG4qQW8aMciH2XlzU3B0fX9L2ZLVQGOVCJrwptRGAxwIlbBQLebzSgoxPni5YyHJ1x1ZIAfLFAoW8oE7GmP8pXQUJ6VEr418qw39lLGS3bUtepQRwcQPjFKNAiO2ifUmVIsCRwHsZCekFjq1SRh72nZ4KkiaSkBHJQc+xRnWR4yHeSVDIh7bCXeWKLJjYnICQLbYjUlUCcqrbpcBnCoUMSOPoIs9VnyQn27w1ziKlaUiI3aTztsSS53Hdjn11O2WeZU8gIRukOHp0c5llAHCUnFWyYkwTnLpCbLu/l4HrbS/f5jLIHOAw4IKJzlHLnsE7Zd7m8OYibGlpaWlpaWlpqVTzN2F2x39rAiE5AAAAAElFTkSuQmCC" />
        </defs>
      </svg>
    </div>

    <!-- sub top 2 -->
    <div class="absolute transition-all duration-[0.2s] ease-out scale-x-0 group-hover:scale-x-100 group-hover:-translate-y-48 p-2 hover:p-3 delay-[0.1s]">
      <svg class="w-20 h-20" viewBox="0 0 109 109" fill="none" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
        <rect width="109" height="109" rx="54.5" fill="#80AF81" />
        <rect x="19" y="19" width="71" height="71" fill="url(#pattern0_46_123)" />
        <defs>
          <pattern id="pattern0_46_123" patternContentUnits="objectBoundingBox" width="1" height="1">
            <use xlink:href="#image0_46_123" transform="scale(0.01)" />
          </pattern>
          <image id="image0_46_123" width="100" height="100" xlink:href="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAGQAAABkCAYAAABw4pVUAAAACXBIWXMAAAsTAAALEwEAmpwYAAAFXklEQVR4nO2d3W8VRRiHt9SoNxZjUcIFQT5MjS0YgUo1KjUxwc8bopKWkHhD44UJCGgDwYBUE6/x666WhopUjSH+DQbjv6BikAstbemHCDERHzJ2Gmvpnp09Z2Z2Z+d9kk2a03P2nXd/Z+admXdmTpIIgiAIgiAIgiAIgiAIgrAkQBOwHngO6AP6S3b16bKpMjZVUkbgTmAXMApcJhzGgC+AV5QPSegA9wLvA1OEzxVgAFiRhAZwG7APmKF6XAWOA7cnIQCsBX6g+nwPrEnKDPB0RZqnPM3Y9qSMAC8B14mP68CLSZkAuiMVY56/gGeSEsWMGJqpX/WVxmThMUX3pqoewL8B1i3wWQ0Yz6W897x6JkUKcoDqi9G0hN/Laoiyr8hB3yzV5Z+FNWMJ/zekfG6mkMGjHoFXmYsGzyAtpgz4UeH/c1NVD+QXDZ7DpRoB/g4/aswV5FXiYH2NZ/BAxmdf9inIWeLgnArgKUH924zPfu4znxHSFLoNUTYsqhlZYih+95JP0f3wonMUo8AR1SwATwFb9LVdv6b+96XlL86lGjEjjbU+BHmeYibxTgKdeb51ujZvAz4qqBPyrFs15px83bMQ/cBdFsrdAhz2LEyfnade27G3PDkzDNznoPwrgdOefDhku/xLOXTMsROzQK8HP/YAfzj25VjiwRGVvnQZsDc7d+I/X7Zom644HrIgY0Cbcwdu9afNYTc+WEFmfdaMxQBb9eIF2wQrSG+duZjHgd3Am/pSfz9WT05CxxTbBCnIcE77DwOn9AReGhP6PZty3nskdkGumHZtgRW6K3wjx/3Ve4eA1hxd4qmYBek3tNkBXGjAzk9Au6EtNe0SpSCqdrQYijFjwd60iSjAcou1JChBThrYatXfblv8olLPBnY/jlGQTgNbw9hnyMBuV2yCjGXN2gKbcgZwU9Q9HzGYJR6PSZCzBnZO4Y7PDOyrfEo0ghwxGPRN4I6JrMEj8E5MgtRcAMDcCNw1XR4WcgQjyJMZNnbjnh6DBeTRCJIVVA/hnoMZZdhswUZlBDmIew5klCEqQbKarF7csyujDFE1WRLUA+v2NlsamKUh3d5FjBoIP+RQkEED+1/F1GRdNpg62Qj8jX3UPTsybC+LbepEsa2gWjJoYNfWwDQoQT40sHUP8CP2uGCyuwn4NEZBpgwTVO06ueQrQXW3JXvBCaI4bGizHfi5ATsqyfWQoa2jFv0LThBVS1Ya2m3VMeVGzgA+qJo+QxurLB+YE5wgitM57W9U+YyM6flx/Z6OnPc+Y9m3IAVR7KmjHM061dqzYKFcj94P0lzH/V5z4FewgqhV6FudFz7dp0eBPx34Fawg84PFNucO3OrPg7LYOp1JtTbXoxidVdiO4HrDztV6YkqdMcNFM+V9w46vLW0jpl3inOVf5aA3VeiWNp+bPqf0WtsWC+Vergd9tkbhpdn0qQ4Z9s20Xt7ZtdTJChmztmqi8BPPQsyzw60ac06uo1jGda7iqF6q073g4IBu/Zr639eO13aZcL8PQZr0sRFCGY7W0KKo47eF2ox4ESOy45kaYafvA8zUhhuhDAeYaVHeSymMgIcResomzCoett8o06b5Fxei7G+4+NXjjULEWLCPQx0eLMzxXT25GNuirJEA/y9qELo6KQP6OAvXM6dl5lrWAnLvRPxzFdeAF5Iyog+krHUGSRWbqSeSMqNjyvlIAvjqJAT0tHdfRccp0/oHz4rtTTUweByoSDM2Cbxb2KDPJmpeRx9wfCawqfvfdCp5p/e5KV/ofIr6maQdwF7gbeAE8EHB1wldlr26bO5PpRYEQRAEQRAEQRAEQRCEJFxuAn852MVcPaxkAAAAAElFTkSuQmCC" />
        </defs>
      </svg>
    </div>

    <!-- sub top 3 -->
    <div class="absolute transition-all duration-[0.2s] ease-out scale-x-0 group-hover:scale-x-100 group-hover:-translate-y-72 p-2 hover:p-3 delay-[0.2s]">
      <svg class="w-20 h-20" viewBox="0 0 109 109" fill="none" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
        <rect width="109" height="109" rx="54.5" fill="#80AF81" />
        <rect x="19" y="19" width="71" height="71" fill="url(#pattern0_46_125)" />
        <defs>
          <pattern id="pattern0_46_125" patternContentUnits="objectBoundingBox" width="1" height="1">
            <use xlink:href="#image0_46_125" transform="scale(0.01)" />
          </pattern>
          <image id="image0_46_125" width="100" height="100" xlink:href="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAGQAAABkCAYAAABw4pVUAAAACXBIWXMAAAsTAAALEwEAmpwYAAAE70lEQVR4nO2dy49UVRCHK4CCYfwTBAUMbhASEnwlLmA0gi5RF+rC6J6NARNE2aELw2tFiGJGQPwbiEbjKxEWiBs1YgzOzjAKKjQP5zMVyqTpMJN7u2/fU3Xu+ZKbTDrdM6fOb+4951RVV4kUCoVCoZApwBJgHfA8sAs4BnwDnAXOATPAVbtm7LWz9p5j9pnn7HcsSW1POIBFwHpgB3ASuEJzXAdOA28Dk8Di1Pa6BFgIPAF8CPxNe/wFTJk4C6TrAMuBd4Bp0vOb3TnLpWsAK4D9QA9/XLO75gHJHWAVcAL4F//cAD7Sfx7JDeBOW6SbXKDb4jKwO5sdGvAU8DPx+Ql4UqIC3GGL5Cx5cUjveAm4e9KDWa6cBlZKBIBngD/Jnz+ALeIZ4CXbNnaFG8Cr4hFgW4brRRXU5t3iCVu8u84e8QDweuqZcMT21GK82NHH1FzoXLyScjel7uzCreicPJ3COdiFre0oW+L72hJjMXCK9PTMY/wQsNQu/fmAEy/yt62c6G0SUjMNrJ1njOucxFj2tuEoTL2I9+YTY0CU1HfK7NgckpZs4MFru7/GmA868RI3H7u3mIAHNtQY88P4YFfTYqx0FFyaqDHuCfwEuZqLPAIf44eJGuO+Gz8cb0qM1ebV9MKGgI8sbA7vb0KQI/jiQLBFvZ/3moj8eYtv9HRLW3Hbq+mlntC5XDaKIJrE5pHp+URxdDBszk1v6Z1ejcL++w/aOjFh1yP2mrc7YzBDsn7aqp4wU488YzYNI4gmPhfGwwfDZBq2mYXeNS5p3lodQR5PPeIO8FhEv1XOVPdvAZ+nHm0H+LSqGHc5iCN0gSuVMurtUFVohzVVBNFvu7pDakIMtlYx5E0cInkKsrOKIfrdbndInoJMVTHkKxwieQryRRVDvicAkocg31UR5FcCIHkI8ksVQS4QAMlDkN+rCOI5lpCbIL0iSEBByiPL2SOrLOrOFvWy7XW27XV5MBykgh3ZHAxduk4yFWQqrHMxU0F2hnW/ZyrI1mwCVJKHIGuyCeFKfEGqhXDNmM9wjsQX5JNKYpgxb+EciS/IG1klykl8QR6tm0qqRYbdIrEFuVgrldQM0tq1bpHYghypJYYZpKW/3SKxBdk4jCALgPM4ReIKol+CWlhbEO+V4iSuIMNXngPu8RrSlZiCXBu52D/wPg6RmIIcHkmMvrIangoHRBWkmcIBZpx2CXCFxBPkaCNi9BUQ+CelNTK6DamLzzRb8i914EpGH7/vQNSQtRZ/SGWRjD7+lAXMxtN7xIoJJCnxJ6OPPQU6V5PNzP7chu1LZFxE3h2rGH2NWr5ObWkA2ikTa6Isi5Jymn0h5T5RtpRS43O6Rza3KkafKC84qOPrCZ2Ll5OI0SfK9tSz4IjXxAPqUk49Ew7w0dBloOVRhA6e+bc8+p/SFMwh2szEtn25M5NsNzXkOSXnw+OpcE2LgUUZtl6dtf4psVqv3sYhqR7P6Pw4dkdhW5j/a1vQwpqXreRh8z1AUmPNxI57jNHfBh3jUeBeyR11vNmz2EtPkkFflKbRrpauYbuxPVZ+OzXnbSzDF8vPBUtb3aQVn63IcJtZ6Po3Nw5Vj70LcLMJwHpgB3Cy4cfadWtOr9vxySwX6nHDzeSKtcCzmr1hNem/BM4A5yxQdtWuC/baGXvPlH1GP/tgEaBQKBQKkjH/AUSnvQQvw+bMAAAAAElFTkSuQmCC" />
        </defs>
      </svg>
    </div>
  </div>

  <!-- Carousel -->
  <div class="relative w-full max-w-screen-xl mx-auto my-16">
    <!-- Container Carousel -->
    <div class="carousel overflow-hidden relative">
      <!-- Slides -->
      <div class="flex transition-transform duration-700 ease-in-out" id="carouselSlides">
        <div class="w-full flex-shrink-0">
          <img src="assets/img/carousel-1.webp" alt="Slide 1" class="w-full h-fit object-cover">
        </div>
        <div class="w-full flex-shrink-0">
          <img src="assets/img/carousel-2.webp" alt="Slide 2" class="w-full h-fit object-cover">
        </div>
        <div class="w-full flex-shrink-0">
          <img src="assets/img/carousel-3.webp" alt="Slide 3" class="w-full h-fit object-cover">
        </div>
      </div>
    </div>

    <!-- Navigasi Buttons -->
    <button onclick="prevSlide()" class="absolute top-1/2 left-0 z-30 flex items-center justify-center px-8 cursor-pointer group focus:outline-none transform -translate-y-1/2">
      <svg class="w-4 h-4 text-black rtl:rotate-180" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 6 10">
        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 1 1 5l4 4" />
      </svg>
    </button>

    <button onclick="nextSlide()" class="absolute top-1/2 right-0 z-30 flex items-center justify-center px-8 cursor-pointer group focus:outline-none transform -translate-y-1/2">
      <svg class="w-4 h-4 text-black rtl:rotate-180" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 6 10">
        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 9 4-4-4-4" />
      </svg>
    </button>
  </div>

  <!-- Kategori Card -->
  <div class="max-w-screen-xl mx-auto my-10 py-3 bg-white border border-gray-300 rounded-lg shadow-xl ">
    <div class="flex items-center justify-between px-9">
      <h5 class="mb-2 text-2xl font-semibold tracking-tight text-gray-900 cursor-default">Kategori Pilihan</h5>
      <button onclick="openModal()" class="inline-flex font-normal place-items-center text-black gap-4 bg-second-color py-1 px-3 rounded-full">
        Tampilkan Semua
        <svg class="w-6 h-6 text-gray border-2 border-black rounded-full px-1" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 10">
          <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M1 5h12m0 0L9 1m4 4L9 9" />
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
  <div id="modal" class="fixed inset-0 flex items-center justify-center bg-gray-800 bg-opacity-50 hidden">
    <div class="bg-white rounded-xl max-w-5xl p-6 space-y-4 shadow-lg bg-no-repeat bg-center" style="background-image: url('assets/img/modal-apotek.webp'); background-size: 40%;">
      <!-- Judul Modal -->
      <div class="flex items-center justify-between px-4">
        <h2 class="text-xl font-bold text-gray-800 cursor-default">KATEGORI</h2>
        <svg class="w-4 h-4 text-gray-400 cursor-pointer" onclick="closeModal()" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 14">
          <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6" />
        </svg>
      </div>
      <hr class="border-t-2 border-main-color">
      <!-- Isi Modal -->
      <div class="grid grid-cols-5 m-2 px-2 gap-8 gap-x-14">
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
      <a href="#" class="size-fit pt-8 ">
        <img src="assets/img/upload-resep.webp" alt="upload-resep" class="object-cover drop-shadow-[11px_11px_15px_0px_#cbd5e0]">
      </a>
      <a href="#" class="size-fit">
        <img src="assets/img/promo&voucher.webp" alt="promo&voucher" class="object-cover drop-shadow-[11px_11px_15px_0px_#cbd5e0]">
      </a>
      <a href="#" class="size-fit">
        <img src="assets/img/konsultasi.webp" alt="konsultasi" class="object-cover drop-shadow-[11px_11px_15px_0px_#cbd5e0]">
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
      <button onclick="openModal()" class="inline-flex font-normal place-items-center text-black gap-4 bg-second-color py-1 px-3 rounded-full ">
        Tampilkan Semua
        <svg class="w-6 h-6 text-gray border-2 border-black rounded-full px-1" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 10">
          <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M1 5h12m0 0L9 1m4 4L9 9" />
        </svg>
      </button>
    </div>

    <div class="flex flex-row items-center flex-nowrap mt-7">
      <!-- Product Card -->
      <div class="flex flex-col w-full max-w-xs rounded-xl border-2 border-gray-300 mx-3 my-2 px-2 gap-y-2">
        <div class="size-full flex items-center justify-center bg-gray-100 p-5 mt-2 mx-auto rounded-lg">
          <img src="assets/img/oskadon-tablet.webp" alt="oskadon-tablet" class="w-48">
        </div>

        <div class="px-2">
          <p class="text-xl">Oskadon Obat Sakit Kepala 4 Tablet</p>
          <span class="text-3xl font-bold">Rp. 8.000</span>

          <div class="flex items-center gap-5 my-2">
            <s class="text-base font-semibold text-gray-500">Rp. 10.000</s>
            <span class="text-xs text-red-600 font-bold bg-pink-200 px-1">20%</span>
          </div>

          <div class="flex items-center gap-x-3 pb-3">
            <svg class="w-4 h-4 text-yellow-300" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 22 20">
              <path d="M20.924 7.625a1.523 1.523 0 0 0-1.238-1.044l-5.051-.734-2.259-4.577a1.534 1.534 0 0 0-2.752 0L7.365 5.847l-5.051.734A1.535 1.535 0 0 0 1.463 9.2l3.656 3.563-.863 5.031a1.532 1.532 0 0 0 2.226 1.616L11 17.033l4.518 2.375a1.534 1.534 0 0 0 2.226-1.617l-.863-5.03L20.537 9.2a1.523 1.523 0 0 0 .387-1.575Z" />
            </svg>
            <p class="text-xs">5.0 | Terjual 1,6k+</p>
          </div>
        </div>
      </div>

      <div class="flex flex-col w-full max-w-xs rounded-xl border-2 border-gray-300 mx-3 my-2 px-2 gap-y-2">
        <div class="size-full flex items-center justify-center bg-gray-100 p-5 mt-2 mx-auto rounded-lg">
          <img src="assets/img/oskadon-tablet.webp" alt="oskadon-tablet" class="w-48">
        </div>

        <div class="px-2">
          <p class="text-xl">Oskadon Obat Sakit Kepala 4 Tablet</p>
          <span class="text-3xl font-bold">Rp. 8.000</span>

          <div class="flex items-center gap-5 my-2">
            <s class="text-base font-semibold text-gray-500">Rp. 10.000</s>
            <span class="text-xs text-red-600 font-bold bg-pink-200 px-1">20%</span>
          </div>

          <div class="flex items-center gap-x-3 pb-3">
            <svg class="w-4 h-4 text-yellow-300" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 22 20">
              <path d="M20.924 7.625a1.523 1.523 0 0 0-1.238-1.044l-5.051-.734-2.259-4.577a1.534 1.534 0 0 0-2.752 0L7.365 5.847l-5.051.734A1.535 1.535 0 0 0 1.463 9.2l3.656 3.563-.863 5.031a1.532 1.532 0 0 0 2.226 1.616L11 17.033l4.518 2.375a1.534 1.534 0 0 0 2.226-1.617l-.863-5.03L20.537 9.2a1.523 1.523 0 0 0 .387-1.575Z" />
            </svg>
            <p class="text-xs">5.0 | Terjual 1,6k+</p>
          </div>
        </div>
      </div>

      <div class="flex flex-col w-full max-w-xs rounded-xl border-2 border-gray-300 mx-3 my-2 px-2 gap-y-2">
        <div class="size-full flex items-center justify-center bg-gray-100 p-5 mt-2 mx-auto rounded-lg">
          <img src="assets/img/oskadon-tablet.webp" alt="oskadon-tablet" class="w-48">
        </div>

        <div class="px-2">
          <p class="text-xl">Oskadon Obat Sakit Kepala 4 Tablet</p>
          <span class="text-3xl font-bold">Rp. 8.000</span>

          <div class="flex items-center gap-5 my-2">
            <s class="text-base font-semibold text-gray-500">Rp. 10.000</s>
            <span class="text-xs text-red-600 font-bold bg-pink-200 px-1">20%</span>
          </div>

          <div class="flex items-center gap-x-3 pb-3">
            <svg class="w-4 h-4 text-yellow-300" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 22 20">
              <path d="M20.924 7.625a1.523 1.523 0 0 0-1.238-1.044l-5.051-.734-2.259-4.577a1.534 1.534 0 0 0-2.752 0L7.365 5.847l-5.051.734A1.535 1.535 0 0 0 1.463 9.2l3.656 3.563-.863 5.031a1.532 1.532 0 0 0 2.226 1.616L11 17.033l4.518 2.375a1.534 1.534 0 0 0 2.226-1.617l-.863-5.03L20.537 9.2a1.523 1.523 0 0 0 .387-1.575Z" />
            </svg>
            <p class="text-xs">5.0 | Terjual 1,6k+</p>
          </div>
        </div>
      </div>

      <div class="flex flex-col w-full max-w-xs rounded-xl border-2 border-gray-300 mx-3 my-2 px-2 gap-y-2">
        <div class="size-full flex items-center justify-center bg-gray-100 p-5 mt-2 mx-auto rounded-lg">
          <img src="assets/img/oskadon-tablet.webp" alt="oskadon-tablet" class="w-48">
        </div>

        <div class="px-2">
          <p class="text-xl">Oskadon Obat Sakit Kepala 4 Tablet</p>
          <span class="text-3xl font-bold">Rp. 8.000</span>

          <div class="flex items-center gap-5 my-2">
            <s class="text-base font-semibold text-gray-500">Rp. 10.000</s>
            <span class="text-xs text-red-600 font-bold bg-pink-200 px-1">20%</span>
          </div>

          <div class="flex items-center gap-x-3 pb-3">
            <svg class="w-4 h-4 text-yellow-300" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 22 20">
              <path d="M20.924 7.625a1.523 1.523 0 0 0-1.238-1.044l-5.051-.734-2.259-4.577a1.534 1.534 0 0 0-2.752 0L7.365 5.847l-5.051.734A1.535 1.535 0 0 0 1.463 9.2l3.656 3.563-.863 5.031a1.532 1.532 0 0 0 2.226 1.616L11 17.033l4.518 2.375a1.534 1.534 0 0 0 2.226-1.617l-.863-5.03L20.537 9.2a1.523 1.523 0 0 0 .387-1.575Z" />
            </svg>
            <p class="text-xs">5.0 | Terjual 1,6k+</p>
          </div>
        </div>
      </div>

    </div>
  </div>

  <!-- Rekomendasi Card -->
  <div class="max-w-screen-xl mx-auto my-20">
    <div class="flex items-center justify-between px-3">
      <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 cursor-default">Rekomendasi Obat Sakit Kepala</h5>
      <button onclick="openModal()" class="inline-flex font-normal place-items-center text-black gap-4 bg-second-color py-1 px-3 rounded-full ">
        Tampilkan Semua
        <svg class="w-6 h-6 text-gray border-2 border-black rounded-full px-1" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 10">
          <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M1 5h12m0 0L9 1m4 4L9 9" />
        </svg>
      </button>
    </div>

    <div class="flex flex-row items-center flex-nowrap mt-7">
      <!-- Product Card -->
      <div class="flex flex-col w-full max-w-xs rounded-xl border-2 border-gray-300 mx-3 my-2 px-2 gap-y-2">
        <div class="size-full flex items-center justify-center bg-gray-100 p-5 mt-2 mx-auto rounded-lg">
          <img src="assets/img/oskadon-tablet.webp" alt="oskadon-tablet" class="w-48">
        </div>

        <div class="px-2">
          <p class="text-xl">Oskadon Obat Sakit Kepala 4 Tablet</p>
          <span class="text-3xl font-bold">Rp. 8.000</span>

          <div class="flex items-center gap-5 my-2">
            <s class="text-base font-semibold text-gray-500">Rp. 10.000</s>
            <span class="text-xs text-red-600 font-bold bg-pink-200 px-1">20%</span>
          </div>

          <div class="flex items-center gap-x-3 pb-3">
            <svg class="w-4 h-4 text-yellow-300" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 22 20">
              <path d="M20.924 7.625a1.523 1.523 0 0 0-1.238-1.044l-5.051-.734-2.259-4.577a1.534 1.534 0 0 0-2.752 0L7.365 5.847l-5.051.734A1.535 1.535 0 0 0 1.463 9.2l3.656 3.563-.863 5.031a1.532 1.532 0 0 0 2.226 1.616L11 17.033l4.518 2.375a1.534 1.534 0 0 0 2.226-1.617l-.863-5.03L20.537 9.2a1.523 1.523 0 0 0 .387-1.575Z" />
            </svg>
            <p class="text-xs">5.0 | Terjual 1,6k+</p>
          </div>
        </div>
      </div>

      <div class="flex flex-col w-full max-w-xs rounded-xl border-2 border-gray-300 mx-3 my-2 px-2 gap-y-2">
        <div class="size-full flex items-center justify-center bg-gray-100 p-5 mt-2 mx-auto rounded-lg">
          <img src="assets/img/oskadon-tablet.webp" alt="oskadon-tablet" class="w-48">
        </div>

        <div class="px-2">
          <p class="text-xl">Oskadon Obat Sakit Kepala 4 Tablet</p>
          <span class="text-3xl font-bold">Rp. 8.000</span>

          <div class="flex items-center gap-5 my-2">
            <s class="text-base font-semibold text-gray-500">Rp. 10.000</s>
            <span class="text-xs text-red-600 font-bold bg-pink-200 px-1">20%</span>
          </div>

          <div class="flex items-center gap-x-3 pb-3">
            <svg class="w-4 h-4 text-yellow-300" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 22 20">
              <path d="M20.924 7.625a1.523 1.523 0 0 0-1.238-1.044l-5.051-.734-2.259-4.577a1.534 1.534 0 0 0-2.752 0L7.365 5.847l-5.051.734A1.535 1.535 0 0 0 1.463 9.2l3.656 3.563-.863 5.031a1.532 1.532 0 0 0 2.226 1.616L11 17.033l4.518 2.375a1.534 1.534 0 0 0 2.226-1.617l-.863-5.03L20.537 9.2a1.523 1.523 0 0 0 .387-1.575Z" />
            </svg>
            <p class="text-xs">5.0 | Terjual 1,6k+</p>
          </div>
        </div>
      </div>

      <div class="flex flex-col w-full max-w-xs rounded-xl border-2 border-gray-300 mx-3 my-2 px-2 gap-y-2">
        <div class="size-full flex items-center justify-center bg-gray-100 p-5 mt-2 mx-auto rounded-lg">
          <img src="assets/img/oskadon-tablet.webp" alt="oskadon-tablet" class="w-48">
        </div>

        <div class="px-2">
          <p class="text-xl">Oskadon Obat Sakit Kepala 4 Tablet</p>
          <span class="text-3xl font-bold">Rp. 8.000</span>

          <div class="flex items-center gap-5 my-2">
            <s class="text-base font-semibold text-gray-500">Rp. 10.000</s>
            <span class="text-xs text-red-600 font-bold bg-pink-200 px-1">20%</span>
          </div>

          <div class="flex items-center gap-x-3 pb-3">
            <svg class="w-4 h-4 text-yellow-300" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 22 20">
              <path d="M20.924 7.625a1.523 1.523 0 0 0-1.238-1.044l-5.051-.734-2.259-4.577a1.534 1.534 0 0 0-2.752 0L7.365 5.847l-5.051.734A1.535 1.535 0 0 0 1.463 9.2l3.656 3.563-.863 5.031a1.532 1.532 0 0 0 2.226 1.616L11 17.033l4.518 2.375a1.534 1.534 0 0 0 2.226-1.617l-.863-5.03L20.537 9.2a1.523 1.523 0 0 0 .387-1.575Z" />
            </svg>
            <p class="text-xs">5.0 | Terjual 1,6k+</p>
          </div>
        </div>
      </div>

      <div class="flex flex-col w-full max-w-xs rounded-xl border-2 border-gray-300 mx-3 my-2 px-2 gap-y-2">
        <div class="size-full flex items-center justify-center bg-gray-100 p-5 mt-2 mx-auto rounded-lg">
          <img src="assets/img/oskadon-tablet.webp" alt="oskadon-tablet" class="w-48">
        </div>

        <div class="px-2">
          <p class="text-xl">Oskadon Obat Sakit Kepala 4 Tablet</p>
          <span class="text-3xl font-bold">Rp. 8.000</span>

          <div class="flex items-center gap-5 my-2">
            <s class="text-base font-semibold text-gray-500">Rp. 10.000</s>
            <span class="text-xs text-red-600 font-bold bg-pink-200 px-1">20%</span>
          </div>

          <div class="flex items-center gap-x-3 pb-3">
            <svg class="w-4 h-4 text-yellow-300" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 22 20">
              <path d="M20.924 7.625a1.523 1.523 0 0 0-1.238-1.044l-5.051-.734-2.259-4.577a1.534 1.534 0 0 0-2.752 0L7.365 5.847l-5.051.734A1.535 1.535 0 0 0 1.463 9.2l3.656 3.563-.863 5.031a1.532 1.532 0 0 0 2.226 1.616L11 17.033l4.518 2.375a1.534 1.534 0 0 0 2.226-1.617l-.863-5.03L20.537 9.2a1.523 1.523 0 0 0 .387-1.575Z" />
            </svg>
            <p class="text-xs">5.0 | Terjual 1,6k+</p>
          </div>
        </div>
      </div>

    </div>
  </div>

  <!-- Section Keuntungan Belanja -->
  <div class="max-w-screen-xl mx-auto my-24">
    <h5 class="mb-5 ml-3 text-2xl font-bold tracking-tight text-gray-900 cursor-default">Keuntungan Belanja di Apotek Huda</h5>
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

  <!-- Artikel Section -->
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
          <p class="text-sm mb-3 font-normal text-gray-700">Beberapa hal yang perlu diperhatikan dalam menjaga kesehatan mata di usia dini. </p>
          <a href="#" class="font-semibold text-base italic underline underline-offset-4 hover:text-second-color">
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
          <p class="text-sm mb-3 font-normal text-gray-700">Beberapa hal yang perlu diperhatikan dalam menjaga kesehatan mata di usia dini. </p>
          <a href="#" class="font-semibold text-base italic underline underline-offset-4 hover:text-second-color">
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
          <p class="text-sm mb-3 font-normal text-gray-700">Beberapa hal yang perlu diperhatikan dalam menjaga kesehatan mata di usia dini. </p>
          <a href="#" class="font-semibold text-base italic underline underline-offset-4 hover:text-second-color">
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
          <p class="text-sm mb-3 font-normal text-gray-700">Beberapa hal yang perlu diperhatikan dalam menjaga kesehatan mata di usia dini. </p>
          <a href="#" class="font-semibold text-base italic underline underline-offset-4 hover:text-second-color">
            Baca Selengkapnya...
          </a>


        </div>
      </div>

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

  <script src="assets/js/script.js"></script>
</body>

</html>