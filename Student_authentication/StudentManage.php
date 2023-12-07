<?php
    include_once '../includes/DbConnect.php';
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Registration Form</title>
    <style>
               body {
            font-family: Arial, sans-serif;
            margin: 20px;
            background-color: #f8f8f8;
        }

        .center {
            text-align: center;
            
        }

        .hideform {
            display: none;
            background-color: #EFEFFB;
            border: 1px solid #ddd;
            padding: 20px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            max-width: 600px; /* Increased maximum width */
            margin: 0 auto; /* Centering the form horizontally */
            position: relative;
        }

        label {
            display: block;
            margin-bottom: 8px;
        }

        input, select, button {
            width: calc(100% - 20px);
            padding: 10px;
            margin-bottom: 16px;
            box-sizing: border-box;
            font-size: 16px;
        }

        input[type="submit"], button {
            background-color: #5858FA;
            color: white;
            cursor: pointer;
            border: none;
            transition: background-color 0.3s;
            width: 100%;
        }

        input[type="submit"]:hover, button:hover {
            background-color: blue;
        }

        button.close {
            position: absolute;
            top: 10px;
            right: 10px;
            background-color: red;
            border: none;
            cursor: pointer;
            font-size: 20px;
            color: #fff;
            padding: 5px 10px;
            outline: none;
        }

        button.close:hover {
            background-color: #ff5555;
        }

        table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 20px;
            border: 4px solid black;
        }

        th, td {
            border: 4px solid black;
            padding: 8px;
            text-align: left;
        }

        th {
            background-color: #f2f2f2;
        }
    </style>
</head>
<body>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>

    <!-- User Registration Form -->
    <div class="center hideform" id=registrationForm>
    <button id="closeAdd" style="float: right;">X</button>
     <form action="addStudent.php" method="POST">
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
     <form action="updateStudent.php"  method="POST">
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
            <br>
            Username:<br>
            <input type="text" name="username" >
            <br>
            <br>
            Password:<br>
            <input type="password" name="password" >
            <br>
            <br><br>
            <input type="submit" value="Update Student">
        </form>
    </div>

    <div class="center hideform" id=deleteform>
    <button id="closeDelete" style="float: right;">X</button>
    <form action="removeStudent.php" method="POST">
        <input type="submit" value="Are you sure you want to deactivate account?">
    </form>
</div>

<div class="center hideform" id=showform>
    <button id="closeShow" style="float: right;">X</button>
    <form action="showStudent.php" method="POST">
        <br><br>
        <input type="submit" value="Show my personal information">
    </form>
</div>

<button id="Add">Add student</button>
<button id="Edit">Update student details or login credentials</button>
<button id="Delete">Delete student information</button>
<button id="Show">Show My personal information</button>
<br>

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


</body>
</html>