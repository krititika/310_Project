<?php
    include_once "includes/definitions.php";
    include_once "includes/DbConnect.php";
    
    $id = $_POST['dUIN'];

    $sql = "DELETE FROM College_Student 
    WHERE UIN = '$id'";
    mysqli_query($conn, $sql);

    header("Location: student.php");
?>