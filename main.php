<?php
    include_once 'includes/startSession.php';
    include_once 'includes/DbConnect.php';

?>

<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]>      <html class="no-js"> <!--<![endif]-->
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title></title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="style.css">
    </head>
    <body>
        <!--[if lt IE 7]>
            <p class="browsehappy">You are using an <strong>outdated</strong> browser. Please <a href="#">upgrade your browser</a> to improve your experience.</p>
        <![endif]-->
        <h1>Main Page</h1>
    <script src="" async defer></script>

    <?php if ($_SESSION["usertype"] == "Admin"): ?>
        <div>Admin functionalities:</div>
        <br>
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
     <form action="Admin_authentication/addAdmin.php" method="POST">
            UIN:<br>
            <input type="number" name="uin" >
            <br>
            First Name:<br>
            <input type="text" name="firstname" >
            <br>
            Middle Initial:<br>
            <input type="text" name="middleinitial">
            <br>
            Last Name:<br>
            <input type="text" name="lastname" >
            <br>
            Username:<br>
            <input type="text" name="username" >
            <br>
            Password:<br>
            <input type="password" name="password" >
            <br>
            User Type:<br>
            <input type="text" name="usertype" >
            <br>
            Email:<br>
            <input type="email" name="email" >
            <br>
            Discord Name:<br>
            <input type="text" name="discordname">
            <br><br>
            <input type="submit" value="Register">
        </form>
    </div>

<div class="center hideform" id=updateform>
<button id="closeEdit" style="float: right;">X</button>
     <form action="Admin_authentication/updateAdmin.php"  method="POST">
            UIN:<br>
            <input type="number" name="uin" >
            <br>
            First Name:<br>
            <input type="text" name="firstname" >
            <br>
            Middle Initial:<br>
            <input type="text" name="middleinitial">
            <br>
            Last Name:<br>
            <input type="text" name="lastname" >
            <br>
            Username:<br>
            <input type="text" name="username" >
            <br>
            Password:<br>
            <input type="password" name="password" >
            <br>
            User Type:<br>
            <input type="text" name="usertype" >
            <br>
            Email:<br>
            <input type="email" name="email" >
            <br>
            Discord Name:<br>
            <input type="text" name="discordname">
            <br><br>
            <input type="submit" value="Update">
        </form>
    </div>

    <div class="center hideform" id=deleteform>
    <button id="closeDelete" style="float: right;">X</button>
    <form action="Admin_authentication/removeAdmin.php" method="POST">
        Enter the UIN:<br>
        <input type="number" name="dUIN">
        <br><br>
        <input type="submit" value="Delete User">
    </form>
</div>

<div class="center hideform" id=delform>
    <button id="deleteAccess" style="float: right;">X</button>
    <form action="Admin_authentication/removeAccess.php" method="POST">
        Enter the UIN:<br>
        <input type="number" name="dUIN">
        <br><br>
        <input type="submit" value="Remove user's access">
    </form>
</div>

<div class="center hideform" id=showform>
    <button id="closeShow" style="float: right;">X</button>
    <form action="Admin_authentication/showAdmin.php" method="POST">
        <input type="submit" value="Show the list of Users">
    </form>
</div>



<button id="Add">Add new user</button>
<button id="Edit">Update user details</button>
<button id="Delete">Delete user</button>
<button id="DeleteAccess">Remove access</button>
<button id="Show">Show User List</button>

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

$('#DeleteAccess').on('click', function () {
    $('#delform').show();
    $(this).hide();
})
$('#deleteAccess').on('click', function () {
    $('#delform').hide();
    $('#DeleteAccess').show();
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

    <!-- Button for Program Information Management -->
    <h2>Program Information Management</h2>
    <button type="button">Program Information Management</button>

    <!-- Button for Program Progress Tracking -->
    <h2>Program Progress Tracking</h2>
    <button type="button">Program Progress Tracking</button>

    <!-- Button for Event Management -->
    <h2>Event Management</h2>
    <button type="button">Event Management</button>
</body>
</html>
    <?php else: ?>
        <div> Student functionalities:</div>
        <br>
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
     <form action="Student_authentication/addStudent.php" method="POST">
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
     <form action="Student_authentication/updateStudent.php"  method="POST">
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
    <form action="Student_authentication/removeStudent.php" method="POST">
        <input type="submit" value="Are you sure you want to deactivate account?">
    </form>
</div>

<div class="center hideform" id=showform>
    <button id="closeShow" style="float: right;">X</button>
    <form action="Student_authentication/showStudent.php" method="POST">
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

    <!-- Button for Application Information Management -->
    <h2>Application Information Management</h2>
    <button type="button">Application Information Management</button>

    <!-- Button for Program Progress Tracking -->
    <h2>Program Progress Tracking</h2>
    <button type="button">Program Progress Tracking</button>

    <!-- Button for Document Upload and Management -->
    <h2>Document Upload and Management</h2>
    <button type="button">Document Upload and Management</button>
<br>


</body>
</html>
    <?php endif ?>
    </body>
</html>