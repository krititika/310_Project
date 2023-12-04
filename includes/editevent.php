<?php
    include_once 'DbConnect.php';

    $id = mysqli_real_escape_string($conn,$_POST['eeventID']);
    $uin = mysqli_real_escape_string($conn,$_POST['euin']);
    $program = mysqli_real_escape_string($conn,$_POST['eprogramnum']);
    $startd = mysqli_real_escape_string($conn,$_POST['estartdate']);
    $endd = mysqli_real_escape_string($conn,$_POST['eenddate']);
    $startt = mysqli_real_escape_string($conn,$_POST['estarttime']);
    $endt = mysqli_real_escape_string($conn,$_POST['eendtime']);
    $loc = mysqli_real_escape_string($conn,$_POST['elocation']);
    $type = mysqli_real_escape_string($conn,$_POST['eeventtype']);

    $sql = "UPDATE event 
    SET UIN = '$uin', Program_Num = '$program', Start_Date = '$startd',
    Time_Start = '$startt', Location = '$loc', End_Date = '$endd', 
    Time_End = '$endt', Event_Type = '$type' 
    WHERE Event_ID = '$id'";
    mysqli_query($conn, $sql);

    header("Location: ../events.php?signup=success");
?>