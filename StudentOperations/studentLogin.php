<?php
session_start();
include 'config.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $username = trim($_POST['txt_Username']);
    $password = trim($_POST['txt_Password']);

    if ($username == './admin') {
        header('Location: /AdminOperations/adminlogin.html');
        exit();
    }

    $sql = "SELECT studentID, studentPassword FROM Student WHERE studentEmail = ?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("s", $username);
    $stmt->execute();
    $result = $stmt->get_result();

    if ($row = $result->fetch_assoc()) {
        if ($password == $row['studentPassword']) { // Direct password comparison
            $_SESSION['studentEmail'] = $username;
            header('Location: /StudentOperations/dashboard.php');
            exit();
        } else {
            echo '<script>alert("Invalid email or password"); window.location.href="/StudentOperations/studentLogin.html";</script>';
        }
    } else {
        echo '<script>alert("Invalid email or password"); window.location.href="/StudentOperations/studentLogin.html";</script>';
    }

    $stmt->close();
    $conn->close();
}
?>
