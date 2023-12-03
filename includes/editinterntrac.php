<?php
    include_once 'DbConnect.php';

    $ianum = $_POST['eiinternappnum'];
    $uin = $_POST['eiuin'];
    $internid = $_POST['eiinternid'];
    $status = $_POST['eistatus'];
    $year = $_POST['eiyear'];

    $sql = "UPDATE intern_app 
    SET UIN = '$uin', Intern_ID = '$internid', Status = '$status',
    Year = '$year'
    WHERE IA_Num = '$ianum'";
    mysqli_query($conn, $sql);

    header("Location: ../programtrack.php?signup=success");
?>