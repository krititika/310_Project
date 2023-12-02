<?php
    include_once 'DbConnect.php';

    $uin = $_POST['auin'];
    $program = $_POST['aprogramnum'];
    $startd = $_POST['astartdate'];
    $endd = $_POST['aenddate'];
    $startt = $_POST['astarttime'];
    $endt = $_POST['aendtime'];
    $loc = $_POST['alocation'];
    $type = $_POST['aeventtype'];

    $sql = "INSERT INTO event (UIN, Program_Num, Start_Date, Time_Start,
     Location, End_Date, Time_end, Event_Type) VALUES ('$uin','$program',
     '$startd','$startt','$loc','$endd','$endt','$type')";
    mysqli_query($conn, $sql);

    header("Location: ../events.php?signup=success");
?>