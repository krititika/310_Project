<?php
        include_once "../includes/DbConnect.php";
    
    $id = $_POST['dUIN'];

    $sql = "DELETE FROM user 
    WHERE UIN = '$id'";
    mysqli_query($conn, $sql);

    header("Location: AdminManage.php");
?>