<?php
    include_once 'DbConnect.php';

    $coursenum = $_POST['dclcoursenum'];

    $sql = "DELETE FROM class_enrollment 
    WHERE CE_Num = '$coursenum'";
    mysqli_query($conn, $sql);

    header("Location: ../programtrack.php?signup=success");
?>