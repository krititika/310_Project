<?php
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

        <h1>Login</h1>
        <form action="login.php" class="login-section" method="post">
            Username: <input type="text" name="username"><br>
            Password: <input type="password" name="password"><br>
            <input type="submit"> <br>
        </form>

        <h2>Admin</h2>
        <form action="Admin_authentication/adminLogin.php" class="registration-section" method="post">
         <button> Admin User Authentication and Roles</button> <br>
        </form>

        <h2>Student</h2>
        <form action="Student_authentication/studentLogin.php" class="registration-section" method="post">
         <button> Student User Authentication and Roles</button> <br>
        </form>

        
        
    </body>
</html>
