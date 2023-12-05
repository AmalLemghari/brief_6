<?php
require_once('config/db.php');



$result = mysqli_query($con, "SELECT * FROM projects , equipe where equipe.id = projects.teamId");
$result_1 = mysqli_query($con, "SELECT * FROM users  where role ='member' ");
$result_3 = mysqli_query($con, "SELECT DISTINCT team, id FROM equipe");
$result_2 = mysqli_query($con, "SELECT DISTINCT users.*, equipe.*
    FROM users
    JOIN equipe ON equipe.id = users.teamId
    WHERE users.role = 'scrum master'");

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.tailwindcss.com"></script>
    <title>Business</title>
    <style>
        .centered-message {
            position: fixed;
            top: 50%;
            left: 60%;
            transform: translate(-50%, -50%);
            z-index: -1;
            color: white;
            font-size: 50px;
            font-family: Cambria, Cochin, Georgia, Times, 'Times New Roman', serif;
            font-weight: bold;
            text-align: center;
        }
    </style>
</head>

<body class="bg-gradient-to-r from-indigo-500 to-green-500 bg-no-repeat h-fit	">
    <div class="centered-message">
        Welcome to you! <br> Member
    </div>
    <header class="antialiased">
        <nav class="bg-white border-gray-200 px-4 lg:px-6 py-2.5 dark:bg-gray-800">
            <div class="flex flex-wrap justify-between items-center">
                <div class="flex justify-between items-center">
                    <button id="toggleSidebar" aria-expanded="true" aria-controls="sidebar" class="p-2 mr-3 text-gray-600 rounded cursor-pointer lg:inline hover:text-gray-900 hover:bg-gray-100 dark:text-gray-400 dark:hover:text-white dark:hover:bg-gray-700">
                        <svg class="w-5 h-5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 16 12">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M1 1h14M1 6h14M1 11h7" />
                        </svg>
                    </button>
                    <a href="https://flowbite.com" class="flex mr-4">
                        <span class="text-transparent bg-clip-text bg-gradient-to-r to-emerald-600 from-sky-400">Data</span> Ware
                    </a>
                    <form class="hidden lg:block lg:pl-2">
                        <label for="topbar-search" class="sr-only">Search</label>
                        <div class="relative mt-1 lg:w-96">
                            <div class="flex absolute inset-y-0 left-0 items-center pl-3 pointer-events-none">
                                <svg class="w-4 h-4 text-gray-500 dark:text-gray-400" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 20 20">
                                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m19 19-4-4m0-7A7 7 0 1 1 1 8a7 7 0 0 1 14 0Z" />
                                </svg>
                            </div>
                            <input type="text" name="email" id="topbar-search" class="bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-primary-500 focus:border-primary-500 block w-full pl-9 p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500 " placeholder="Search">
                        </div>
                    </form>
                </div>
            </div>
        </nav>
    </header>
    <div class="flex">
        <aside id="sidebar" class=" lg:flex flex-col w-64 h-screen px-4 py-8 overflow-y-auto bg-white border-r rtl:border-r-0 rtl:border-l dark:bg-gray-900 dark:border-gray-700 h-screeen	">
            <div class="flex flex-col justify-between flex-1 mt-6">
                <nav>
                    <a id="dashboardButton" class="flex items-center px-4 py-2 mt-5 text-gray-600 transition-colors duration-300 transform rounded-md dark:text-gray-400 hover:bg-gray-100 dark:hover:bg-gray-800 dark:hover:text-gray-200 hover:text-gray-700" href="#">
                        <svg class="h-5" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9.75 17L9 20l-1 1h8l-1-1-.75-3M3 13h18M5 17h14a2 2 0 002-2V5a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z" />
                        </svg>
                        <span class="mx-4 font-medium">Home</span>
                    </a>
                    <a id="projectButton" class="flex items-center px-4 py-2 mt-5 text-gray-600 transition-colors duration-300 transform rounded-md dark:text-gray-400 hover:bg-gray-100 dark:hover:bg-gray-800 dark:hover:text-gray-200 hover:text-gray-700" href="#">
                        <svg class="w-5 h-5" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M19 11H5M19 11C20.1046 11 21 11.8954 21 13V19C21 20.1046 20.1046 21 19 21H5C3.89543 21 3 20.1046 3 19V13C3 11.8954 3.89543 11 5 11M19 11V9C19 7.89543 18.1046 7 17 7M5 11V9C5 7.89543 5.89543 7 7 7M7 7V5C7 3.89543 7.89543 3 9 3H15C16.1046 3 17 3.89543 17 5V7M7 7H17" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                        </svg>
                        <span class="mx-4 font-medium">Projects</span>
                    </a>
                    <a id="membersButton" class="flex items-center px-4 py-2 mt-5 text-gray-600 transition-colors duration-300 transform rounded-md dark:text-gray-400 hover:bg-gray-100 dark:hover:bg-gray-800 dark:hover:text-gray-200 hover:text-gray-700" href="#">
                        <svg class="h-5" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M20 7l-8-4-8 4m16 0l-8 4m8-4v10l-8 4m0-10L4 7m8 4v10M4 7v10l8 4" />
                        </svg>
                        <span class="mx-4 font-medium">Members</span>
                    </a>
                    <a id="scrumMasterButton" class="flex items-center px-4 py-2 mt-5 text-gray-600 transition-colors duration-300 transform rounded-md dark:text-gray-400 hover:bg-gray-100 dark:hover:bg-gray-800 dark:hover:text-gray-200 hover:text-gray-700" href="#">
                        <svg class="w-5 h-5" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M10.3246 4.31731C10.751 2.5609 13.249 2.5609 13.6754 4.31731C13.9508 5.45193 15.2507 5.99038 16.2478 5.38285C17.7913 4.44239 19.5576 6.2087 18.6172 7.75218C18.0096 8.74925 18.5481 10.0492 19.6827 10.3246C21.4391 10.751 21.4391 13.249 19.6827 13.6754C18.5481 13.9508 18.0096 15.2507 18.6172 16.2478C19.5576 17.7913 17.7913 19.5576 16.2478 18.6172C15.2507 18.0096 13.9508 18.5481 13.6754 19.6827C13.249 21.4391 10.751 21.4391 10.3246 19.6827C10.0492 18.5481 8.74926 18.0096 7.75219 18.6172C6.2087 19.5576 4.44239 17.7913 5.38285 16.2478C5.99038 15.2507 5.45193 13.9508 4.31731 13.6754C2.5609 13.249 2.5609 10.751 4.31731 10.3246C5.45193 10.0492 5.99037 8.74926 5.38285 7.75218C4.44239 6.2087 6.2087 4.44239 7.75219 5.38285C8.74926 5.99037 10.0492 5.45193 10.3246 4.31731Z" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                            <path d="M15 12C15 13.6569 13.6569 15 12 15C10.3431 15 9 13.6569 9 12C9 10.3431 10.3431 9 12 9C13.6569 9 15 10.3431 15 12Z" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                        </svg>
                        <span class="mx-4 font-medium">Scrum Masters</span>
                    </a>
                    <a id="helpButton" class="flex items-center px-4 py-2 mt-5 text-gray-600 transition-colors duration-300 transform rounded-md dark:text-gray-400 hover:bg-gray-100 dark:hover:bg-gray-800 dark:hover:text-gray-200 hover:text-gray-700" href="#">
                        <svg class="w-5 h-5" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M16 7C16 9.20914 14.2091 11 12 11C9.79086 11 8 9.20914 8 7C8 4.79086 9.79086 3 12 3C14.2091 3 16 4.79086 16 7Z" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                            <path d="M12 14C8.13401 14 5 17.134 5 21H19C19 17.134 15.866 14 12 14Z" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                        </svg>
                        <span class="mx-4 font-medium">Teams</span>
                    </a>
                    <hr class="my-6 border-gray-200 dark:border-gray-600" />
                    <a href="login.php" id="logInButton" class="flex items-center px-4 py-2 mt-5 text-gray-600 transition-colors duration-300 transform rounded-md dark:text-gray-400 hover:bg-gray-100 dark:hover:bg-gray-800 dark:hover:text-gray-200 hover:text-gray-700" href="#">
                        <svg class="h-5" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 16l4-4m0 0l-4-4m4 4H7m6 4v1a3 3 0 01-3 3H6a3 3 0 01-3-3V7a3 3 0 013-3h4a3 3 0 013 3v1" />
                        </svg>
                        <span class="mx-4 font-medium">Log Out</span>
                    </a>
                </nav>
            </div>
        </aside>
        <div class="flex-1">
            <!-- table -->
            <div class="relative overflow-x-auto shadow-md ">
                <table id="projectTable" class="w-full text-sm text-left rtl:text-right text-gray-500 dark:text-gray-400 hidden ">
                    <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                        <tr>
                            <th scope="col" class="px-6 py-3 text-center">
                                Project Name
                            </th>
                            <th scope="col" class="px-6 py-3 text-center">
                                Description
                            </th>
                            <th scope="col" class="px-6 py-3 text-center">
                                Deadline
                            </th>
                            <th scope="col" class="px-6 py-3 text-center">
                                Team
                            </th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        while ($row = mysqli_fetch_assoc($result)) {
                        ?>
                            <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                                <td class="text-center px-6 py-4"><?php echo $row['project_name'] ?></td>
                                <td class="text-center px-6 py-4"><?php echo $row['description'] ?></td>
                                <td class="text-center px-6 py-4"><?php echo $row['deadline'] ?></td>
                                <td class="text-center px-6 py-4"><?php echo $row['team'] ?></td>
                            <?php
                        }
                            ?>
                    </tbody>
                </table>
            </div>
            <div class="relative overflow-x-auto shadow-md ">
                <table id="memberTable" class="w-full text-sm text-left rtl:text-right text-gray-500 dark:text-gray-400 hidden">
                    <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                        <tr>
                            <th scope="col" class="px-6 py-3 text-center">
                                First Name
                            </th>
                            <th scope="col" class="px-6 py-3 text-center">
                                Last name
                            </th>
                            <th scope="col" class="px-6 py-3 text-center">
                                Phone Num
                            </th>
                            <th scope="col" class="px-6 py-3 text-center">
                                Adress E-mail
                            </th>
                            <th scope="col" class="px-6 py-3 text-center">
                                Rôle
                            </th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        while ($row = mysqli_fetch_assoc($result_1)) {
                        ?>
                            <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                                <td class="text-center px-6 py-4"><?php echo $row['firstname'] ?></td>
                                <td class="text-center px-6 py-4"><?php echo $row['lastname'] ?></td>
                                <td class="text-center px-6 py-4"><?php echo $row['phone'] ?></td>
                                <td class="text-center px-6 py-4"><?php echo $row['email'] ?></td>
                                <td class="text-center px-6 py-4"><?php echo $row['role'] ?></td>
                            </tr>
                        <?php
                        }
                        ?>
                    </tbody>
                </table>
            </div>
            <div class="relative overflow-x-auto shadow-md ">
                <table id="scrumMasterTable" class="w-full text-sm text-left rtl:text-right text-gray-500 dark:text-gray-400 hidden">
                    <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                        <tr>
                            <th scope="col" class="px-6 py-3 text-center">
                                First Name
                            </th>
                            <th scope="col" class="px-6 py-3 text-center">
                                Last name
                            </th>
                            <th scope="col" class="px-6 py-3 text-center">
                                Phone Num
                            </th>
                            <th scope="col" class="px-6 py-3 text-center">
                                Team
                            </th>
                            <th scope="col" class="px-6 py-3 text-center">
                                Adress E-mail
                            </th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        while ($row = mysqli_fetch_assoc($result_2)) {
                        ?>
                            <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                                <td class="text-center px-6 py-4"><?php echo $row['firstname'] ?></td>
                                <td class="text-center px-6 py-4"><?php echo $row['lastname'] ?></td>
                                <td class="text-center px-6 py-4"><?php echo $row['phone'] ?></td>
                                <td class="text-center px-6 py-4"><?php echo $row['team'] ?></td>
                                <td class="text-center px-6 py-4"><?php echo $row['email'] ?></td>
                            <?php
                        }
                            ?>
                    </tbody>
                </table>
            </div>
            <div class="relative overflow-x-auto shadow-md ">
            <table id="FAQ" class="w-full text-sm text-left rtl:text-right text-gray-500 dark:text-gray-400 hidden">
                    <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                        <tr>
                        <th scope="col" class="px-6 py-4 text-center">
                                Teams ID
                            </th>
                            <th scope="col" class="px-6 py-4 text-center">
                                Teams Name
                            </th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        while ($row = mysqli_fetch_assoc($result_3)) {
                            $id = $row['id'];
                            $teamName = $row['team'];
                            echo '<tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">';
                            echo '<td class="text-center px-6 py-4">' . $id . '</td>';
                            echo '<td class="text-center px-6 py-4">' . $teamName . '</td>';
                            echo '</tr>';
                        }
                        ?>
                    </tbody>
                </table>
            </div>
        </div>
        <script src="script.js">
        </script>
</body>

</html>