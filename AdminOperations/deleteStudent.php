<?php
// Include the database connection settings
include('config.php');

// Check if the student ID is passed in the URL
if (isset($_GET['id']) && !empty($_GET['id'])) {
    // Get the student ID
    $studentID = $_GET['id'];

    // Check if the user confirmed the deletion
    if (isset($_GET['confirm']) && $_GET['confirm'] == 'yes') {
        // Prepare and execute the delete query
        $sql = "DELETE FROM Student WHERE studentID = '$studentID'";

        if ($conn->query($sql) === TRUE) {
            header("Location: student.php"); // Modify this to your list page
            exit();
        } else {
            // Display error if deletion fails
            echo "Error: " . $conn->error;
        }
    } else {
        // Display a confirmation message
        echo "<script>
            var confirmDelete = confirm('Are you sure you want to delete this student?');
            if (confirmDelete) {
                window.location.href = 'deleteStudent.php?id=$studentID&confirm=yes';
            } else {
                window.location.href = 'student.php'; // Modify this to your list page
            }
        </script>";
    }
} else {
    // Display an error message if no ID is found
    echo "No student ID provided.";
}

// Close the database connection
$conn->close();
?>
