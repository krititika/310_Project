<?php
 include_once "../includes/DbConnect.php";
 
 $auin = mysqli_real_escape_string($conn, $_POST['uin']);
 $afirstName = mysqli_real_escape_string($conn, $_POST['firstname']);
 $amiddleinitial = mysqli_real_escape_string($conn, $_POST['middleinitial']);
 $alastname = mysqli_real_escape_string($conn, $_POST['lastname']);
 $ausername = mysqli_real_escape_string($conn, $_POST['username']);
 $apassword = mysqli_real_escape_string($conn, $_POST['password']);
 $auserType = mysqli_real_escape_string($conn, $_POST['usertype']);
 $aemail = mysqli_real_escape_string($conn, $_POST['email']);
 $adiscordName = mysqli_real_escape_string($conn, $_POST['discordname']);


$sql = "INSERT INTO user (UIN, First_Name, M_Initial, Last_Name, Username, Password, User_Type, Email, Discord_Name) 
            VALUES ('$auin', '$afirstName', '$amiddleinitial', '$alastname', '$ausername', '$apassword', '$auserType', '$aemail', '$adiscordName')";
mysqli_query($conn, $sql);


header("Location: AdminManage.php");
?>

