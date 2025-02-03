<?php
    $HostName = "sql102.infinityfree.com";
    $mySQLUsername = "if0_38162167";
    $mySQLPassword = "GJvLZGRibuiE";
    $databaseName = "if0_38162167_sarasavidb";
    $port = 3306;

    // Create connection
    $conn = new mysqli($HostName, $mySQLUsername, $mySQLPassword, $databaseName, $port);

    // Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }
    echo "Connected successfully";
?>