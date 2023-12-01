<?php
include_once 'DbConnect.php';

$auin = $_POST['uin'];
$afirstName = $_POST['firstname'];
$amiddleinitial = $_POST['middleinitial'];
$alastname = $_POST['lastname'];
$ausername = $_POST['username'];
$apassword = $_POST['password'];
$auserType = $_POST['usertype'];
$aemail = $_POST['email'];
$adiscordName = $_POST['discordname'];

$sql = "UPDATE user 
SET UIN = '$auin', First_Name = '$afirstName', M_Initial = '$amiddleinitial',
Last_Name = '$alastname', Username = '$ausername', Password = '$apassword', 
User_Type = '$auserType', Email = '$aemail' , Discord_Name = '$adiscordName' 
WHERE UIN = '$auin'";
mysqli_query($conn, $sql);

header("Location: ../registration.php?signup=success");
?>