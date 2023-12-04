<?php
    include_once "../includes/DbConnect.php";
    
    $sql = "SELECT * FROM Documentation;";
    $result = mysqli_query($conn, $sql);
    echo
    "<table>
    <tr>
      <th>Document id</th>
      <th>Application id</th>
      <th>Link</th>
      <th>Document Type</th>
    </tr>";
    while($row = mysqli_fetch_assoc($result)){
        echo
        "<tr>
            <td>".$row["Doc_Num"]."</td>
            <td>".$row["App_Num"]."</td>
            <td><a target=\"_blank\" href=\"". $row["Link"] ."\">".$row["Link"]."</a></td>
            <td>".$row["Doc_Type"]."</td>
        </tr>";
    }
    echo "</table>";
