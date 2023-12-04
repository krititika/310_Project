<?php
include_once "includes/definitions.php";
include_once "includes/DbConnect.php";

$auin = $_POST['uin'];
$afirstName = $_POST['firstname'];
$amiddleinitial = $_POST['middleinitial'];
$alastname = $_POST['lastname'];
$ausername = $_POST['username'];
$apassword = $_POST['password'];
$auserType = $_POST['usertype'];
$aemail = $_POST['email'];
$adiscordName = $_POST['discordname'];


$sql = "INSERT INTO user (UIN, First_Name, M_Initial, Last_Name, Username, Password, User_Type, Email, Discord_Name) 
            VALUES ('$auin', '$afirstName', '$amiddleinitial', '$alastname', '$ausername', '$apassword', '$auserType', '$aemail', '$adiscordName')";
mysqli_query($conn, $sql);


header("Location: admin.php");
?>

