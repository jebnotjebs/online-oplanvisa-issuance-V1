<?php
 include "connection.php"
?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register as Administrator</title>
</head>

<?php
mysqli_select_db($con,$db);

if (isset($_POST['register']))
{ 

	$fullname=$_POST["fullname"];
	$address=$_POST["address"];
	$contact=$_POST["contact"];
	$email=$_POST["email"];
	$password=$_POST["password"];
	$sql = "INSERT INTO tbl_admin_member (name, address, contact, email, password) VALUES ('$fullname', '$address', '$contact', '$email', '$password')";

mysqli_select_db($con, $db);

$result = mysqli_query($con,$sql); 
if ((!$result))
	{
        die('Could not enter data: '.mysqli_error());
      
		
   	  }
  else{

        echo"saved data succesfully!";
        header ("refresh:2; url=Admin-login.php");
        mysqli_close($con);
       }
   
       
 
 }
?>
</body>
</html>