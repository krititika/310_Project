<?php
    include_once 'DbConnect.php';

    $id = $_POST['eeventID'];
    $uin = $_POST['euin'];
    $program = $_POST['eprogramnum'];
    $startd = $_POST['estartdate'];
    $endd = $_POST['eenddate'];
    $startt = $_POST['estarttime'];
    $endt = $_POST['eendtime'];
    $loc = $_POST['elocation'];
    $type = $_POST['eeventtype'];

    $sql = "UPDATE event 
    SET UIN = '$uin', Program_Num = '$program', Start_Date = '$startd',
    Time_Start = '$startt', Location = '$loc', End_Date = '$endd', 
    Time_End = '$endt', Event_Type = '$type' 
    WHERE Event_ID = '$id'";
    mysqli_query($conn, $sql);

    header("Location: ../events.php?signup=success");
?>