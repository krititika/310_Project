<?php

    include_once 'DbConnect.php';
   $sql = "SELECT * FROM user;";
   $result = mysqli_query($conn, $sql);

   echo "<table border='1'>
           <tr>
               <th>UIN</th>
               <th>First Name</th>
               <th>Middle Initial</th>
               <th>Last Name</th>
               <th>Username</th>
               <th>Password</th>
               <th>User Type</th>
               <th>Email</th>
               <th>Password</th>
           </tr>";

   while($row = mysqli_fetch_assoc($result)) {
       echo "<tr>";
       foreach ($row as $value) {
           echo "<td>$value</td>";
       }
       echo "</tr>";
   }

   echo "</table>";


?>