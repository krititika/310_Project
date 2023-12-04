<?php
    include_once "../includes/startSession.php";
    include_once "../includes/DbConnect.php";

    echo
    "<table>
    <tr>
      <th>Document id</th>
      <th>Application id</th>
      <th>Link</th>
      <th>Document Type</th>
    </tr>";
    $sql = "SELECT * FROM Application
    WHERE UIN = ".$_SESSION["UIN"].";";
    $result = mysqli_query($conn, $sql);
    while($row = mysqli_fetch_assoc($result)){
        $sql = "SELECT * FROM Documentation
        WHERE App_Num = ".$row['App_Num'].";";
        $resultDoc = mysqli_query($conn, $sql);
        while($rowDoc = mysqli_fetch_assoc($resultDoc)){
            echo
            "<tr>
                <td>".$rowDoc["Doc_Num"]."</td>
                <td>".$rowDoc["App_Num"]."</td>
                <td><a target=\"_blank\" href=\"". $rowDoc["Link"] ."\">".$rowDoc["Link"]."</a></td>
                <td>".$rowDoc["Doc_Type"]."</td>
            </tr>";
        }
    }
    echo "</table>";
