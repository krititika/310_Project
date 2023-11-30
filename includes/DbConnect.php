<?php
    $servername = "localhost";
    $username = "root";
    $password = "";
    $database = "id21548664_csce310";

    // Create connection
    $conn = mysqli_connect($servername, $username, $password, $database);

    // Check connection
    if (!$conn) {
        die("Connection failed: " . mysqli_connect_error());
    }

    echo "Connected successfully<br>";
