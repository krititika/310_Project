<?php
    include_once "includes/DbConnect.php";
    
    $id = $_POST['dUIN'];

    $sql = "DELETE FROM College_Student 
    WHERE UIN = ".$_SESSION["UIN"].";";
    mysqli_query($conn, $sql);

    header("Location: main.php");
?>