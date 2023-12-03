<?php
    include_once 'DbConnect.php';

    $uin = $_POST['acuin'];
    $certid = $_POST['accertid'];
    $program = $_POST['acprognum'];
    $status = $_POST['acstatus'];
    $trainingstatus = $_POST['actrainingstatus'];
    $semester = $_POST['acsemester'];
    $year = $_POST['acyear'];

    $sql = "INSERT INTO cert_enrollment (UIN, Cert_ID, Program_Num,
     Status,Training_Status, Semester, Year) VALUES ('$uin','$certid',
     '$program','$status','$trainingstatus','$semester','$year')";
    mysqli_query($conn, $sql);

    header("Location: ../programtrack.php?signup=success");
?>