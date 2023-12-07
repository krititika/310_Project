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
            flex-direction: column;
            align-items: center;
            margin-top: 20px;
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
    </style>
</head>
<body>

    <h1>Welcome to your Database</h1>
    
    <div class="container">
        <?php if ($_SESSION["usertype"] == "Admin"): ?>
            <div class="admin-info">Hello Admin:</div>

            <div class="button-container">
                <a href="Admin_authentication/AdminManage.php"><button>Admin Account Management</button></a>

                <h2>Program Information Management</h2>
                <a href="Admin-ProgramManagement/programInfo.php"><button>Program Information Management</button></a>

                <h2>Program Progress Tracking</h2>
                <a href="Admin-ProgramProgress/programProgress.php"><button type="button">Program Progress Tracking</button></a>

                <h2>Event Management</h2>
                <a href="Admin-Events/events.php"><button>Event Management</button></a>

            </div>
        <?php else: ?>
            <div class="student-info">Student functionalities:</div>
            <div class="button-container">
                <a href="Student_authentication/StudentManage.php"><button>Student Account Management</button></a>

                    <!-- Button for Application Information Management -->
                    <h2>Application Information Management</h2>
    <button type="button">Application Information Management</button>

    <!-- Button for Program Progress Tracking -->
    <h2>Program Progress Tracking</h2>
    <a href="Student-ProgramTrack/programtrack.php"><button>Program Progress Tracking</button></a>

    <!-- Button for Document Upload and Management -->
    <h2>Document Upload and Management</h2>
    <a href="Student-DocumentManagement/documentManagement.php"><button>Document upload and Management</button></a>
            </div>
        <?php endif ?>
    </div>
</body>
</html>