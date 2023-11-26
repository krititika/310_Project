<?php
include_once "includes/DbConnect.php";
$sql = "SELECT * from user 
WHERE Username=\"" . $_POST["username"] . "\"
 AND " . "Password=\"" . $_POST["password"] . "\";";
$result = mysqli_query($conn, $sql);
$resultCheck = mysqli_num_rows($result);

if($resultCheck > 0){
    while($row = mysqli_fetch_assoc($result)){
        include "mainPage.html";
    }
}
else{
    echo "no rows";
}
