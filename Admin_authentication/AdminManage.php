<?php
    include_once 'includes/DbConnect.php';

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
        }

        th, td {
            border: 3px solid #ddd;;
            padding: 12px;
            text-align: left;
        }

        th {
            background-color: #E3E6FF;
        }
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
    <form action="removeAdmin.php" method="POST">
        Enter the UIN:<br>
        <input type="number" name="dUIN">
        <br><br>
        <input type="submit" value="Delete User">
    </form>
</div>

<div class="center hideform" id=delform>
    <form action="removeAccess.php" method="POST">
        Enter the UIN:<br>
        <input type="number" name="dUIN">
        <br><br>
        <input type="submit" value="Remove user's access">
    </form>
</div>

<div class="center hideform" id=showform>
    <form action="showAdmin.php" method="POST">
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
<br>
<?php
   include_once "../includes/DbConnect.php";
   include_once 'DbConnect.php';
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

?>
</body>
</html>