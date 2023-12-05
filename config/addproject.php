<?php
require_once('db.php');

// Enable error reporting
error_reporting(E_ALL);
ini_set('display_errors', 1);

// Check database connection
if (mysqli_connect_errno()) {
    echo "Failed to connect to MySQL: " . mysqli_connect_error();
    exit();
}

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $projectname = $_POST['projectname'];
    $description = $_POST['description'];
    $deadline = $_POST['deadline'];
    $teamId = $_POST['teamId'];

    // Validate teamId
    $validTeamId = validateTeamId($teamId, $con);

    if ($validTeamId) {
        $query = "INSERT INTO projects (project_name, description, deadline, teamId) VALUES ('$projectname', '$description', '$deadline', '$teamId')";

        if (mysqli_query($con, $query)) {
            header("Location: ../landing_po.php");
        } else {
            echo "Error: " . $query . "<br>" . mysqli_error($con);
        }
    } else {
        echo "Invalid Team ID";
    }
}

function validateTeamId($teamId, $con) {
    $result = mysqli_query($con, "SELECT * FROM equipe WHERE id = '$teamId'");
    
    if (!$result) {
        echo "Error: " . mysqli_error($con);
        return false;
    }

    $row = mysqli_fetch_assoc($result);
    return ($row) ? true : false;
}
?>
