<?php
    include_once 'DbConnect.php';

    $uin = mysqli_real_escape_string($conn,$_POST['acluin']);
    $classid = mysqli_real_escape_string($conn,$_POST['aclclassid']);
    $status = mysqli_real_escape_string($conn,$_POST['aclstatus']);
    $semester = mysqli_real_escape_string($conn,$_POST['aclsemester']);
    $year = mysqli_real_escape_string($conn,$_POST['aclyear']);

    $sql = "INSERT INTO class_enrollment (UIN, Class_ID, Status, Semester,
    Year) VALUES ('$uin','$classid','$status','$semester','$year')";
    mysqli_query($conn, $sql);

    header("Location: ../programtrack.php?signup=success");
?>