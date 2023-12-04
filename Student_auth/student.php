<?php

include_once "includes/definitions.php";
include_once "includes/DbConnect.php";
?>

<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Registration Form</title>
    <style>
        /* Add some basic styling for better presentation */
        body {
            font-family: Arial, sans-serif;
            margin: 20px;
        }

        form {
            max-width: 400px;
            margin: 0 auto;
        }

        label {
            display: block;
            margin-bottom: 8px;
        }

        input, select {
            width: 100%;
            padding: 8px;
            margin-bottom: 16px;
            box-sizing: border-box;
        }

        input[type="submit"] {
            background-color: #4CAF50;
            color: white;
            cursor: pointer;
        }

        input[type="submit"]:hover {
            background-color: #45a049;
        }
        .hideform {
            display: none;
        }  
    </style>
    </style>
</head>
<body>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>

    <!-- User Registration Form -->
    <div class="center hideform" id=registrationForm>
    <button id="closeAdd" style="float: right;">X</button>
     <form action="Student_auth/add_stu.php" method="POST">
            UIN:<br>
            <input type="number" name="uin" >
            <br>
            Gender:<br>
            <input type="text" name="gender" >
            <br>
            Hispanic/Latino:<br>
            <input type="text" name="hispaniclatino">
            <br>
            Race:<br>
            <input type="text" name="race" >
            <br>
            U.S. Citizen:<br>
            <input type="text" name="uscitizen" >
            <br>
            First Generation:<br>
            <input type="text" name="firstgen" >
            <br>
            DoB<br>
            <input type="date" name="dob" >
            <br>
            GPA:<br>
            <input type="number" step="0.01" name="gpa" >
            <br>
            Major:<br>
            <input type="text" name="major">
            <br>
            Minor #1:<br>
            <input type="text" name="minor1" >
            <br>
            Minor #2:<br>
            <input type="text" name="minor2" >
            <br>
            Expected Graduation:<br>
            <input type="number" name="expgrad" >
            <br>
            School:<br>
            <input type="text" name="school" >
            <br>
            Classification:<br>
            <input type="text" name="classification" >
            <br>
            Phone:<br>
            <input type="number" name="phone" >
            <br>
            Student type:<br>
            <input type="text" name="studenttype" >
            <br>
            <br><br>
            <input type="submit" value="Add Student">
        </form>
    </div>

<div class="center hideform" id=updateform>
<button id="closeEdit" style="float: right;">X</button>
     <form action="Student_auth/update_stu.php"  method="POST">
     UIN:<br>
            <input type="number" name="uin" >
            <br>
            Gender:<br>
            <input type="text" name="gender" >
            <br>
            Hispanic/Latino:<br>
            <input type="text" name="hispaniclatino">
            <br>
            Race:<br>
            <input type="text" name="race" >
            <br>
            U.S. Citizen:<br>
            <input type="text" name="uscitizen" >
            <br>
            First Generation:<br>
            <input type="text" name="firstgen" >
            <br>
            DoB<br>
            <input type="date" name="dob" >
            <br>
            GPA:<br>
            <input type="number" step="0.01" name="gpa" >
            <br>
            Major:<br>
            <input type="text" name="major">
            <br>
            Minor #1:<br>
            <input type="text" name="minor1" >
            <br>
            Minor #2:<br>
            <input type="text" name="minor2" >
            <br>
            Expected Graduation:<br>
            <input type="number" name="expgrad" >
            <br>
            School:<br>
            <input type="text" name="school" >
            <br>
            Classification:<br>
            <input type="text" name="classification" >
            <br>
            Phone:<br>
            <input type="number" name="phone" >
            <br>
            Student type:<br>
            <input type="text" name="studenttype" >
            <br>
            <br><br>
            <input type="submit" value="Update Student">
        </form>
    </div>

    <div class="center hideform" id=deleteform>
    <button id="closeDelete" style="float: right;">X</button>
    <form action="Student_auth/remove_stu.php" method="POST">
        Enter the UIN:<br>
        <input type="number" name="dUIN">
        <br><br>
        <input type="submit" value="Delete User">
    </form>
</div>

<div class="center hideform" id=showform>
    <button id="closeShow" style="float: right;">X</button>
    <form action="Student_auth/show_stu.php" method="POST">
             Enter the UIN:<br>
        <input type="number" name="displayUIN">
        <br><br>
        <input type="submit" value="Show my personal info">
    </form>
</div>

<button id="Add">Add student</button>
<button id="Edit">Update student details</button>
<button id="Delete">Delete student information</button>
<button id="Show">Display My information</button>
<br> <br> <br>

<script>
$('#Add').on('click', function () {
    $('#registrationForm').show();
    $(this).hide();
})
$('#closeAdd').on('click', function () {
    $('#registrationForm').hide();
    $('#Add').show();
})

$('#Edit').on('click', function () {
    $('#updateform').show();
    $(this).hide();
})
$('#closeEdit').on('click', function () {
    $('#updateform').hide();
    $('#Edit').show();
})
$('#Delete').on('click', function () {
    $('#deleteform').show();
    $(this).hide();
})
$('#closeDelete').on('click', function () {
    $('#deleteform').hide();
    $('#Delete').show();
})
$('#Show').on('click', function () {
    $('#showform').show();
    $(this).hide();
})
$('#closeShow').on('click', function () {
    $('#showform').hide();
    $('#Show').show();
})
</script>

<br>
<br>

<?php

   include_once 'DbConnect.php';
   $sql = "SELECT * FROM College_Student;";
   $result = mysqli_query($conn, $sql);

   echo "<table border='1'>
           <tr>
               <th>UIN</th>
               <th>Gender</th>
               <th>Hispanic/Latino</th>
               <th>Race</th>
               <th>U.S. Citizen</th>
               <th>First_Generation</th>
               <th>DoB</th>
               <th>GPA</th>
               <th>Major</th>
               <th>Minor #1</th>
               <th>Minor #2</th>
               <th>Expected_Graduation</th>
               <th>School</th>
               <th>Current_Classification</th>
               <th>Student_Type</th>
               <th>Phone</th>
           </tr>";

   while($row = mysqli_fetch_assoc($result)) {
       echo "<tr>";
       foreach ($row as $value) {
           echo "<td>$value</td>";
       }
       echo "</tr>";
   }

   echo "</table>";

   header("Location: ../admin.php?signup=success");

?>

</body>
</html>