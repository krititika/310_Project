<?php
    include_once '../includes/startSession.php';
    include_once "../includes/DbConnect.php";

    $sql = "SELECT * FROM Documentation
    WHERE Doc_Num = " . $_POST["document-id"] . ";";
    
    $result = mysqli_query($conn, $sql);
    $resultCheck = mysqli_num_rows($result);

    if($resultCheck > 0){
        while($row = mysqli_fetch_assoc($result)){
            unlink($row["Link"]);
        }
    }

    $sql = "DELETE FROM Documentation
    WHERE Doc_Num = " . $_POST["document-id"] . ";";
    
    $result = mysqli_query($conn, $sql);

    $keyName = "deletedDocument";
    if($result){
        $_SESSION[$keyName] = true;
    }
    else{
        $_SESSION[$keyName] = false;
    }
    header("Location: documentManagement.php");