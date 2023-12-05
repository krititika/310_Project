<?php
include_once "includes/DbConnect.php";

$suin = $_POST['uin'];
$sgender = $_POST['gender'];
$shispaniclatino = $_POST['hispaniclatino'];
$srace = $_POST['race'];
$suscitizen = $_POST['uscitizen'];
$sfirstgen = $_POST['firstgen'];
$sdob = $_POST['dob'];
$sgpa = $_POST['gpa'];
$smajor = $_POST['major'];
$sminor1 = $_POST['minor1'];
$sminor2 = $_POST['minor2'];
$expgrads = $_POST['expgrad'];
$sschool = $_POST['school'];
$sclassification = $_POST['classification'];
$sphone = $_POST['phone'];
$sstudenttype = $_POST['studenttype'];
$susername = $_POST['username'];
$spassword = $_POST['password'];

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

header("Location: main.php");
?>