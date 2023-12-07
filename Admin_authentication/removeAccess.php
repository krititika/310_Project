<?php
include_once "../includes/DbConnect.php";

$id = $_POST['dUIN'];

$sql = "UPDATE user 
        SET Username = NULL, Password = NULL 
        WHERE UIN = '$id'";
mysqli_query($conn, $sql);

header("Location: AdminManage.php");
?>