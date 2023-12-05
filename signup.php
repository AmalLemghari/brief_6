<?php
require_once('config/db.php');
require_once('config/signUpSystem.php');
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.tailwindcss.com"></script>
    <title>Sign Up</title>
</head>
<style>
 
</style>
<body class="bg-gray-100 h-screen flex items-center justify-center">
<section class="bg-white dark:bg-gray-900 w-full">
    <div class="flex justify-center min-h-screen">
        <div class="hidden bg-contain bg-no-repeat lg:block lg:w-2/5 " style="background-image: url('img/22930471539.png') ">
        </div>

        <div class="flex items-center w-full max-w-3xl p-8 mx-auto lg:px-12 lg:w-3/5">
            <div class="w-full">
                <h1 class="text-2xl font-semibold tracking-wider text-gray-800 capitalize dark:text-white">
                    sign Up Now
                </h1>

                <p class="mt-4 text-gray-500 dark:text-gray-400">
                Let's get you all set up so you can start creating your profile and verifying your personal account
                </p>
                <form class="grid grid-cols-1 gap-6 mt-8 md:grid-cols-2" method="POST" action="./config/signUpSystem.php">
                    <div>
                        <label class="block mb-2 text-sm text-gray-600 dark:text-gray-200">First Name</label>
                        <input id="firstname" name="firstname" type="text" placeholder="Spongebob" class="block w-full px-5 py-3 mt-2 text-gray-700 placeholder-gray-400 bg-white border border-gray-200 rounded-lg dark:placeholder-gray-600 dark:bg-gray-900 dark:text-gray-300 dark:border-gray-700 focus:border-blue-400 dark:focus:border-blue-400 focus:ring-blue-400 focus:outline-none focus:ring focus:ring-opacity-40" />
                    </div>

                    <div>
                        <label class="block mb-2 text-sm text-gray-600 dark:text-gray-200">Last Name</label>
                        <input id="lastname" name="lastname" type="text" placeholder=" SquarePants" class="block w-full px-5 py-3 mt-2 text-gray-700 placeholder-gray-400 bg-white border border-gray-200 rounded-lg dark:placeholder-gray-600 dark:bg-gray-900 dark:text-gray-300 dark:border-gray-700 focus:border-blue-400 dark:focus:border-blue-400 focus:ring-blue-400 focus:outline-none focus:ring focus:ring-opacity-40" />
                    </div>

                    <div>
                        <label class="block mb-2 text-sm text-gray-600 dark:text-gray-200">Phone Num</label>
                        <input id="phone" name="phone" type="text" placeholder="+212X XXXXXXX" class="block w-full px-5 py-3 mt-2 text-gray-700 placeholder-gray-400 bg-white border border-gray-200 rounded-lg dark:placeholder-gray-600 dark:bg-gray-900 dark:text-gray-300 dark:border-gray-700 focus:border-blue-400 dark:focus:border-blue-400 focus:ring-blue-400 focus:outline-none focus:ring focus:ring-opacity-40" />
                    </div>

                    <div>
                        <label class="block mb-2 text-sm text-gray-600 dark:text-gray-200">Address E-mail</label>
                        <input id="email"  name="email" type="email" placeholder="example@example.com" class="block w-full px-5 py-3 mt-2 text-gray-700 placeholder-gray-400 bg-white border border-gray-200 rounded-lg dark:placeholder-gray-600 dark:bg-gray-900 dark:text-gray-300 dark:border-gray-700 focus:border-blue-400 dark:focus:border-blue-400 focus:ring-blue-400 focus:outline-none focus:ring focus:ring-opacity-40" />
                    </div>

                    <div>
                        <label class="block mb-2 text-sm text-gray-600 dark:text-gray-200">Password</label>
                        <input id="password" name="password" type="password" placeholder="Enter your password" class="block w-full px-5 py-3 mt-2 text-gray-700 placeholder-gray-400 bg-white border border-gray-200 rounded-lg dark:placeholder-gray-600 dark:bg-gray-900 dark:text-gray-300 dark:border-gray-700 focus:border-blue-400 dark:focus:border-blue-400 focus:ring-blue-400 focus:outline-none focus:ring focus:ring-opacity-40" />
                    </div>

                    <div>
                        <label class="block mb-2 text-sm text-gray-600 dark:text-gray-200">Confirm Password</label>
                        <input  name="confirmpassword" type="password" placeholder="Confirm your password" class="block w-full px-5 py-3 mt-2 text-gray-700 placeholder-gray-400 bg-white border border-gray-200 rounded-lg dark:placeholder-gray-600 dark:bg-gray-900 dark:text-gray-300 dark:border-gray-700 focus:border-blue-400 dark:focus:border-blue-400 focus:ring-blue-400 focus:outline-none focus:ring focus:ring-opacity-40" />
                    </div>

                    <button type="submit"
                        class="flex items-center justify-between w-full px-6 py-3 text-sm tracking-wide text-white capitalize transition-colors duration-300 transform bg-gradient-to-r from-indigo-500 to-green-500 rounded-lg hover:bg-blue-400 focus:outline-none focus:ring focus:ring-blue-300 focus:ring-opacity-50">
                        <span>Sign Up </span>

                        <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5 rtl:-scale-x-100" viewBox="0 0 20 20" fill="currentColor">
                            <path fill-rule="evenodd"
                                d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z"
                                clip-rule="evenodd" />
                        </svg>
                    </button>
                </form>
            </div>
        </div>
    </div>
</section>

</body>

</html>