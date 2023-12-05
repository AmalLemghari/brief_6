<?php
require_once('config/db.php');

if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['projectName'])) {
    // Fetch the project name from the form
    $projectName = $_POST['projectName'];

    // Fetch the new project name from the form
    // For example, let's assume you have a form field named 'newProjectName'
    $newProjectName = mysqli_real_escape_string($con, $_POST['newProjectName']);

    // Perform the modification query
    $update_query = "UPDATE projects SET project_name = '$newProjectName' WHERE project_name = '$projectName'";
    mysqli_query($con, $update_query);

    // Redirect back to the page after modification
    header('Location: landing_po.php');
    exit();
} else {
    // Handle the case when the form is not submitted properly
    // You may want to display an error message or redirect to an error page
}
?>
