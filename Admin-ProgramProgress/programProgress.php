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
</head>

<body>
    <a href="http://localhost/main.php">
        <h1>Welcome to your Database</h1>
    </a>

    <h2>Program Progress Tracking</h2>

    <?php

    $sql = "SELECT track.Program, user.First_Name, user.Last_Name, track.Progress_Percent from track INNER JOIN user on track.Student_Num=user.UIN;";
    $result = mysqli_query($conn, $sql);
    echo "<table border='1'>
           <tr>
               <th>Program Number</th>
               <th>First Name</th>
               <th>Last Name</th>
               <th>Progress %</th>
           </tr>";

    while ($row = mysqli_fetch_assoc($result)) {
        echo "<tr>";
        foreach ($row as $value) {
            echo "<td>$value</td>";
        }
        echo "</tr>";
    }

    echo "</table>";
    ?>

    <div class="action_buttons">
        <a href="./createProgress.php"><button class="progress">Add Progress</button></a>
        <a href="./updateProgress.php"><button class="progress">Update Progress</button></a>
        <a href="./displayProgress.php"><button class="progress">Display Progress</button></a>
        <a href="./deleteProgress.php"><button class="progress">Delete Progress</button></a>
    </div>
</body>

</html>
