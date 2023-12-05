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

$sql = "UPDATE College_Student 
        SET UIN = '$suin', Gender = '$sgender', Hispanic_Latino = '$shispaniclatino', 
            Race = '$srace', USCitizen = '$suscitizen', First_Generation = '$sfirstgen', 
            DoB = '$sdob', GPA = '$sgpa', Major = '$smajor', Minor1 = '$sminor1', 
            Minor2 = '$sminor2', Expected_Graduation = '$expgrads', School = '$sschool', 
            Current_Classification = '$sclassification', Student_Type = '$sstudenttype',  
            Phone = '$sphone' 
        WHERE UIN = '$suin'";
mysqli_query($conn, $sql);

header("Location: studentLogin.php");
?>