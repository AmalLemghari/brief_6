<?php
require_once('config/db.php');
require_once('config/loginSystem.php');
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.tailwindcss.com"></script>
    <title>Authentification</title>
</head>

<body >
<?php
    if (!empty($errormessage)) {
        echo '<div class="w-full text-white bg-red-500">
        <div class="container flex items-center justify-between px-6 py-4 mx-auto">
            <div class="flex">
                <svg viewBox="0 0 40 40" class="w-6 h-6 fill-current">
                    <path d="M20 3.36667C10.8167 3.36667 3.3667 10.8167 3.3667 20C3.3667 29.1833 10.8167 36.6333 20 36.6333C29.1834 36.6333 36.6334 29.1833 36.6334 20C36.6334 10.8167 29.1834 3.36667 20 3.36667ZM19.1334 33.3333V22.9H13.3334L21.6667 6.66667V17.1H27.25L19.1334 33.3333Z">
                    </path>
                </svg>
    
                <p class="mx-3">'.$errormessage.'</p>
            </div>
    
            <button class="p-1 transition-colors duration-300 transform rounded-md hover:bg-opacity-25 hover:bg-gray-600 focus:outline-none">
                <svg class="w-5 h-5" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M6 18L18 6M6 6L18 18" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                </svg>
            </button>
        </div>
    </div>';
    }
    ?>
<div class="bg-white dark:bg-gray-900">
    <div class="flex justify-center h-screen">
        <div class="hidden bg-gradient-to-r from-indigo-500 to-green-500 lg:block lg:w-2/3">
            <div class="flex items-center h-full px-20 bg-gray-900 bg-opacity-40">
                <div class="">
                    

                    <p class="max-w-xl mt-3 text-gray-300">
                    Welcome! to DataWare, an innovative company that specializes in human management. It gives us great pleasure to have you as a user of our platform                    </p>
                </div>
            </div>
        </div>

        <div class="flex items-center w-full max-w-md px-6 mx-auto lg:w-2/6">
            <div class="flex-1">
                <div class="text-center">
                    <div class="flex justify-center mx-auto">
                    </div>
                    <span class="text-transparent bg-clip-text bg-gradient-to-r to-emerald-600 from-sky-400">Data</span> Ware
                    <p class="mt-3 text-gray-500 dark:text-gray-300">To access your account, log in</p>
                </div>

                <div class="mt-8">
                    <form method="POST" action="./config/loginSystem.php">
                        <div>
                            <label for="email" class="block mb-2 text-sm text-gray-600 dark:text-gray-200">Adress E-mail</label>
                            <input type="email" name="loginEmail" id="email" placeholder="example@example.com" class="block w-full px-4 py-2 mt-2 text-gray-700 placeholder-gray-400 bg-white border border-gray-200 rounded-lg dark:placeholder-gray-600 dark:bg-gray-900 dark:text-gray-300 dark:border-gray-700 focus:border-blue-400 dark:focus:border-blue-400 focus:ring-blue-400 focus:outline-none focus:ring focus:ring-opacity-40" />
                        </div>

                        <div class="mt-6">
                            <div class="flex justify-between mb-2">
                                <label for="password" class="text-sm text-gray-600 dark:text-gray-200">Password</label>
                                <!-- <a href="#" class="text-sm text-gray-400 focus:text-blue-500 hover:text-blue-500 hover:underline">Forgot password?</a> -->
                            </div>

                            <input   type="password" name="loginPassword" id="password" placeholder="Your Password" class="block w-full px-4 py-2 mt-2 text-gray-700 placeholder-gray-400 bg-white border border-gray-200 rounded-lg dark:placeholder-gray-600 dark:bg-gray-900 dark:text-gray-300 dark:border-gray-700 focus:border-blue-400 dark:focus:border-blue-400 focus:ring-blue-400 focus:outline-none focus:ring focus:ring-opacity-40" />
                        </div>

                        <div class="mt-6">
                            <button type="submit" class="w-full px-4 py-2 tracking-wide text-white transition-colors duration-300 transform bg-gradient-to-r from-indigo-500 to-green-500 rounded-lg hover:bg-blue-400 focus:outline-none focus:bg-blue-400 focus:ring focus:ring-blue-300 focus:ring-opacity-50">
                                Log In
                            </button>
                        </div>
                    </form>
                    <p class="mt-6 text-sm text-center text-gray-400">Don&#x27;t have an account yet? <a href="signup.php" class="text-blue-500 focus:outline-none focus:underline hover:underline">Sign up</a>.</p>
                </div>
            </div>
        </div>
    </div>
</div>
</body>

</html>
