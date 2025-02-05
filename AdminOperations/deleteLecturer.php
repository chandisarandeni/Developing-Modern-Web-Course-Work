<?php
// Include the database connection settings
include('config.php');

// Check if the lecturer ID is passed in the URL
if (isset($_GET['id']) && !empty($_GET['id'])) {
    // Get the lecturer ID
    $lecturerID = $_GET['id'];

    // Prepare and execute the delete query
    $sql = "DELETE FROM Lecturer WHERE lecturerID = '$lecturerID'";

    if ($conn->query($sql) === TRUE) {
        // Redirect to the lecturer list page after successful deletion
        header("Location: lecturer.php"); // Modify this to your list page
        exit();
    } else {
        // Display error if deletion fails
        echo "Error: " . $conn->error;
    }
} else {
    // Display an error message if no ID is found
    echo "No lecturer ID provided.";
}

// Close the database connection
$conn->close();
?>
