<?php
 include 'header.php';
include_once '.../includes/DbConnect.php';
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
     <form action="addAdmin.php" method="POST">
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
     <form action="updateAdmin.php"  method="POST">
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
    <form action="removeAdmin.php" method="POST">
        Enter the UIN:<br>
        <input type="number" name="dUIN">
        <br><br>
        <input type="submit" value="Delete User">
    </form>
</div>

<div class="center hideform" id=showform>
    <button id="closeShow" style="float: right;">X</button>
    <form action="showAdmin.php" method="POST">
        <input type="submit" value="Show the list of Users">
    </form>
</div>

<button id="Add">Add new admin</button>
<button id="Edit">Update admin details</button>
<button id="Delete">Delete admin</button>
<button id="Show">Show Admin List</button>

<h1>here1</h1>
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
<h1>here2</h1>
<br>
<br>

<?php

   $sql = "SELECT * FROM user;";
   $result = mysqli_query($conn, $sql);

   echo "<table border='1'>
           <tr>
               <th>UIN</th>
               <th>First Name</th>
               <th>Middle Initial</th>
               <th>Last Name</th>
               <th>Username</th>
               <th>Password</th>
               <th>User Type</th>
               <th>Email</th>
               <th>Password</th>
           </tr>";

   while($row = mysqli_fetch_assoc($result)) {
       echo "<tr>";
       foreach ($row as $value) {
           echo "<td>$value</td>";
       }
       echo "</tr>";
   }

   echo "</table>";

   header("Location: Admin_authentication/adminLogin.php");

?>
</body>
</html>