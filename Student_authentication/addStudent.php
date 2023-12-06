<?php
 include_once "../includes/DbConnect.php";


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

$sql = "INSERT INTO College_Student (UIN, Gender, Hispanic_Latino, Race, USCitizen, First_Generation, DoB, GPA, Major, Minor1, Minor2, Expected_Graduation, School, Current_Classification, Student_Type, Phone) 
            VALUES ('$suin', '$sgender', '$shispaniclatino', '$srace', '$suscitizen', '$sfirstgen', '$sdob', '$sgpa', '$smajor', '$sminor1', '$sminor2', '$expgrads', '$sschool', '$sclassification', '$sstudenttype', '$sphone')";
mysqli_query($conn, $sql);

header("Location: ../main.php");
?>