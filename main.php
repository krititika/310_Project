<?php
include_once 'includes/startSession.php';
include_once 'includes/DbConnect.php';
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Main Page</title>
    <link rel="stylesheet" href="style.css">
    <style>
        body {
            font-family: 'Arial', sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f4f4f4;
            color: #333;
        }

        h1 {
            text-align: center;
            padding: 20px 0;
            background-color: #007BFF;
            color: #fff;
        }

        .container {
            max-width: 800px;
            margin: 0 auto;
            padding: 20px;
        }

        .button-container {
            display: flex;
            flex-direction: row;
            align-items: center;
            margin-top: 20px;
            justify-content: center;
            gap: 2rem;
            flex-wrap: wrap;
            align-items: stretch;
        }

        button {
            background-color: #007BFF;
            color: #fff;
            padding: 10px 20px;
            font-size: 16px;
            margin-bottom: 10px;
            cursor: pointer;
            border: none;
            border-radius: 5px;
            width: 20rem;
            min-height: 5rem;
        }

        button:hover {
            background-color: #0056b3;
        }

        .admin-info {
            font-size: 18px;
            font-weight: bold;
            text-align: center;
            margin-bottom: 20px;
        }

        .student-info {
            font-size: 18px;
            font-weight: bold;
            text-align: center;
            margin-bottom: 20px;
        }

        .admin_button {
            background-color: #707070;
        }

        .admin_button:hover {
            background-color: #505050;
        }
    </style>
</head>

<body>

    <h1>Welcome to your Database</h1>

    <div class="container">
        <?php if ($_SESSION["usertype"] == "Admin"): ?>
            <div class="admin-info">Hello Admin:
                <?php echo $_SESSION["username"] ?>
            </div>

            <div class="button-container">
                <a href="Admin_authentication/AdminManage.php">
                    <button class="admin_button">Admin Account Management</button>
                </a>

                <a href="Admin-ProgramManagement/programInfo.php">
                    <button class="admin_button">Program Information Management</button>
                </a>

                <a href="Admin-ProgramProgress/programProgress.php">
                    <button class="admin_button">Program Progress Tracking</button>
                </a>

                <a href="Admin-Events/events.php">
                    <button class="admin_button">Event Management</button>
                </a>

            </div>
        <?php else: ?>
            <div class="student-info">Hello Student:
                <?php echo $_SESSION["username"] ?>
            </div>
            <div class="button-container">
                <a href="Student_authentication/StudentManage.php">
                    <button>Student Account Management</button>
                </a>

                <a href="/Student-ApplicationIM/applications.php">
                    <button type="button">Application Information Management</button>
                </a>

                <a href="Student-ProgramTrack/programtrack.php">
                    <button>Program Progress Tracking</button>
                </a>

                <a href="Student-DocumentManagement/documentManagement.php">
                    <button>Document upload and Management</button>
                </a>
            </div>
        <?php endif ?>
    </div>
</body>

</html>
