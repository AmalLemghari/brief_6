<?php
require_once('config/db.php');

if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['projectName'])) {

    // Fetch the project name from the form
    $projectName = $_POST['projectName'];

    // Perform the deletion query
    $delete_query = "DELETE FROM projects WHERE project_name = '$projectName'";
    mysqli_query($con, $delete_query);

    // Redirect back to the page after deletion
    header('Location: landing_po.php');
    exit();
} else {
}
?>
