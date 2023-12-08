<?php
include_once '../includes/DbConnect.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php

    $sql = "DELETE from track WHERE Tracking_Num=" . $_POST["tracking_num"] . ";";

    $result = mysqli_query($conn, $sql);

    if ($result) {
        header('Location: programProgress.php');
    } else {
        echo "Something went wrong.";
    }

    ?>
</body>
</html>
