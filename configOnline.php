<?php
$host = 'sql102.infinityfree.com';
$db = 'if0_38162167_sarasavidb';
$user = 'if0_38162167';
$pass = 'GJvLZGRibuiE';
$port = 3306;

$conn = new mysqli($host, $user, $pass, $db, $port);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>