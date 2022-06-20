<?php
 include "connection.php";





if (isset($_POST['register'])){ 

	$fname=$_POST["fname"];
    $lname=$_POST["lname"];
	$email=$_POST["email"];
	$password=$_POST["password"];
    $pwdRepeat = $_POST["passrepeat"];
	$sql = "INSERT INTO tbl_admin_member (name,lname, email, password) VALUES (?,?,?,?)";


    $stmt = mysqli_stmt_init($conn);

    if($password!== $pwdRepeat){ 
        header("location: register.php?error=passwordnotmatch");
        exit();
    }
   
            if ((!mysqli_stmt_prepare($stmt, $sql))){
                header("location: Admin-login.php?error=stmtfailed");
                exit();
            }
            else{
                //hashing the password
                $hashedPwd = password_hash($password, PASSWORD_DEFAULT);
                mysqli_stmt_bind_param($stmt, "ssss", $fname,$lname, $email, $hashedPwd);
                mysqli_stmt_execute($stmt);
                mysqli_stmt_close($stmt);

                header("location: Admin-login.php?error=registeradminsuccess");
            }
        
    
}

?>
