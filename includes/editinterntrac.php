<?php
    include_once 'DbConnect.php';

    $ianum = mysqli_real_escape_string($conn,$_POST['eiinternappnum']);
    $internid = mysqli_real_escape_string($conn,$_POST['eiinternid']);
    $status = mysqli_real_escape_string($conn,$_POST['eistatus']);
    $year = mysqli_real_escape_string($conn,$_POST['eiyear']);

    $sql = "UPDATE intern_app 
    SET UIN = '$suin', Intern_ID = '$internid', Status = '$status',
    Year = '$year'
    WHERE IA_Num = '$ianum'";
    mysqli_query($conn, $sql);

    header("Location: ../programtrack.php?signup=success");
?>