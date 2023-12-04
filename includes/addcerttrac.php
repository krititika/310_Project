<?php
    include_once 'DbConnect.php';

    $certid = mysqli_real_escape_string($conn,$_POST['accertid']);
    $program = mysqli_real_escape_string($conn,$_POST['acprognum']);
    $status = mysqli_real_escape_string($conn,$_POST['acstatus']);
    $trainingstatus = mysqli_real_escape_string($conn,$_POST['actrainingstatus']);
    $semester = mysqli_real_escape_string($conn,$_POST['acsemester']);
    $year = mysqli_real_escape_string($conn,$_POST['acyear']);

    $sql = "INSERT INTO cert_enrollment (UIN, Cert_ID, Program_Num,
     Status,Training_Status, Semester, Year) VALUES ('$suin','$certid',
     '$program','$status','$trainingstatus','$semester','$year')";
    mysqli_query($conn, $sql);

    header("Location: ../programtrack.php?signup=success");
?>