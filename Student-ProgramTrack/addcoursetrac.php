<?php
    include_once "../includes/startSession.php";
    include_once '../includes/DbConnect.php';

    $uin = $_SESSION["UIN"];
    $classid = mysqli_real_escape_string($conn,$_POST['aclclassid']);
    $status = mysqli_real_escape_string($conn,$_POST['aclstatus']);
    $semester = mysqli_real_escape_string($conn,$_POST['aclsemester']);
    $year = mysqli_real_escape_string($conn,$_POST['aclyear']);

    $sql = "INSERT INTO class_enrollment (UIN, Class_ID, Status, Semester,
    Year) VALUES ('$uin','$classid','$status','$semester','$year')";
    mysqli_query($conn, $sql);

    header("Location: ../Student-ProgramTrack/programtrack.php?signup=success");
?>