<?php      
$servername = "localhost";
$username = "root";
$password = "";
$db_name= "oplanvisa";

$conn = new mysqli($servername, $username, $password, $db_name);
if ($conn -> connect_error) {
    header("location:connection_error.php?error=$conn->connect_error");
    die($conn->connect_error);
}
?>  

<!-- $host = "localhost";  
    $user = "root";  
    $password = '';  
    $db_name = "bankproject";  
      
    $con = mysqli_connect($host, $user, $password, $db_name);  
    if(mysqli_connect_errno()) {  
        die("Failed to connect with MySQL: ". mysqli_connect_error());  
    }   -->