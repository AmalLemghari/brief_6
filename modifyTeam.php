<?php
require_once('config/db.php');

if ($_SERVER['REQUEST_METHOD'] === 'POST' &&  isset($_POST['newteamId']) && isset($_POST['teamId']) ) {
    // Fetch the original teamId and new teamId from the form
    $teamId = mysqli_real_escape_string($con, $_POST['teamId']);
    $newteamId = mysqli_real_escape_string($con, $_POST['newteamId']);

    // Perform the modification query
    $update_query = "UPDATE users SET teamId = '$newteamId' WHERE teamId = '$teamId'";
    mysqli_query($con, $update_query);

    // Redirect back to the page after modification
    header('Location: landing_sm.php');
    exit();
}
?>


