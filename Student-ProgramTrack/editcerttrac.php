<?php
    include_once "../includes/startSession.php";
    include_once '../includes/DbConnect.php';

    $certnum = mysqli_real_escape_string($conn,$_POST['eccertenrollnum']);
    $certid = mysqli_real_escape_string($conn,$_POST['eccertid']);
    $program = mysqli_real_escape_string($conn,$_POST['ecprognum']);
    $status = mysqli_real_escape_string($conn,$_POST['ecstatus']);
    $trainingstatus = mysqli_real_escape_string($conn,$_POST['ectrainingstatus']);
    $semester = mysqli_real_escape_string($conn,$_POST['ecsemester']);
    $year = mysqli_real_escape_string($conn,$_POST['ecyear']);

    $sql = "UPDATE cert_enrollment 
    SET Cert_ID = '$certid', Program_Num = '$program',
    Status = '$status', Training_Status = '$trainingstatus', 
    Semester = '$semester', Year = '$year'
    WHERE CertE_Num = '$certnum'";
    mysqli_query($conn, $sql);

    header("Location: ../Student-ProgramTrack/programtrack.php?signup=success");
?>