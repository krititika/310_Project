<?php
    include_once 'DbConnect.php';

    $certnum = $_POST['eccertenrollnum'];
    $uin = $_POST['ecuin'];
    $certid = $_POST['eccertid'];
    $program = $_POST['ecprognum'];
    $status = $_POST['ecstatus'];
    $trainingstatus = $_POST['ectrainingstatus'];
    $semester = $_POST['ecsemester'];
    $year = $_POST['ecyear'];

    $sql = "UPDATE cert_enrollment 
    SET UIN = '$uin', Cert_ID = '$certid', Program_Num = '$program',
    Status = '$status', Training_Status = '$trainingstatus', 
    Semester = '$semester', Year = '$year'
    WHERE CertE_Num = '$certnum'";
    mysqli_query($conn, $sql);

    header("Location: ../programtrack.php?signup=success");
?>