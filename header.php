<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style>
        body {
            margin: 0;
            font-family: Arial, sans-serif;
        }

        header {
            background-color: #333;
            padding: 10px;
            text-align: center;
        }

        button {
            background-color: #BDB5D5;
            color: white;
            padding: 10px 20px;
            border: none;
            border-radius: 5px;
            margin: 0 10px;
            cursor: pointer;
        }

        button:hover {
            background-color: #C3B1E1;
        }
    </style>
</head>
<body>

<header>
    <button onclick="location.href='users.php'">Users</button>
    <button onclick="location.href='programtrack.php'">Programs</button>
    <button onclick="location.href='events.php'">Events</button>
    <button onclick="location.href='documents.php'">Documents</button>
</header>

</body>
</html>