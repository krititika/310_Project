<?php
    include_once 'DbConnect.php';

    $coursenum = $_POST['eclcoursenum'];
    $uin = $_POST['ecluin'];
    $classid = $_POST['eclclassid'];
    $status = $_POST['eclstatus'];
    $semester = $_POST['eclsemester'];
    $year = $_POST['eclyear'];

    $sql = "UPDATE class_enrollment 
    SET UIN = '$uin', Class_ID = '$classid', Status = '$status',
    Semester = '$semester', Year = '$year'
    WHERE CE_Num = '$coursenum'";
    mysqli_query($conn, $sql);

    header("Location: ../programtrack.php?signup=success");
?>