<?php
    include_once 'DbConnect.php';

    $id = $_POST['deventID'];

    $sql = "DELETE FROM event 
    WHERE Event_ID = '$id'";
    mysqli_query($conn, $sql);

    header("Location: ../events.php?signup=success");
?>