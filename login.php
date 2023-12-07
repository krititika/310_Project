<?php
include_once "includes/definitions.php";
include_once "includes/DbConnect.php";

session_start();
$sql = "SELECT * from user 
WHERE Username=\"" . $_POST["username"] . "\"
 AND " . "Password=\"" . $_POST["password"] . "\";";
$result = mysqli_query($conn, $sql);
$resultCheck = mysqli_num_rows($result);

if($resultCheck > 0){
    while($row = mysqli_fetch_assoc($result)){
        $_SESSION["username"] = $_POST["username"];
        $_SESSION["password"] = $_POST["password"];
        $_SESSION["UIN"] = $row["UIN"];
        $_SESSION["usertype"] = $row["User_Type"];
        header('Location: main.php');
        exit();
    }
}
else{
    echo "Please enter correct credential information";
}
