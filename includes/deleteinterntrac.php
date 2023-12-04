<?php
    include_once 'DbConnect.php';

    $ianum = mysqli_real_escape_string($conn,$_POST['diinternappnum']);

    $sql = "DELETE FROM intern_app 
    WHERE IA_Num = '$ianum'";
    mysqli_query($conn, $sql);

    header("Location: ../programtrack.php?signup=success");
?>