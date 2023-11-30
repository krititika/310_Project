<?php
    include_once "includes/DbConnect.php";
    
    $sql = "SELECT * FROM Programs;";
    $result = mysqli_query($conn, $sql);
    echo
    "<table>
    <tr>
      <th>Program id</th>
      <th>Name</th>
      <th>Description</th>
    </tr>";
    while($row = mysqli_fetch_assoc($result)){
        echo
        "<tr>
            <td>".$row["Program_Num"]."</td>
            <td>".$row["Name"]."</td>
            <td>".$row["Description"]."</td>
        </tr>";
    }
    echo "</table>";
