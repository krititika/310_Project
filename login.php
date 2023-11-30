<?php
include_once "includes/definitions.php";
include_once 'includes/startSession.php';
include_once "includes/DbConnect.php";

$sql = "SELECT * from user 
WHERE Username=\"" . $_POST["username"] . "\"
 AND " . "Password=\"" . $_POST["password"] . "\";";
$result = mysqli_query($conn, $sql);
$resultCheck = mysqli_num_rows($result);

if($resultCheck > 0){
    while($row = mysqli_fetch_assoc($result)){
        $_SESSION["username"] = $_POST["username"];
        $_SESSION["password"] = $_POST["password"];
        // header('Refresh: 0; URL='.URL.'main.php');
        header('Location: main.php');
        exit();
    }
}
else{
    echo "no rows";
}
