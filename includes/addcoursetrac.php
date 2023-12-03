<?php
    include_once 'DbConnect.php';

    $uin = $_POST['acluin'];
    $classid = $_POST['aclclassid'];
    $status = $_POST['aclstatus'];
    $semester = $_POST['aclsemester'];
    $year = $_POST['aclyear'];

    $sql = "INSERT INTO class_enrollment (UIN, Class_ID, Status, Semester,
    Year) VALUES ('$uin','$classid','$status','$semester','$year')";
    mysqli_query($conn, $sql);

    header("Location: ../programtrack.php?signup=success");
?>