<?php
    include_once '../includes/DbConnect.php';

    $coursenum = mysqli_real_escape_string($conn,$_POST['dclcoursenum']);

    $sql = "DELETE FROM class_enrollment 
    WHERE CE_Num = '$coursenum'";
    mysqli_query($conn, $sql);

    header("Location: ../Student-ProgramTrack/programtrack.php?signup=success");
?>