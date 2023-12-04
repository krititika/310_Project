<?php
    include_once 'DbConnect.php';

    $coursenum = mysqli_real_escape_string($conn,$_POST['eclcoursenum']);
    $classid = mysqli_real_escape_string($conn,$_POST['eclclassid']);
    $status = mysqli_real_escape_string($conn,$_POST['eclstatus']);
    $semester = mysqli_real_escape_string($conn,$_POST['eclsemester']);
    $year = mysqli_real_escape_string($conn,$_POST['eclyear']);

    $sql = "UPDATE class_enrollment 
    SET UIN = '$suin', Class_ID = '$classid', Status = '$status',
    Semester = '$semester', Year = '$year'
    WHERE CE_Num = '$coursenum'";
    mysqli_query($conn, $sql);

    header("Location: ../programtrack.php?signup=success");
?>