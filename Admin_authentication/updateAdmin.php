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

// Initialize an array to store the fields to be updated
$fieldsToUpdate = array();

// Check each input field and add it to the array if it's not empty
if (!empty($afirstName)) $fieldsToUpdate[] = "First_Name = '$afirstName'";
if (!empty($amiddleinitial)) $fieldsToUpdate[] = "M_Initial = '$amiddleinitial'";
if (!empty($alastname)) $fieldsToUpdate[] = "Last_Name = '$alastname'";
if (!empty($ausername)) $fieldsToUpdate[] = "Username = '$ausername'";
if (!empty($apassword)) $fieldsToUpdate[] = "Password = '$apassword'";
if (!empty($auserType)) $fieldsToUpdate[] = "User_Type = '$auserType'";
if (!empty($aemail)) $fieldsToUpdate[] = "Email = '$aemail'";
if (!empty($adiscordName)) $fieldsToUpdate[] = "Discord_Name = '$adiscordName'";

// Check if there are fields to update
if (!empty($fieldsToUpdate)) {
    // Build the SQL query with the dynamically generated SET clause
    $setClause = implode(', ', $fieldsToUpdate);
    $sql = "UPDATE user SET $setClause WHERE UIN = '$auin'";
    mysqli_query($conn, $sql);
}

header("Location: AdminManage.php");
?>