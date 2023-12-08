<?php
include_once '../includes/DbConnect.php';
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create Progress</title>
</head>

<body>
    <?php
    $sql = "INSERT INTO `track` (`Program`, `Student_Num`, `Tracking_Num`, `Progress_Percent`) VALUES ("
        . $_POST["program_num"]
        . ", "
        . $_POST["UIN"]
        . ", NULL, "
        . $_POST["progress_percent"]
        . ");";
    $result = mysqli_query($conn, $sql);
    if ($result) {
        header('Location: programProgress.php');
    } else {
        echo "Something went wrong.";
    }
    ?>

</body>

</html>
