<?php
     include_once "../includes/startSession.php";
     include_once "../includes/DbConnect.php";
 
   $sql = "SELECT * FROM College_Student WHERE UIN = ".$_SESSION["UIN"].";";
   $result = mysqli_query($conn, $sql);

   echo "<table border='1'>
           <tr>
               <th>UIN</th>
               <th>Gender</th>
               <th>Hispanic/Latino</th>
               <th>Race</th>
               <th>U.S. Citizen</th>
               <th>First_Generation</th>
               <th>DoB</th>
               <th>GPA</th>
               <th>Major</th>
               <th>Minor #1</th>
               <th>Minor #2</th>
               <th>Expected_Graduation</th>
               <th>School</th>
               <th>Current_Classification</th>
               <th>Student_Type</th>
               <th>Phone</th>
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