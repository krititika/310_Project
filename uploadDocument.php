<?php
    include_once 'includes/startSession.php';
    include_once 'includes/DbConnect.php';

    $tmpName = $_FILES['file']['tmp_name'];

    $directory = "documentUploads/";
    $username = $_SESSION["username"];
    $docType = $_POST["doc_type"];
    $fileName = $_FILES['file']['name'];
    $fullDirectoryPath = $directory . $username . "_" . $docType . "_" . $fileName;


    $sql = "INSERT INTO Documentation (App_Num, Link, Doc_Type)
    VALUES (" . $_POST['app_num'] . ", \"" . $fullDirectoryPath . "\", \"" . $docType . "\");";

    $result = mysqli_query($conn, $sql);

    move_uploaded_file($tmpName, $fullDirectoryPath);
    
    $keyName = "uploadedDocument";
    if($result){
        $_SESSION[$keyName] = true;
    }
    else{
        $_SESSION[$keyName] = false;
    }
    header("Location: documentUpload.php");
