<?php
// Include the database connection
include('config.php');

// Function to generate the next lecturer ID
function generateLecturerID($conn) {
    $sql = "SELECT lecturerID FROM Lecturer ORDER BY lecturerID DESC LIMIT 1";
    $result = $conn->query($sql);
    
    if ($result->num_rows > 0) {
        // Fetch the last lecturer ID
        $row = $result->fetch_assoc();
        $lastLecturerID = $row['lecturerID'];
        
        // Extract the number from the last ID (assuming the format is L001, L002, etc.)
        $number = substr($lastLecturerID, 1);
        $nextNumber = str_pad($number + 1, 3, '0', STR_PAD_LEFT);
        
        // Generate the new ID
        return 'L' . $nextNumber;
    } else {
        // If no lecturers are in the database, start from L001
        return 'L001';
    }
}

// Check if the form is submitted
if (isset($_POST['btn_RegisterLecturer'])) {
    $lecturerName = $_POST['txt_lecturerName'];
    $lecturerGender = $_POST['txt_lecturerGender'];
    $lecturerEmail = $_POST['txt_lecturerEmail'];
    $lecturerContact = $_POST['txt_lecturerContact'];
    $lecturerCourse = $_POST['txt_lecturerCourse'];
    $lecturerPassword = $_POST['txt_lecturerPassword'];

    // Generate the new lecturer ID
    $lecturerID = generateLecturerID($conn);

    // SQL query to insert new lecturer
    $sql = "INSERT INTO Lecturer (lecturerID, lecturerName, lecturerGender, lecturerEmail, lecturerContact, lecturerCourse, lecturerPassword)
            VALUES ('$lecturerID', '$lecturerName', '$lecturerGender', '$lecturerEmail', '$lecturerContact', '$lecturerCourse', '$lecturerPassword')";

    if ($conn->query($sql) === TRUE) {
        echo "<script>alert('Lecturer registered successfully');</script>";
        header('Location: lecturer.php');
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}
?>

