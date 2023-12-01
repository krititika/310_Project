<?php
 include 'header.php';
 include_once 'includes/DbConnect.php';

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style>
        body {
            margin: 0;
            font-family: Arial, sans-serif;
        }

        header {
            background-color: #333;
            padding: 10px;
            text-align: center;
        }

        button {
            background-color: #BDB5D5;
            color: white;
            padding: 10px 20px;
            border: none;
            border-radius: 5px;
            margin: 0 10px;
            cursor: pointer;
        }

        button:hover {
            background-color: #C3B1E1;
        }
        .center {
            display:flex;
            justify-content:space-between;
            margin: auto;
            width: 60%;
            padding: 20px;
            box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
        }

        .center > div {
            width: 30%;
            box-sizing: border-box;
            padding: 10px;
        }

        .hideform {
            display: none;
        }    

    </style>
</head>
<body>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>

<div class = "center hideform" id=courseform>
    <button id="aclose" style="float: right;">X</button>
    <div class = "left-column">
        <form action="includes/addevent.php" method="POST">
            Event Type:<br>
            <input type="text" name="aeventtype">
            <br>
            UIN:<br>
            <input type="number" name="auin" value="Add UIN">
            <br>
            Program Number:<br>
            <input type="number" name="aprogramnum">
            <br>
            Start Date:<br>
            <input type="date" name="astartdate">
            <br>
            End Date:<br>
            <input type="date" name="aenddate">
            <br>
            Start Time:<br>
            <input type="time" name="astarttime">
            <br>
            End Time:<br>
            <input type="time" name="aendtime">
            <br>
            Location:<br>
            <input type="text" name="alocation">
            <br><br>
            <button type="submit" name="submit">Add Event</button>
        </form>
    </div>
    <div class = "middle-column">
        <form action="includes/editevent.php" method="POST">
            Event ID:<br>
            <input type="number" name="eeventID">
            <br>
            Event Type:<br>
            <input type="text" name="eeventtype">
            <br>
            UIN:<br>
            <input type="number" name="euin" value="Add UIN">
            <br>
            Program Number:<br>
            <input type="number" name="eprogramnum">
            <br>
            Start Date:<br>
            <input type="date" name="estartdate">
            <br>
            End Date:<br>
            <input type="date" name="eenddate">
            <br>
            Start Time:<br>
            <input type="time" name="estarttime">
            <br>
            End Time:<br>
            <input type="time" name="eendtime">
            <br>
            Location:<br>
            <input type="text" name="elocation">
            <br><br>
            <button type="submit" name="submit">Edit Event</button>
        </form>
    </div>
    <div class = "right-column">
        <form action="includes/deleteevent.php" method="POST">
            Event ID:<br>
            <input type="number" name="deventID">
            <br><br>
            <button type="submit" name="submit">Delete Event</button>
        </form>
    </div>
</div>

<button id="course">Course Enrollment</button>
<button id="intern">Internships</button>
<button id="cert">Certifications</button>

<?php
   $sql = "SELECT * FROM event;";
   $result = mysqli_query($conn, $sql);

   echo "<table border='1'>
           <tr>
               <th>Event ID</th>
               <th>UIN</th>
               <th>Program Number</th>
               <th>Start Date</th>
               <th>Start Time</th>
               <th>Location</th>
               <th>End Date</th>
               <th>End Time</th>
               <th>Event Name</th>
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
<script>
$('#course').on('click', function () {
    $('#courseform').show();
    $(this).hide();
})
$('#aclose').on('click', function () {
    $('#addform').hide();
    $('#Add').show();
})

$('#Edit').on('click', function () {
    $('#editform').show();
    $(this).hide();
})
$('#eclose').on('click', function () {
    $('#editform').hide();
    $('#Edit').show();
})

$('#Delete').on('click', function () {
    $('#deleteform').show();
    $(this).hide();
})
$('#dclose').on('click', function () {
    $('#deleteform').hide();
    $('#Delete').show();
})
</script>

</body>
</html>
