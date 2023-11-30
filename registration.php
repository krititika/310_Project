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
    </style>
</head>
<body>

<h1>User Registration</h1>
<form action="registration_update.php" method="post">
    <label for="uin">UIN:</label>
    <input type="text" id="uin" name="uin" required>

    <label for="firstName">First Name:</label>
    <input type="text" id="firstName" name="firstName" required>

    <label for="Middle">Middle Initial:</label>
    <input type="text" id="Middle" name="Middle">

    <label for="lastName">Last Name:</label>
    <input type="text" id="lastName" name="lastName" required>

    <label for="userName">User Name:</label>
    <input type="text" id="userName" name="userName" required>

    <label for="password">Password:</label>
    <input type="password" id="password" name="password" required>

    <label for="userType">User Type:</label>
    <select id="userType" name="userType" required>
        <option value="regular">Student</option>
        <option value="admin">Administrator</option>
    </select>

    <label for="email">Email:</label>
    <input type="email" id="email" name="email" required>

    <label for="discordUsername">Discord Username:</label>
    <input type="text" id="discordUsername" name="discordUsername" required>

    <input type="submit" value="Register">
</form>

</body>
</html>