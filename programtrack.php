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

        .form {
            display:flex;
            flex-direction: row;
            margin: auto;
            width: 60%;
            padding: 20px;
            box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
        }

        .table {
            display:flex;
            flex-direction: column;
            margin: auto;
            width: 100%;
        }

        .left-column,
        .middle-column,
        .right-column {
            flex: 1;
            padding: 20px;
        }
  

    </style>
</head>
<body>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
<div class = "form" style="display: None;" id=courseform>
    <div class = "left-column">
        <form action="includes/addcoursetrac.php" method="POST">
            UIN:<br>
            <input type="number" name="acluin">
            <br>
            Class ID:<br>
            <input type="number" name="aclclassid">
            <br>
            Status:<br>
            <input type="text" name="aclstatus">
            <br>
            Semester:<br>
            <input type="test" name="aclsemester">
            <br>
            Year:<br>
            <input type="number" name="aclyear">
            <br><br>
            <button type="submit" name="submit">Add Course Evaluation</button>
        </form>
    </div>
    <div class = "middle-column">
        <form action="includes/editcoursetrac.php" method="POST">
            Course Number:<br>
            <input type="number" name="eclcoursenum">
            <br>
            UIN:<br>
            <input type="number" name="ecluin">
            <br>
            Class ID:<br>
            <input type="number" name="eclclassid">
            <br>
            Status:<br>
            <input type="text" name="eclstatus">
            <br>
            Semester:<br>
            <input type="test" name="eclsemester">
            <br>
            Year:<br>
            <input type="number" name="eclyear">
            <br><br>
            <button type="submit" name="submit">Edit Course Evaluation</button>
        </form>
    </div>
    <div class="right-column">
        <button id="clclose" style="float: right;">X</button>
        <form action="includes/deletecoursetrac.php" method="POST">
            Course Number:<br>
            <input type="number" name="dclcoursenum">
            <br><br>
            <button type="submit" name="submit">Delete Course Progress</button>
        </form>
    </div>
</div>

<div class = "form" style="display: None;" id=internform>
    <div class = "left-column">
        <form action="includes/addinterntrac.php" method="POST">
            UIN:<br>
            <input type="number" name="aiuin">
            <br>
            Intern ID:<br>
            <input type="number" name="aiinternid">
            <br>
            Status:<br>
            <input type="text" name="aistatus">
            <br>
            Year:<br>
            <input type="number" name="aiyear">
            <br><br>
            <button type="submit" name="submit">Add Internship App</button>
        </form>
    </div>
    <div class = "middle-column">
        <form action="includes/editinterntrac.php" method="POST">
            Intern App Number:<br>
            <input type="number" name="eiinternappnum">
            <br>
            UIN:<br>
            <input type="number" name="eiuin">
            <br>
            Intern ID:<br>
            <input type="number" name="eiinternid">
            <br>
            Status:<br>
            <input type="text" name="eistatus">
            <br>
            Year:<br>
            <input type="number" name="eiyear">
            <br><br>
            <button type="submit" name="submit">Edit Internship App</button>
        </form>
    </div>
    <div class="right-column">
        <button id="iclose" style="float: right;">X</button>
        <form action="includes/deleteinterntrac.php" method="POST">
            Internship App Number:<br>
            <input type="number" name="diinternappnum">
            <br><br>
            <button type="submit" name="submit">Delete Internship App</button>
        </form>
    </div>
</div>

<div class = "form" style="display: None;" id=certform>
    <div class = "left-column">
        <form action="includes/addcerttrac.php" method="POST">
            UIN:<br>
            <input type="number" name="acuin">
            <br>
            Certification ID:<br>
            <input type="number" name="accertid">
            <br>
            Program Number:<br>
            <input type="number" name="acprognum">
            <br>
            Status:<br>
            <input type="text" name="acstatus">
            <br>
            Training Status:<br>
            <input type="text" name="actrainingstatus">
            <br>
            Semester:<br>
            <input type="text" name="acsemester">
            <br>
            Year:<br>
            <input type="number" name="acyear">
            <br><br>
            <button type="submit" name="submit">Add Certification Enrollment</button>
        </form>
    </div>
    <div class = "middle-column">
    <form action="includes/editcerttrac.php" method="POST">
            Certification Enrollment Number:<br>
            <input type="number" name="eccertenrollnum">
            <br>
            UIN:<br>
            <input type="number" name="ecuin">
            <br>
            Certification ID:<br>
            <input type="number" name="eccertid">
            <br>
            Program Number:<br>
            <input type="number" name="ecprognum">
            <br>
            Status:<br>
            <input type="text" name="ecstatus">
            <br>
            Training Status:<br>
            <input type="text" name="ectrainingstatus">
            <br>
            Semester:<br>
            <input type="text" name="ecsemester">
            <br>
            Year:<br>
            <input type="number" name="ecyear">
            <br><br>
            <button type="submit" name="submit">Edit Certification Enrollment</button>
        </form>
    </div>
    <div class="right-column">
        <button id="cclose" style="float: right;">X</button>
        <form action="includes/deletecerttrac.php" method="POST">
            Certification Enrollment Number:<br>
            <input type="number" name="dccertenrollnum">
            <br><br>
            <button type="submit" name="submit">Delete Certification Enrollment</button>
        </form>
    </div>
</div>

<button id="course">Course Enrollment</button>
<button id="intern">Internships</button>
<button id="cert">Certifications</button>

<div class = "table" id=programtracksql>
    <div class = "left-column">
        <?php
            $sql = "SELECT * FROM ClassName
            WHERE UIN = 0;";
            $result = mysqli_query($conn, $sql);

            echo "<table border='1'>
                <tr>
                    <th>Course Number</th>
                    <th>UIN</th>
                    <th>Class</th>
                    <th>Status</th>
                    <th>Semester</th>
                    <th>Year</th>
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
    </div>
    <div class = "middle-column">
        <?php
            $sql = "SELECT * FROM intern_app
            WHERE UIN = 0;";
            $result = mysqli_query($conn, $sql);

            echo "<table border='1'>
                <tr>
                    <th>Internship App Num</th>
                    <th>UIN</th>
                    <th>Intern ID</th>
                    <th>Status</th>
                    <th>Year</th>
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
    </div>
    <div class = "right-column">
        <?php
            $sql = "SELECT * FROM cert_enrollment
            WHERE UIN = 0;";
            $result = mysqli_query($conn, $sql);

            echo "<table border='1'>
                <tr>
                    <th>Certification Enrollment Number</th>
                    <th>UIN</th>
                    <th>Certification ID</th>
                    <th>Program Number</th>
                    <th>Status</th>
                    <th>Training Status</th>
                    <th>Semester</th>
                    <th>Year</th>
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
    </div>
</div>

<script>
$('#course').on('click', function () {
    $('#courseform').show();
    $(this).hide();
})
$('#clclose').on('click', function () {
    $('#courseform').hide();
    $('#course').show();
})

$('#intern').on('click', function () {
    $('#internform').show();
    $(this).hide();
})
$('#iclose').on('click', function () {
    $('#internform').hide();
    $('#intern').show();
})

$('#cert').on('click', function () {
    $('#certform').show();
    $(this).hide();
})
$('#cclose').on('click', function () {
    $('#certform').hide();
    $('#cert').show();
})
</script>

</body>
</html>
