<?php   
    // keep different settings in a separate DbParams.php file
    // this way we don't all have to have the same settings

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

