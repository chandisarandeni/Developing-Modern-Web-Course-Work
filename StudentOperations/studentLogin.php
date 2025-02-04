<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $username = $_POST['txt_Username'];
    $password = $_POST['txt_Password'];

    if ($username == './admin') {
        header('Location: /AdminOperations/adminlogin.html');
        exit();
    } else {
        // Handle invalid login
        echo '<script>alert("Invalid login credentials");</script>';
        header('Location: /StudentOperations/studentLogin.html');
    }
}
?>