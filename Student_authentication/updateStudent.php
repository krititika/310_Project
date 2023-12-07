<?php
include_once "../includes/DbConnect.php";

$suin = mysqli_real_escape_string($conn, $_POST['uin']);
$sgender = mysqli_real_escape_string($conn, $_POST['gender']);
$shispaniclatino = mysqli_real_escape_string($conn, $_POST['hispaniclatino']);
$srace = mysqli_real_escape_string($conn, $_POST['race']);
$suscitizen = mysqli_real_escape_string($conn, $_POST['uscitizen']);
$sfirstgen = mysqli_real_escape_string($conn, $_POST['firstgen']);
$sdob = mysqli_real_escape_string($conn, $_POST['dob']);
$sgpa = mysqli_real_escape_string($conn, $_POST['gpa']);
$smajor = mysqli_real_escape_string($conn, $_POST['major']);
$sminor1 = mysqli_real_escape_string($conn, $_POST['minor1']);
$sminor2 = mysqli_real_escape_string($conn, $_POST['minor2']);
$expgrads = mysqli_real_escape_string($conn, $_POST['expgrad']);
$sschool = mysqli_real_escape_string($conn, $_POST['school']);
$sclassification = mysqli_real_escape_string($conn, $_POST['classification']);
$sphone = mysqli_real_escape_string($conn, $_POST['phone']);
$sstudenttype = mysqli_real_escape_string($conn, $_POST['studenttype']);
$susername = mysqli_real_escape_string($conn, $_POST['username']);
$spassword = mysqli_real_escape_string($conn, $_POST['password']);

// Initialize an array to store the fields to be updated
$fieldsToUpdate = array();

// Check each input field and add it to the array if it's not empty
if (!empty($suin)) $fieldsToUpdate[] = "UIN = '$suin'";
if (!empty($sgender)) $fieldsToUpdate[] = "Gender = '$sgender'";
if (!empty($shispaniclatino)) $fieldsToUpdate[] = "Hispanic_Latino = '$shispaniclatino'";
if (!empty($srace)) $fieldsToUpdate[] = "Race = '$srace'";
if (!empty($suscitizen)) $fieldsToUpdate[] = "USCitizen = '$suscitizen'";
if (!empty($sfirstgen)) $fieldsToUpdate[] = "First_Generation = '$sfirstgen'";
if (!empty($sdob)) $fieldsToUpdate[] = "DoB = '$sdob'";
if (!empty($sgpa)) $fieldsToUpdate[] = "GPA = '$sgpa'";
if (!empty($smajor)) $fieldsToUpdate[] = "Major = '$smajor'";
if (!empty($sminor1)) $fieldsToUpdate[] = "Minor1 = '$sminor1'";
if (!empty($sminor2)) $fieldsToUpdate[] = "Minor2 = '$sminor2'";
if (!empty($expgrads)) $fieldsToUpdate[] = "Expected_Graduation = '$expgrads'";
if (!empty($sschool)) $fieldsToUpdate[] = "School = '$sschool'";
if (!empty($sclassification)) $fieldsToUpdate[] = "Current_Classification = '$sclassification'";
if (!empty($sphone)) $fieldsToUpdate[] = "Phone = '$sphone'";
if (!empty($sstudenttype)) $fieldsToUpdate[] = "Student_Type = '$sstudenttype'";

// Check if there are fields to update
if (!empty($fieldsToUpdate)) {
    // Build the SQL query with the dynamically generated SET clause
    $setClause = implode(', ', $fieldsToUpdate);
    $sql = "UPDATE College_Student SET $setClause WHERE UIN = ".$_SESSION["UIN"].";";
    mysqli_query($conn, $sql);
}
$ssql = "UPDATE User SET Username = '$susername', Password = '$spassword' WHERE UIN = '".$_SESSION["UIN"]."';";
mysqli_query($conn, $ssql);

header("Location: StudentManage.php");
?>