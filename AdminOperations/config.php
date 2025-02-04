<?php
$host = 'localhost';
$db = 'if0_38162167_sarasavidb';
$user = 'root';
$pass = '';
$port = 3306;

$conn = new mysqli($host, $user, $pass, $db, $port);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>