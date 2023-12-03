<?php
    include_once 'DbConnect.php';

    $certnum = $_POST['dccertenrollnum'];

    $sql = "DELETE FROM cert_enrollment
    WHERE CertE_Num = '$certnum'";
    mysqli_query($conn, $sql);

    header("Location: ../programtrack.php?signup=success");
?>