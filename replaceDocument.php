<?php
    include_once 'includes/startSession.php';
    include_once 'includes/DbConnect.php';

    $tmpName = $_FILES['file']['tmp_name'];

    $sql = "SELECT * FROM Documentation
    WHERE Doc_Num = " . $_POST["document-id"] . ";";
    
    $result = mysqli_query($conn, $sql);
    $resultCheck = mysqli_num_rows($result);

    $docType = "";
    if($resultCheck > 0){
        while($row = mysqli_fetch_assoc($result)){
            unlink($row["Link"]);
            $docType = $row["Doc_Type"];
        }
    }
    $directory = "documentUploads/";
    $username = $_SESSION["username"];
    
    $fileName = $_FILES['file']['name'];
    $fullDirectoryPath = $directory . $username . "_" . $docType . "_" . $fileName;


    $sql = "UPDATE Documentation
    SET Link = \"" . $fullDirectoryPath . "\"
    WHERE Doc_Num = " . $_POST["document-id"] . ";";

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
