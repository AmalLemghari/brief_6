<?php

// Assuming you have a database connection established
require_once('config/db.php');

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    
    $user_role = $_POST['user_role'];
    if ($user_role === 'member') {
        $user_id = $_POST['user_id'];

        // Update the user's role in the database
        $update_query = "UPDATE users SET role =  'scrum master' WHERE id = $user_id";

        if (mysqli_query($con, $update_query)) {
            header('Location: landing_po.php');
            exit();
        } else {
            // Handle the case where the update fails
            echo "Error updating role: " . mysqli_error($con);
        }
    } else {
        // Retrieve user ID from the form submission
        $userid = $_POST['userid'];

        // Update the user's role in the database
        $update_query = "UPDATE users SET role =  'member' WHERE id = $userid";

        if (mysqli_query($con, $update_query)) {
            header('Location: landing_po.php');
            exit();
        } else {
            // Handle the case where the update fails
            echo "Error updating role: " . mysqli_error($con);
        }
    }
}

// Close the database connection
mysqli_close($con);
