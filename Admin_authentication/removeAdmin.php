<?php
    include_once '.../include/DbConnect.php';
    
    $id = $_POST['dUIN'];

    $sql = "DELETE FROM user 
    WHERE UIN = '$id'";
    mysqli_query($conn, $sql);

    header("Location: Admin_authentication/admin.php");
?>