<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
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

</body>
</html>