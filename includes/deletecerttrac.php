<?php
    include_once 'DbConnect.php';

    $certnum = mysqli_real_escape_string($conn,$_POST['dccertenrollnum']);

    $sql = "DELETE FROM cert_enrollment
    WHERE CertE_Num = '$certnum'";
    mysqli_query($conn, $sql);

    header("Location: ../programtrack.php?signup=success");
?>