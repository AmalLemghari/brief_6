<?php
require_once('db.php');

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $firstname = $_POST['firstname'];
    $lastname = $_POST['lastname'];
    $phone = $_POST['phone'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $confirmpassword = $_POST['confirmpassword'];


    // Check if passwords match
    if ($password !== $confirmpassword) {
        $errorMessage = "Passwords do not match.";
    
    } else {
        
        // Insert data into the database with the plain text password
        $query = "INSERT INTO users (firstname, Lastname, phone, email ,password , role) VALUES ('$firstname', '$lastname', '$phone', '$email', '$password' , 'member')";
        if (mysqli_query($con, $query))  {
            $errorMessage = "User registered successfully!";
            header("Location: ../login.php");
        } else {
            $errorMessage = "Error: " . $query . "<br>" . mysqli_error($con);
        }
    }
}
?>
