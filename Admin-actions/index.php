<?php
    include "../connection.php";
    /* Avoid multiple sessions warning
    Check if session is set before starting a new one. */
    if(isset($_POST["submit"])){
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
               else{ ?>
                <div class="container">
                    <div class="alert col-lg-12"> 
                        <div class="alert alert-danger alert-dismissible fade show">
                            <strong>Error!</strong> Please Check Email and password.
                            <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
                        </div>
                        </div>
                  </div>
                <?php
               }
            }
        }
    }
    else{ ?>
        <div class="container">
              <div class="alert col-lg-12"> 
                  <div class="alert alert-danger alert-dismissible fade show">
                      <strong>Error!</strong> Please Check Email and password.
                      <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
                  </div>
                  </div>
            </div>

        <?php
    }         
  }
?>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Oplan Visa Issuance</title>
    <link rel="stylesheet" href="../bootstrap-5.0.2-dist/css/bootstrap.min.css" >
    <link rel="stylesheet" href="../bootstrap-5.0.2-dist/css/bootstrap-grid.min.css" >
    <link rel="stylesheet" href="../dist/css/adminlte.min.css">
    <link rel="stylesheet" href="../plugins/fontawesome-free/css/all.min.css">
</head>

<div class="container"> 
 <!-- This is the alert when the login is success -->

</div>
<body class="hold-transition login-page" style="background-color:rgb(170 182 191);">
  <div class="login-box">
    <div class="login-logo">
      <a><b>Oplan Visa Issuance </b>System </a>
    </div>

      <!-- /.login-logo -->
    <div class="card">
      <div class="card-body login-card-body">
        <p class="login-box-msg">Sign in to start your session</p>
         <!-- Log-in form -->
          <form action="" method="post"> <!-- you can also put the file in another folder para mas malinis --> 
            <div class="input-group mb-3">
              <input type="text" name="eml" class="form-control" placeholder="Email" required>
              <div class="input-group-append">
                <div class="input-group-text">
                  <span class="fas fa-user"></span>
                </div>
              </div>
            </div>
            <div class="input-group mb-3">
              <input type="password" name="pwd" class="form-control" placeholder="Password" required>
              <div class="input-group-append">
                <div class="input-group-text">
                  <span class="fas fa-lock"></span>
                </div>
              </div>
            </div>
            <div class="row">
              <!-- /.col -->
              <div class="col-12">
                <button type="submit" name="submit" class="btn btn-primary btn-block">Login</button>
              </div>
              <!-- /.col -->
            </div>
          </form>

          <p class="mb-0">
            <a href="register.php" class="text-center">Create new account</a>
          </p>
      </div><!-- /.login-card-body -->
    </div><!--card -->
  </div><!-- /.login-box -->



<script src="../plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<script src="../plugins/jquery/jquery.min.js"></script>
<script src="../bootstrap-5.0.2-dist/js/jquery.min.js"> </script>
<script src="../bootstrap-5.0.2-dist/js/bootstrap.min.js"> </script>
<script src="../bootstrap-5.0.2-dist/js/bootstrap.bundle.min.js"> </script>    
</body>
</html>
