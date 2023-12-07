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

$sql = "INSERT INTO College_Student (UIN, Gender, Hispanic_Latino, Race, USCitizen, First_Generation, DoB, GPA, Major, Minor1, Minor2, Expected_Graduation, School, Current_Classification, Student_Type, Phone) 
            VALUES ('$suin', '$sgender', '$shispaniclatino', '$srace', '$suscitizen', '$sfirstgen', '$sdob', '$sgpa', '$smajor', '$sminor1', '$sminor2', '$expgrads', '$sschool', '$sclassification', '$sstudenttype', '$sphone')";
mysqli_query($conn, $sql);

header("Location: StudentManage.php");
?>