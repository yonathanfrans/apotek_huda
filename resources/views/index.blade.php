<!doctype html>
<html>

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  @vite('resources/css/app.css')
</head>

<body class="font-sans">

  <!-- Navigation Start -->

  <nav class='py-5 bg-main-color max-h-max flex justify-around items-center px-20'>

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
      <svg class="h-8 cursor-pointer" viewBox="0 0 79 77" fill="none" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
        <rect y="17" width="60" height="60" fill="url(#pattern0_2_44)" />
        <defs>
          <pattern id="pattern0_2_44" patternContentUnits="objectBoundingBox" width="1" height="1">
            <use xlink:href="#image0_2_44" transform="scale(0.01)" />
          </pattern>
          <image id="image0_2_44" width="100" height="100" xlink:href="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAGQAAABkCAYAAABw4pVUAAAACXBIWXMAAAsTAAALEwEAmpwYAAAF8klEQVR4nO2da8hURRjHJytTU7AsokArocgKyiwrLBKKKDIi6Epg0IVCulMIXSDrQ1aGX4pKQw2RMrSUrMy36EIU5geLwqDyxTS60d3I6n3tF4870tu2e+Y5Z3fPzJw5Pzjf9sw+c/7snpn5P8+MAYYD84EfKM6fwDfAJmApMAs42NTkB3i5AyFcIi0DJhYIK13oPb8AV/juZzRQHtf57msUlCjIIHCO7/4GD7CzRFG+AEb77nPQADdSLvf67nPwACcCTwFrgOcKXC8B7wDbFYJ8B4zw3eckAEYB8xSi1KOusgD2AFY5BFlVWkA1u0Q5DBjIEGQHsG/9rErEvo+yOL/MeJIHuNIhyOPJP6QyAQ6wk8F2bC01oJpdorzn+JUcWz+nEgHudggyu8x4kgc43iHIm8k/JA9zkm0ZgsjQeGypQaUOsMDxK7nEd4xJAVzgEGSJ7xiTQmbkdmaetdg4zHecSQGsdfxKTvIdY1IoPJfaIykTyTxROIl9wJfAjxW/NstwH5jrdWJsc7Zq/svfwCIvK9/AQ03B1PzLutIHNsD0IQHU/J9ryhZkb+CnFoHUNOgvVRAryrP2y2tac2TZgsxsE0hNgxllC3JgyYl5sXFZqYIoTSvhuA6/Q8b5zZzXgfW8spN4hrS9gmzO7cb3dNu0EuZUTRCplwH+IJsjOv2eIoFNxs2HFRREZuZZfO1lkVVhWu1mYlUEAcYohvyPmYBNK+G2CglyB25OMAGbVsJbVRDEToi3ks2rJgDTyvWCG7RJEhMLXOtbtHe18t7bW9y7tmAcct2EmzO9CqI0rVJhg0m0UChULjIhABzu+0kEwOfAniYUatOKa01IKE2rgQI2aavalO3Ke39rce9fBWIQN9A1EQyrtE9pWn0P7BXTsFeyaBT9Ci+vWR600rQ6IzJBnlfsbhFmCi2wXCHI/FgEEZNJYTHMNaGiNK22yBpYJIIsdPRFJsSHmFCxplVWpdVuJocuCHCQI21WWGBCR2lazYlAENcSu/yVTTKhozSttgFPKq+vWtz/ivLeN1rc26+892dHH1aYGFCaVlXgFBMDOUyrmHndxITStIqZs01MKE2rWPkgz7A9CJSmlfCiLDs4LnkJN7NYcd/sNhPVj3J+vpnLTYygM61WhTTstXUtWfTnXYsLBnSmlUy8xoQgiB0dulZ1Z5lYQW9aXRyIICsdcX4LjDQxg67S6hnfggBHKRYR7zKxAzysEGR7lrlTkiBLHDGK0TXOxA76SqsZvgQBxtut1LN4xFQB9JVWW+wIp9UlFmozGzM+P/T6uM27YOhnXH+rItZ4UxXQje1DZpGpEsRdaSXD4GNMlSDuSqvVpoqgM61CZJqpIuhMq9DwV+PRa4jPtJJ1uH1MVaFhWslmNKHTb0sO4lxA7LJpdScwxeM1waQEbtPqad8xJgVu0yrclMyqgtu0qsaaUYVMq0HgLN9xJgMwDvjVIYosRp7sO9ZkAO5D55FcH112R8RnW21GxyZb2ny69S3283QNN1WGhnGVdYxSaOy03kn4ydVFAW4lPuQU7kNNVQEeJT6qu+goAA8QF++bqgPMUlQrhcI6kwLA0cBrhM9VJiVoDHGXtyn6983iZOdGwEg7PL4ZeDBHCVwvLkn4S3tJB5gmxaGyLA88Adwix8B2qW3xP+6xGYsL7eSz3I2PYwGYBLzb5i9jwIozqoNzffsyJn9LawtgCLKoqKh+FTa4yhjaDBoka9HFJ3KyqUkdYGybEuh2LMvR9gjg0xxt+903MaJV4OaswinKtjV7JcZd2NltgM8KPLR5PUzUS/cIQGA0xehTtv97gbY3mlShsZd6EdYrSyJctYOt2GxShcbmZ7L1Xl5eULYvB17m5W2TMhRbx7qhh6cBpX0eI3BhzgcmyRD7K9s+LWfbO5LLZCy4v+FQZpre7b9S+PCAKmY3rlHkbuV+YJKoIJNJR9vy8r+/N72LFGCYeA4tijEH7MZlUzvMwr/UFo02r2PJZmfTu9ubigFMsP7I1G4v+snmlfbdcqr2XZSXfwDnWglJiO6AhgAAAABJRU5ErkJggg==" />
        </defs>
      </svg>

      <button type="button" class="group px-3 py-2 text-md text-white font-semibold inline-flex items-center border-2 border-white rounded-lg bg-main-color hover:bg-white hover:text-main-color">
        <svg class="w-6 h-6 me-2 text-white group-hover:text-main-color" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
          <path d="M10 0a10 10 0 1 0 10 10A10.011 10.011 0 0 0 10 0Zm0 5a3 3 0 1 1 0 6 3 3 0 0 1 0-6Zm0 13a8.949 8.949 0 0 1-4.951-1.488A3.987 3.987 0 0 1 9 13h2a3.987 3.987 0 0 1 3.951 3.512A8.949 8.949 0 0 1 10 18Z" />
        </svg>
        Login
      </button>

    </div>

  </nav>

  <!-- Navigation End -->


  <!-- Carousel Start -->

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
    <button onclick="prevSlide()" class="absolute top-0 start-0 z-30 flex items-center justify-center h-full px-8 cursor-pointer group focus:outline-none">
      <svg class="w-4 h-4 text-black rtl:rotate-180" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 6 10">
        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 1 1 5l4 4" />
      </svg>
    </button>

    <button onclick="nextSlide()" class="absolute top-0 end-0 z-30 flex items-center justify-center h-full px-8 cursor-pointer group focus:outline-none">
      <svg class="w-4 h-4 text-black rtl:rotate-180" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 6 10">
        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 9 4-4-4-4" />
      </svg>
    </button>
  </div>

  <!-- Carousel End -->


  <!-- Kategori Card Start -->

  <div class="max-w-screen-xl mx-auto my-10 py-3 bg-white border border-gray-300 rounded-lg shadow-xl ">
    <div class="flex items-center justify-between px-9">
      <h5 class="mb-2 text-2xl font-semibold tracking-tight text-gray-900 dark:text-white">Kategori Pilihan</h5>
      <a href="#" class="inline-flex font-normal place-items-center text-black gap-4 bg-second-color py-1 px-3 rounded-full ">
        Tampilkan Semua
        <svg class="w-6 h-6 text-gray border-2 border-black rounded-full px-1" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 10">
          <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M1 5h12m0 0L9 1m4 4L9 9" />
        </svg>
      </a>
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

  <!-- Kategori Card End -->



  <script src="assets/js/script.js"></script>
</body>

</html>