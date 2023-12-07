<?php
    include_once '../includes/DbConnect.php';

    $id = mysqli_real_escape_string($conn,$_POST['deventID']);

    $sql = "DELETE FROM event 
    WHERE Event_ID = '$id'";
    mysqli_query($conn, $sql);

    header("Location: ../Admin-Events/events.php?signup=success");
?>