<?php
    include_once 'includes/startSession.php';
    include_once "includes/DbConnect.php";

    $sql = "DELETE FROM Programs
    WHERE Program_Num = " . $_POST["program-id"];

    $result = mysqli_query($conn, $sql);

    $keyName = "deletedProgram";
    if($result){
        $_SESSION[$keyName] = true;
    }
    else{
        $_SESSION[$keyName] = false;
    }
    header("Location: programInfo.php");