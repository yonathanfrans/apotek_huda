<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @vite('resources/css/app.css')
    <title>Login - Apotek Huda</title>
</head>
<body>
    
    <section class="bg-[#537547] min-h-screen flex items-center justify-center">
        <!-- Login Container -->
         <div class="bg-[#30533E] flex rounded-2xl shadow-lg max-w-4xl p-5 items-center">
            <!-- Form -->
             <div class="w-full sm:px-4 md:w-1/2 md:px-16 mx-auto">
                <h2 class="text-white font-bold text-3xl text-center">Forgot Password?</h2>
                <p class="text-white text-sm mt-4 text-center">No worries, we'll send you reset instructions</p>

                <form action="" class="flex flex-col gap-4">
                    <input class="bg-[#FDEBEB] p-2 mt-8 rounded-lg border" type="text" name="email" placeholder="Email">

                    <button class="bg-white mt-4 rounded-lg text-black py-2 hover:scale-95 duration-300">Reset Password</button>

                    <p class="text-sm text-gray-600 mt-2 text-center">
                        <a href="{{ route('login') }}" class="text-white hover:underline flex items-center justify-center">
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="white" class="bi bi-arrow-left mr-1" viewBox="0 0 16 16">
                            <path fill-rule="evenodd" d="M15 8a.5.5 0 0 0-.5-.5H2.707l3.147-3.146a.5.5 0 1 0-.708-.708l-4 4a.5.5 0 0 0 0 .708l4 4a.5.5 0 0 0 .708-.708L2.707 8.5H14.5A.5.5 0 0 0 15 8"/>
                        </svg>
                        Back to Login
                        </a>
                    </p>
                </form>
             </div>

             <!-- Image -->
              <div class="md:block hidden w-1/2">
                <img class="rounded-2xl" src="assets/img/pic-3.webp" alt="">
              </div>
         </div>
    </section>

</body>
</html>