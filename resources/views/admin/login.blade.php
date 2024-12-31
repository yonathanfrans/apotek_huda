<x-start></x-start>


<div class="flex flex-col items-center justify-center min-h-screen mx-auto">
    <div class="max-w-lg w-full bg-white rounded-lg shadow md:mt-0 sm:max-w-md xl:p-0">
        <!-- Login Form -->
        <div id="login-form" class="p-8 space-y-8 md:space-y-6 sm:p-8">
            <img src="assets/img/logo-login.webp" alt="logo" class="w-fit mx-auto">
            <form class="space-y-4 md:space-y-6" action="#">
                <div>
                    <label for="email" class="block mb-2 text-sm font-medium text-gray-900">Your email</label>
                    <input type="email" name="email" id="email" class="border-gray-300 text-gray-700 focus:border-2 rounded-lg focus:border-third-color outline-none text-sm w-full p-2.5 focus:outline-none focus:ring-0" placeholder="name@company.com" required>
                </div>
                <div>
                    <label for="password" class="block mb-2 text-sm font-medium text-gray-900">Password</label>
                    <input type="password" name="password" id="password" placeholder="••••••••" class="border-gray-300 text-gray-700 focus:border-2 rounded-lg focus:border-third-color outline-none text-sm w-full p-2.5 focus:outline-none focus:ring-0" required>
                </div>
                <div class="flex items-center justify-between">
                    <div class="flex items-start">
                        <div class="flex items-center h-5">
                            <input id="remember" aria-describedby="remember" type="checkbox" class="w-4 h-4 border border-gray-300 rounded bg-gray-50" required="">
                        </div>
                        <div class="ml-3 text-sm">
                            <label for="remember" class="text-gray-500">Remember me</label>
                        </div>
                    </div>
                    <a href="#" class="text-sm font-medium text-fourth-color hover:underline">Forgot password?</a>
                </div>
                <button type="submit" class="w-full text-white bg-fourth-color focus:outline-none focus:ring-0 font-medium rounded-lg text-sm px-5 py-2.5 text-center">Sign in</button>
                <p class="text-sm font-light text-gray-500">
                    Don’t have an account yet? <a id="show-register" href="#" class="font-medium text-fourth-color hover:underline">Sign up</a>
                </p>
            </form>
        </div>

        <!-- Register Form -->
        <div id="register-form" class="p-8 space-y-8 md:space-y-6 sm:p-8 hidden">
            <img src="assets/img/logo-login.webp" alt="logo" class="w-fit mx-auto">
            <form class="space-y-4 md:space-y-6" action="#">
                <div>
                    <label for="name" class="block mb-2 text-sm font-medium text-gray-900">Your Name</label>
                    <input type="text" name="name" id="name" class="border-gray-300 text-gray-700 focus:border-2 rounded-lg focus:border-third-color outline-none text-sm w-full p-2.5 focus:outline-none focus:ring-0" placeholder="John Doe" required>
                </div>
                <div>
                    <label for="email" class="block mb-2 text-sm font-medium text-gray-900">Your email</label>
                    <input type="email" name="email" id="email" class="border-gray-300 text-gray-700 focus:border-2 rounded-lg focus:border-third-color outline-none text-sm w-full p-2.5 focus:outline-none focus:ring-0" placeholder="name@company.com" required>
                </div>
                <div>
                    <label for="password" class="block mb-2 text-sm font-medium text-gray-900">Password</label>
                    <input type="password" name="password" id="password" placeholder="••••••••" class="border-gray-300 text-gray-700 focus:border-2 rounded-lg focus:border-third-color outline-none text-sm w-full p-2.5 focus:outline-none focus:ring-0" required>
                </div>
                <div>
                    <label for="confirm-password" class="block mb-2 text-sm font-medium text-gray-900">Confirm Password</label>
                    <input type="password" name="confirm-password" id="confirm-password" placeholder="••••••••" class="border-gray-300 text-gray-700 focus:border-2 rounded-lg focus:border-third-color outline-none text-sm w-full p-2.5 focus:outline-none focus:ring-0" required>
                </div>
                <button type="submit" class="w-full text-white bg-fourth-color focus:outline-none focus:ring-0 font-medium rounded-lg text-sm px-5 py-2.5 text-center">Sign up</button>
                <p class="text-sm font-light text-gray-500">
                    Already have an account? <a id="show-login" href="#" class="font-medium text-fourth-color hover:underline">Sign in</a>
                </p>
            </form>
        </div>
    </div>
</div>




<x-end></x-end>