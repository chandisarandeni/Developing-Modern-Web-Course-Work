<?php
// Include the database connection
include 'config.php';

// Enable error reporting for debugging (Optional)
error_reporting(E_ALL);
ini_set('display_errors', 1);

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    // Get input values
    $username = $conn->real_escape_string($_POST['txt_adminUsername']);
    $password = $_POST['txt_adminPassword'];

    // Prepare SQL query to check credentials
    $stmt = $conn->prepare("SELECT adminPassword FROM adminData WHERE adminUsername = ?");
    if (!$stmt) {
        echo "Error in SQL query: " . $conn->error;
        exit();
    }

    $stmt->bind_param("s", $username);
    $stmt->execute();
    $stmt->store_result();

    // If username exists
    if ($stmt->num_rows > 0) {
        $stmt->bind_result($stored_password);
        $stmt->fetch();

        // Directly compare the passwords
        if ($password === $stored_password) {
            // Redirect to the admin dashboard
            header('Location: adminDashboard.html');
            exit();
        } else {
            // Invalid password
            echo "<script>
                alert('Invalid username or password.');
                window.location.href = 'adminlogin.html';
            </script>";
        }
    } else {
        // Invalid username
        echo "<script>
            alert('Invalid username or password.');
            window.location.href = 'adminlogin.html';
        </script>";
    }

    // Close statement
    $stmt->close();
}

// Close connection
$conn->close();
?>
