<?php
    // startup a new session or resume one
    session_start();

    // keep different settings in a separate DbParams.php file
    // this way we don't all have to have the same settings
    if (file_exists('includes/DbParams.php')) {
        include_once 'includes/DbParams.php';
    } else {
        echo "DbParams.php is missing.";
    }

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
