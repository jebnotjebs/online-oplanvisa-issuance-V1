<?php
    include "../connection.php";
    /* Avoid multiple sessions warning
    Check if session is set before starting a new one. */
    
    $fname = mysqli_real_escape_string($conn, $_POST["eml"]);
    $password = mysqli_real_escape_string($conn, $_POST["pwd"]);
    
    

    $sql0 =  "SELECT * FROM tbl_admin_member WHERE email='".$fname."'"; 
   
    $result = $conn->query($sql0);
    $row = $result->fetch_assoc();//checking submitted email 
   
    $sql = mysqli_query($conn, "SELECT * FROM tbl_admin_member WHERE email = '".$fname."'"); //first check the email if there are any in database row
    if(mysqli_num_rows($sql)) {
        if(isset($_POST['submit'])) {
            if(mysqli_num_rows($result)){
                $checkPwd = password_verify($password, $row["password"]);
               if($checkPwd === true){
    
                session_start();
                $_SESSION['isAdminValid'] = true;
                header("location: ../dashboard.php");
               }
               else{
                session_destroy();
                die(header("location: index.php?error=loginfailed"));
               }
            }
        }
    }
    else{
        session_destroy();
        die(header("location: index.php?error=loginfailed"));
    }

   
    

   

  
?>
