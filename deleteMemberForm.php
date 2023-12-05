<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['memberid'])) {
    // Fetch the member ID from the form
    $memberid = $_POST['memberid'];

    // Fetch additional information about the member (e.g., name, etc.) if needed
    // ...

    // Display a form to confirm deletion
    echo '<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Delete Member</title>
        <script src="https://cdn.tailwindcss.com"></script>
    </head>
    <body>
    <section class="bg-white dark:bg-gray-900 h-screen flex justify-center items-center">
    <div class="px-6 py-16 mx-auto text-center">
        <h1 class="text-3xl font-semibold text-gray-800 dark:text-gray-100">Are you sure you want to delete member with ID \'' . $memberid . '\'?</h1>
        <!-- Additional information about the member can be displayed here if needed -->
        <p class="max-w-md mx-auto mt-5 text-gray-500 dark:text-gray-400">Warning: If you delete this member, you won\'t be able to recover it.</p>

        <form method="post" action="deleteMember.php" class="flex flex-col mt-8 space-y-3 sm:space-y-0 sm:flex-row sm:justify-center sm:-mx-2">
            <input type="hidden" name="memberid" value="' . $memberid . '">
            <button type="submit" class="px-4 py-2 text-sm font-medium tracking-wide text-white capitalize transition-colors duration-300 transform bg-gradient-to-r from-indigo-500 to-green-500 rounded-md sm:mx-2 hover:bg-blue-600 focus:outline-none focus:bg-blue-600">
                Delete
            </button>
        </form>
    </div>
</section>
</body>
</html>';
} else {
    // Handle the case where the 'memberid' key is not set in the POST data
}
?>
