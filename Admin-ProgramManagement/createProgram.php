<?php
    include_once '../includes/startSession.php';
    include_once "../includes/DbConnect.php";

    $sql = "INSERT INTO Programs (Name, Description) 
    VALUES (\"" . $_POST["name"] . "\", \"" . $_POST["description"] . "\");";

    $result = mysqli_query($conn, $sql);

    $keyName = "createdProgram";
    if($result){
        $_SESSION[$keyName] = true;
    }
    else{
        $_SESSION[$keyName] = false;
    }
    header("Location: programInfo.php");