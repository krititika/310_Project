<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create Application</title>
</head>

<body>
    <?php
    echo "Create Application";
    ?>

    <div class="application_box" id=add_application>
        <form action="createApplicationBackend.php" method="POST">
            UIN:<br>
            <input type="number" name="uin" value="Add UIN">
            <br>
            Program Number:<br>
            <input type="number" name="program_number">
            <br>
            Uncom Certificate:<br>
            <input type="text" name="uncom_cert">
            <br>
            Com Certificate:<br>
            <input type="text" name="com_cert">
            <br>
            Purpuse Statement:<br>
            <input type="text" name="purpose">
            <br>
            <br>
            <button type="submit" name="submit">Add Application</button>
        </form>
    </div>


</body>

</html>
