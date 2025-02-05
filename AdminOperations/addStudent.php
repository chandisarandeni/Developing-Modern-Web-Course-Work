<?php
include('config.php');

function generateStudentID($conn) {
    $query = "SELECT studentID FROM Student ORDER BY studentID DESC LIMIT 1";
    $result = $conn->query($query);
    
    if ($result->num_rows > 0) {
        $row = $result->fetch_assoc();
        $lastID = intval(substr($row['studentID'], 1)); 
        $newID = "S" . str_pad($lastID + 1, 3, '0', STR_PAD_LEFT);
    } else {
        $newID = "S001";
    }
    return $newID;
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $studentID = generateStudentID($conn);
    $name = $_POST['txt_studentName'];
    $gender = $_POST['txt_studentGender'];
    $email = $_POST['txt_studentEmail'];
    $registerDate = $_POST['txt_studentRegisterDate'];
    $address = $_POST['txt_studentAddress'];
    $telephone = $_POST['txt_studentTelephone'];
    $password = $_POST['txt_studentPassword'];

    $sql = "INSERT INTO Student (studentID, studentName, studentGender, studentEmail, registrationDate, studentAddress, studentTelephone, studentPassword)
            VALUES ('$studentID', '$name', '$gender', '$email', '$registerDate', '$address', '$telephone', '$password')";

    if ($conn->query($sql) === TRUE) {
        echo "<script>alert('Student added successfully');</script>";
        header("Location: student.php");
        exit();
    } else {
        echo "Error: " . $conn->error;
    }
}

$conn->close();
?>
