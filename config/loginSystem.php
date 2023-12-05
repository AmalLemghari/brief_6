<?php
require_once('db.php');

// Initialize variables
$errorMessage = '';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Handle form submission
    $loginEmail = $_POST['loginEmail'];
    $loginPassword = $_POST['loginPassword'];

    $query = "SELECT * FROM users WHERE email = '$loginEmail' AND password = '$loginPassword'";
    $result = mysqli_query($con, $query);

    if ($result && mysqli_num_rows($result) > 0) {
        $userData = mysqli_fetch_assoc($result);
        $role = $userData['role'];

        switch ($role) {
            case 'product owner':
                header("Location: ../landing_po.php");
                exit();
                break;
            case 'scrum master':
                header("Location: ../landing_sm.php");
                exit();
                break;
            case 'member':
                header("Location: ../landing_mem.php");
                exit();
                break;
            default:
                $errorMessage = "Invalid role for user.";
        }
    } else {
        $query = "SELECT * FROM users WHERE email = '$loginEmail'";
        $result = mysqli_query($con, $query);

        if ($result && mysqli_num_rows($result) > 0) {
            $errorMessage = "Wrong password";
        } else {
            $errorMessage = "Wrong email";
        }
    }
}
?>