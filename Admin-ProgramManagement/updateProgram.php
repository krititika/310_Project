<?php
    include_once '../includes/startSession.php';
    include_once "../includes/DbConnect.php";

    $sql =
    "UPDATE Programs
    SET Name = \"" . $_POST["name"] . "\", Description = \"" . $_POST["description"] . "\"
    WHERE Program_Num = " . $_POST["program-id"] . ";";

    $result = mysqli_query($conn, $sql);

    $keyName = "updatedProgram";
    if($result){
        $_SESSION[$keyName] = true;
    }
    else{
        $_SESSION[$keyName] = false;
    }
    header("Location: programInfo.php");