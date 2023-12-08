<?php
include_once '../includes/DbConnect.php';
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Program Progress Tracking</title>
    <link rel="stylesheet" href="/style.css">
    <meta http-equiv="Cache-Control" content="no-cache, no-store, must-revalidate" />
    <meta http-equiv="Pragma" content="no-cache" />
    <meta http-equiv="Expires" content="0" />
    <script type="text/javascript" src="/script.js" defer></script>
</head>

<body>
    <a href="http://localhost/main.php">
        <h1>Welcome to your Database</h1>
    </a>

    <h2>Program Progress Tracking</h2>

    <?php

    $sql = "SELECT track.Tracking_Num, track.Program, programs.Description, user.UIN, user.First_Name, user.Last_Name, track.Progress_Percent from track INNER JOIN user on track.Student_Num=user.UIN INNER JOIN programs ON track.Program=programs.Program_Num;";
    $result = mysqli_query($conn, $sql);
    echo "<table border='1'>
           <tr>
               <th>Tracking #</th>
               <th>Program #</th>
               <th>Program Description</th>
               <th>UIN</th>
               <th>First Name</th>
               <th>Last Name</th>
               <th>Progress %</th>
               <th>Actions</th>
           </tr>";

    while ($row = mysqli_fetch_assoc($result)) {
        echo "<tr>";
        foreach ($row as $value) {
            echo "<td>$value</td>";
        }
        echo "<td>";
        echo "<span>📝 </span>";
        echo "<span class=\"div_button\" onClick=\"onDeleteClick('" . $row["Tracking_Num"] . "')\">🗑️</span>";
        echo "</td>";

        echo "</tr>";
    }

    echo "</table>";
    ?>

    <div class="action_buttons">
        <span class="progress create_progress_button">📈 Add Progress</span>
        <span class="progress display_progress_button">📊 Display Progress</span>
        <!-- <a href="./createProgress.php"><button class="progress create_progress_button">Add Progress</button></a> -->
        <!-- <a href="./updateProgress.php"><button class="progress">Update Progress</button></a> -->
        <!-- <a href="./displayProgress.php"><button class="progress">Display Progress</button></a> -->
        <!-- <a href="./deleteProgress.php"><button class="progress">Delete Progress</button></a> -->
    </div>

    <div class="create_progress_box">
        <div class="create_progress create_progress_hidden">
            <h2>Create Program Progress</h2>
            <form action="createProgress.php" method="post">
                <label for="UIN">UIN:</label>
                <input type="text" id="UIN" name="UIN" required>

                <label for="program_num">Program Num:</label>
                <input type="text" id="program_num" name="program_num" required>

                <label for="progress_percent">Progress Percent:</label>
                <input type="text" id="progress_percent" name="progress_percent" required>

                <input type="submit" value="Add Progress Tracking">
            </form>
        </div>
    </div>

    <div class="delete_progress_box">
        <div class="delete_progress delete_progress_hidden">
            <h3>Delete Tracking Record</h3>
            <form action="deleteProgress.php" method="post">
                <label for="tracking_num">Tracking #</label>
                <input type="text" id="tracking_num" name="tracking_num" required>

                <input type="submit" value="Delete Tracking Record">
            </form>
        </div>
    </div>

</body>

</html>
