<?php
    include_once '../includes/startSession.php';
?>
<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]>      <html class="no-js"> <!--<![endif]-->
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title></title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="../style.css">
    </head>
    <body>
        <!--[if lt IE 7]>
            <p class="browsehappy">You are using an <strong>outdated</strong> browser. Please <a href="#">upgrade your browser</a> to improve your experience.</p>
        <![endif]-->
        <h1>Program Information Management</h1>
        <div>
            <form action="createProgram.php" class="float-child" method="post">
                Create Program<br>
                Name: <input type="text" name="name" required><br>
                Description: <input type="text" name="description" required><br>
                <input type="submit"><br>
                <?php
                    $keyName = "createdProgram";
                    if(isset($_SESSION[$keyName])){
                        if($_SESSION[$keyName]){
                            echo "inserted program";
                        }
                        else{
                            echo "failed to insert program";
                        }
                        unset($_SESSION[$keyName]);
                    }
                ?>
            </form>
            <form action="deleteProgram.php" class="float-child" method="post">
                Delete Program<br>
                Program id: <input type="number" name="program-id" required><br>
                Full Delete: <input type="checkbox" name="full-delete"><br>
                <input type="submit"><br>
                <?php
                    $keyName = "deletedProgram";
                    if(isset($_SESSION[$keyName])){
                        if($_SESSION[$keyName]){
                            echo "deleted program";
                        }
                        else{
                            echo "failed to delete program";
                        }
                        unset($_SESSION[$keyName]);
                    }
                ?>
            </form>
            <form action="updateProgram.php" class="float-child" method="post">
                Update Program<br>
                Program id: <input type="number" name="program-id" required><br>
                New Name: <input type="text" name="name"><br>
                New Description: <input type="text" name="description"><br>
                <input type="submit"><br>
                <?php
                    $keyName = "updatedProgram";
                    if(isset($_SESSION[$keyName])){
                        if($_SESSION[$keyName]){
                            echo "updated program";
                        }
                        else{
                            echo "failed to update program";
                        }
                        unset($_SESSION[$keyName]);
                    }
                ?>
            </form>
        </div>
        <?php
            include_once "displayPrograms.php";
        ?>
    </body>
</html>