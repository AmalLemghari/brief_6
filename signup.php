<?php
include "config.php";

$username_error = "";
$email_error = "";
$password_error = "";
$confirm_password_error = "";

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $username = $_POST['username'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $confirm_password = $_POST['confirm_password'];

    // Username validation
    if (!empty($username)) {
        if (strlen($username) <= 50) {
            $username = trim($username);
        } else {
            $username_error = "Username must be less than or equal to 50 characters";
        }
    } else {
        $username_error = "Username cannot be blank";
    }

    // Email validation
    if (!empty($email)) {
        if (strlen($email) <= 50) {
            if (filter_var($email, FILTER_VALIDATE_EMAIL)) {

                $email_check = "SELECT * FROM signup WHERE email = :email";
                $stmt = $conn->prepare($email_check);
                $stmt->bindParam(':email', $email);
                $stmt->execute();

                if ($stmt->rowCount() == 1) {
                    $email_error = "Email already exists";
                }
            } else {
                $email_error = "Please enter a valid email";
            }
        } else {
            $email_error = "Email must be less than or equal to 50 characters";
        }
    } else {
        $email_error = "Email cannot be blank";
    }

    // Password validation
    if (!empty(trim($password))) {
        if (strlen($password) >= 8 && strlen($password) <= 16) {
            $password = trim($password);
        } else {
            $password_error = "Password must be between 8 and 16 characters";
        }
    } else {
        $password_error = "Password cannot be blank";
    }

    // Confirm password validation
    if (!empty(trim($confirm_password))) {
        if ($password === $confirm_password) {
            $confirm_password = trim($confirm_password);
        } else {
            $confirm_password_error = "Passwords do not match";
        }
    } else {
        $confirm_password_error = "Confirm password cannot be blank";
    }

    // Insert data if no error occurs
    if (empty($username_error) && empty($email_error) && empty($password_error) && empty($confirm_password_error)) {

        $insert = "INSERT INTO signup (username, email, password) VALUES (:username, :email, :password)";
        $stmt = $conn->prepare($insert);
        $stmt->bindParam(':username', $username);
        $stmt->bindParam(':email', $email);
        $stmt->bindParam(':password', $password);

        if ($stmt->execute()) {
            header('location: loging.php');
        }
    }
}
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>DataWare</title>
    <link rel="stylesheet" href="signup.css">
</head>
<body>

<div class="box">
    <h2>Sign Up</h2>
    <form action="#" method="post">
        
        <div class="input_box">
            <input type="text" placeholder="Username"  name="username" >
        </div>
        <?php if (!empty($username_error)) : ?>
          <p class="error"><?= $username_error; ?></p>
        <?php endif; ?>


        <div class="input_box">
            <input type="text" placeholder="Email Id" name="email" >
        </div>
        <?php if (!empty($email_error)) : ?>
          <p class="error"><?= $email_error; ?></p>
        <?php endif; ?>


        <div class="input_box">
            <input type="text" placeholder="Create Password" name="password" >
        </div>
        <?php if (!empty($password_error)) : ?>
          <p class="error"><?= $password_error; ?></p>
        <?php endif; ?>


        <div class="input_box">
            <input type="text" placeholder="Confirm Password" name="confirm_password" >
        </div>
        <?php if (!empty($confirm_password_error)) : ?>
          <p class="error"><?= $confirm_password_error; ?></p>
        <?php endif; ?>


        <div class="links">By creating an account you agree to<a href="#">Team & Conditions</a></div>


        <button type="submit">Create Account</button>

        <div class="links">Already have an account? <a href="login.php">Login</a></div>
        <div class="links">Need help? <a href="#">Contact Us</a></div>
    </form>
</div>    

</body>
</html>
