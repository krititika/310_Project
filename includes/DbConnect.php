<?php
// startup a new session or resume one
session_start();

$servername = "localhost";
$username = "root";
$password = "";
$database = "id21548664_csce310";

// keep different settings in a separate DbParams.php file
// this way we don't all have to have the same settings
if (file_exists('includes/DbParams.php')) {
    include_once 'includes/DbParams.php';
} else {
    echo "DbParams.php is missing.";
}

// Create connection
$conn = mysqli_connect($servername, $username, $password, $database);

// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

echo "Connected successfully<br>";
