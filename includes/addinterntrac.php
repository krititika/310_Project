<?php
    include_once 'DbConnect.php';

    $uin = $_POST['aiuin'];
    $internid = $_POST['aiinternid'];
    $status = $_POST['aistatus'];
    $year = $_POST['aiyear'];

    $sql = "INSERT INTO intern_app (UIN, Intern_ID, Status, Year) 
    VALUES ('$uin','$internid','$status','$year')";
    mysqli_query($conn, $sql);

    header("Location: ../programtrack.php?signup=success");
?>