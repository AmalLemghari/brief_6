<?php
require_once('config/db.php');

if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['memberid'])) {
    // Fetch the email from the form
    $memberid = $_POST['memberid'];

    // Perform the deletion query
    $delete_query = "DELETE FROM users WHERE email = '$memberid'";
    mysqli_query($con, $delete_query);

    // Redirect back to the page after deletion
    header('Location: landing_sm.php');
    exit();
}
?>
