<?php
    include_once 'includes/startSession.php';
    include_once "includes/DbConnect.php";

    if($_POST['full-delete']){
        // deleting from Event
        $sql = "DELETE FROM Event
        WHERE Program_Num = " . $_POST["program-id"] . ";";
        $result = mysqli_query($conn, $sql);

        // deleting Documents
        // selecting applications fo find documents
        $sql = "SELECT * FROM Application
        WHERE Program_Num = " . $_POST["program-id"] . ";";
        $result = mysqli_query($conn, $sql);
        $resultCheck = mysqli_num_rows($result);
        if($resultCheck > 0){
            while($row = mysqli_fetch_assoc($result)){
                // selecting documents peratining to this application
                $sql = "SELECT * FROM Documentation
                WHERE App_Num = " . $row['App_Num'] . ";";
                $resultDoc = mysqli_query($conn, $sql);
                $resultCheck = mysqli_num_rows($result);
                
                if($resultCheck > 0){
                    while($rowDoc = mysqli_fetch_assoc($resultDoc)){
                        // unlinking the documents we are about to delete
                        unlink($rowDoc['Link']);
                    }
                }

                // deleting the documents
                $sql = "DELETE FROM Documentation
                WHERE App_Num = " . $row['App_Num'] . ";";
                $resultDoc = mysqli_query($conn, $sql);
            }
            
        }
        
        // deleting from Application
        $sql = "DELETE FROM Application
        WHERE Program_Num = " . $_POST["program-id"] . ";";
        $result = mysqli_query($conn, $sql);

        // deleting from Track
        $sql = "DELETE FROM Track
        WHERE Program = " . $_POST["program-id"] . ";";
        $result = mysqli_query($conn, $sql);

        // deleting from Cert_Enrollment
        $sql = "DELETE FROM Cert_Enrollment
        WHERE Program_Num = " . $_POST["program-id"] . ";";
        $result = mysqli_query($conn, $sql);

        // deleting from programs table
        $sql = "DELETE FROM Programs
        WHERE Program_Num = " . $_POST["program-id"] . ";";
        $result = mysqli_query($conn, $sql);

        $keyName = "deletedProgram";
        if($result){
            $_SESSION[$keyName] = true;
        }
        else{
            $_SESSION[$keyName] = false;
        }
    }
    else{
        // deleting from track table to remove access to program from students
        $sql = "DELETE FROM Track
        WHERE Program = " . $_POST["program-id"] . ";";

        $result = mysqli_query($conn, $sql);

        $keyName = "deletedProgram";
        if($result){
            $_SESSION[$keyName] = true;
        }
        else{
            $_SESSION[$keyName] = false;
        }
    }
    header("Location: programInfo.php");