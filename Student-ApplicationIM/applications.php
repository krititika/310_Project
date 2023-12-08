<?php
include_once '../includes/DbConnect.php';
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Display All Applications</title>
    <link rel="stylesheet" href="/style.css">
</head>

<body>

    <a href="http://localhost/main.php">
        <h1>Welcome to your Database</h1>
    </a>

    <h2>Display All Applications</h2>
    <h3>Internship Applications</h3>

    <?php

    $sql = "SELECT application.App_Num, user.First_Name, user.Last_Name, intern_app.Status, internship.Description from application INNER JOIN user on application.UIN=user.UIN INNER JOIN intern_app on application.UIN=intern_app.UIN INNER JOIN internship on intern_app.IA_Num=internship.Intern_ID";
    $result = mysqli_query($conn, $sql);
    echo "<table border='1'>
           <tr>
               <th>Application #</th>
               <th>First Name</th>
               <th>Last Name</th>
               <th>Status</th>
               <th>Description</th>
               <th>Actions</th>
           </tr>";

    while ($row = mysqli_fetch_assoc($result)) {
        echo "<tr>";
        foreach ($row as $value) {
            echo "<td>$value</td>";
        }
        echo "<td>";
        echo "📝 🗑️";
        echo "</td>";
        echo "</tr>";
        echo "</tr>";
    }

    echo "</table>";
    ?>

    <h3>Certification Enrollment Applications</h3>

    <?php
    $sql = "SELECT application.App_Num, user.First_Name, user.Last_Name, cert_enrollment.Status, certification.Description from application INNER JOIN user on application.UIN=user.UIN INNER JOIN cert_enrollment on application.UIN=cert_enrollment.UIN INNER JOIN certification on cert_enrollment.CertE_Num=certification.Cert_ID;";
    $result = mysqli_query($conn, $sql);
    echo "<table border='1'>
           <tr>
               <th>Application # (Cert Enrollments)</th>
               <th>First Name</th>
               <th>Last Name</th>
               <th>Status</th>
               <th>Description</th>
               <th>Actions</th>
           </tr>";

    while ($row = mysqli_fetch_assoc($result)) {
        echo "<tr>";
        foreach ($row as $value) {
            echo "<td>$value</td>";
        }
        echo "<td>";
        echo "📝 🗑️";
        echo "</td>";
        echo "</tr>";
        echo "</tr>";
    }

    echo "</table>";

    ?>

    <div class="action_buttons">
        <a href="./createApplication.php"><button class="progress">New Application</button></a>
        <!-- <a href="./updateApplication.php"><button class="progress">Update Application</button></a> -->
        <a href="./selectApplication.php"><button class="progress">Select Application</button></a>
        <!-- <a href="./deleteApplication.php"><button class="progress">Delete Application</button></a> -->
    </div>


</body>

</html>
