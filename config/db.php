<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "data_ware";

// Établir la connexion
$con = mysqli_connect($servername, $username, $password, $dbname);
 if(!$con){
   die("Connection failed: " . mysqli_connect_error());
}
?>