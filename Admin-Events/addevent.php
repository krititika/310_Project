<?php
    include_once '../includes/DbConnect.php';

    $uin = mysqli_real_escape_string($conn,$_POST['auin']);
    $program = mysqli_real_escape_string($conn,$_POST['aprogramnum']);
    $startd = mysqli_real_escape_string($conn,$_POST['astartdate']);
    $endd = mysqli_real_escape_string($conn,$_POST['aenddate']);
    $startt = mysqli_real_escape_string($conn,$_POST['astarttime']);
    $endt = mysqli_real_escape_string($conn,$_POST['aendtime']);
    $loc = mysqli_real_escape_string($conn,$_POST['alocation']);
    $type = mysqli_real_escape_string($conn,$_POST['aeventtype']);

    $sql = "INSERT INTO event (UIN, Program_Num, Start_Date, Time_Start,
     Location, End_Date, Time_end, Event_Type) VALUES ('$uin','$program',
     '$startd','$startt','$loc','$endd','$endt','$type')";
    mysqli_query($conn, $sql);

    header("Location: ../Admin-Events/events.php?signup=success");
?>