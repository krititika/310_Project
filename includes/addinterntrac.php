<?php
    include_once 'DbConnect.php';
    $uin = $_SESSION["UIN"];
    $internid = mysqli_real_escape_string($conn,$_POST['aiinternid']);
    $status = mysqli_real_escape_string($conn,$_POST['aistatus']);
    $year = mysqli_real_escape_string($conn,$_POST['aiyear']);

    $sql = "INSERT INTO intern_app (UIN, Intern_ID, Status, Year) 
    VALUES ('$uin','$internid','$status','$year')";
    mysqli_query($conn, $sql);

    header("Location: ../programtrack.php?signup=success");
?>