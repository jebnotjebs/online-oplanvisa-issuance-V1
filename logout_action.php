<?php
    include "connection.php";

    session_start();
    session_destroy();

    if (isset($_GET['sessionExpired'])) {
        header("location:./session_expired.php");
    }
    else {
        header("location:./Admin-login.php");        
    }
?>
