<?php
    include_once 'DbConnect.php';

    $id = $_POST['dUIN'];

    $sql = "DELETE FROM user 
    WHERE UIN = '$id'";
    mysqli_query($conn, $sql);

    header("Location: ../registration.php?signup=success");
?>