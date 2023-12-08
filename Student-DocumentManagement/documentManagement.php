<?php
    include_once '../includes/startSession.php';
    include_once "../includes/DbConnect.php";
?>
<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]>      <html class="no-js"> <!--<![endif]-->
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title></title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="../style.css">
    </head>
    <body>
        <!--[if lt IE 7]>
            <p class="browsehappy">You are using an <strong>outdated</strong> browser. Please <a href="#">upgrade your browser</a> to improve your experience.</p>
        <![endif]-->
        <h1>Document Upload and Management</h1>
        <div>
            <form action="uploadDocument.php" class="float-child" method="post" enctype="multipart/form-data">
                Upload Document<br>
                File: <input type="file" name="file" accept=".pdf" required><br>
                Application id: <select type="number" name="app_num" required>
                    <?php
                        $sql = "SELECT * FROM Application
                        WHERE UIN = ".$_SESSION["UIN"].";";
                        $result = mysqli_query($conn, $sql);
                        while($row = mysqli_fetch_assoc($result)){
                            echo "<option value=".$row["App_Num"].">".$row["App_Num"]."</option>";
                        }
                    ?>
                </select>
                Document Type: <select name="doc_type">
                    <option value="resume">Resume</option>
                    <option value="cover_letter">Cover Letter</option>
                    <option value="letter_of_rec">Letter Of Recomendation</option>
                    <option value="school_transcript">School Transcript</option>
                </select><br>
                <input type="submit"><br>
                <?php
                    $keyName = "uploadedDocument";
                    if(isset($_SESSION[$keyName])){
                        if($_SESSION[$keyName]){
                            echo "uploaded Document";
                        }
                        else{
                            echo "failed to upload Document";
                        }
                        unset($_SESSION[$keyName]);
                    }
                ?>
            </form>
            <form action="deleteDocument.php" class="float-child" method="post">
                Delete Document<br>
                Document id: <select type="number" name="document-id" required>
                <option value=""></option>
                    <?php
                        $sql = "SELECT * FROM Application
                        WHERE UIN = ".$_SESSION["UIN"].";";
                        $result = mysqli_query($conn, $sql);
                        while($row = mysqli_fetch_assoc($result)){
                            $sql = "SELECT * FROM Documentation
                            WHERE App_Num = ".$row["App_Num"].";";
                            $resultDoc = mysqli_query($conn, $sql);
                            while($rowDoc = mysqli_fetch_assoc($resultDoc)){
                                echo "<option value=".$rowDoc["Doc_Num"].">".$rowDoc["Doc_Num"]."</option>";
                            }
                        }
                    ?>
                </select><br>

                <input type="submit"><br>
                <?php
                    $keyName = "deletedDocument";
                    if(isset($_SESSION[$keyName])){
                        if($_SESSION[$keyName]){
                            echo "deleted Document";
                        }
                        else{
                            echo "failed to delete Document";
                        }
                        unset($_SESSION[$keyName]);
                    }
                ?>
            </form>
            <form action="replaceDocument.php" class="float-child" method="post" enctype="multipart/form-data">
                Replace Document<br>
                File: <input type="file" name="file" accept=".pdf" required><br>
                Document id: <select type="number" name="document-id" required>
                <option value=""></option>
                    <?php
                        $sql = "SELECT * FROM Application
                        WHERE UIN = ".$_SESSION["UIN"].";";
                        $result = mysqli_query($conn, $sql);
                        while($row = mysqli_fetch_assoc($result)){
                            $sql = "SELECT * FROM Documentation
                            WHERE App_Num = ".$row["App_Num"].";";
                            $resultDoc = mysqli_query($conn, $sql);
                            while($rowDoc = mysqli_fetch_assoc($resultDoc)){
                                echo "<option value=".$rowDoc["Doc_Num"].">".$rowDoc["Doc_Num"]."</option>";
                            }
                        }
                    ?>
                </select><br>
                <input type="submit"><br>
                <?php
                    $keyName = "replacedDocument";
                    if(isset($_SESSION[$keyName])){
                        if($_SESSION[$keyName]){
                            echo "replaced Document";
                        }
                        else{
                            echo "failed to replace Document";
                        }
                        unset($_SESSION[$keyName]);
                    }
                ?>
        </div>
        <?php
            include_once "displayDocuments.php";
        ?>
    </body>
</html>