<?php
    include_once "../includes/DbConnect.php";
    include_once "../includes/startSession.php";
    
    $id = $_POST['dUIN'];

    $sql = "DELETE FROM College_Student 
    WHERE UIN = ".$_SESSION["UIN"].";";
    mysqli_query($conn, $sql);

    header("Location: StudentManage.php");
?>