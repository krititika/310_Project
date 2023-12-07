<?php
    include_once "../includes/startSession.php";
    include_once '../includes/DbConnect.php';

    $coursenum = mysqli_real_escape_string($conn,$_POST['eclcoursenum']);
    $classid = mysqli_real_escape_string($conn,$_POST['eclclassid']);
    $status = mysqli_real_escape_string($conn,$_POST['eclstatus']);
    $semester = mysqli_real_escape_string($conn,$_POST['eclsemester']);
    $year = mysqli_real_escape_string($conn,$_POST['eclyear']);

    $sql = "UPDATE class_enrollment 
    SET Class_ID = '$classid', Status = '$status',
    Semester = '$semester', Year = '$year'
    WHERE CE_Num = '$coursenum'";
    mysqli_query($conn, $sql);

    header("Location: ../Student-ProgramTrack/programtrack.php?signup=success");
?>