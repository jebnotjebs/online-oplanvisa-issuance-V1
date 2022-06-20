<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Oplan Visa Issuance</title>
    <link rel="stylesheet" href="bootstrap-5.0.2-dist/css/bootstrap.min.css" >
    <link rel="stylesheet" href="bootstrap-5.0.2-dist/css/bootstrap-grid.min.css" >
    <link rel="stylesheet" href="dist/css/adminlte.min.css">
    <link rel="stylesheet" href="plugins/fontawesome-free/css/all.min.css">
    <link rel="stylesheet" href="Css/user-login.css">
</head>
<div class="container">
   <!-- This is the alert when the login is not verified -->
   <?php
        if(isset($_GET['error'])){
          if($_GET['error'] == "notverified"){ ?>
          <div class="container">
            <div class="alert col-lg-12"> 
                <div class="alert alert-danger alert-dismissible fade show">
                    <strong>Opps!</strong> Please verify your email address. <a href="Actions/re-verify.php">click here to verify.</a> 
                    <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
                </div>
                </div>
          </div>
          
              
          <?php  } 
        }
        
         ?>
            <!-- This is the alert when the login is success -->
          <?php
        if(isset($_GET['error'])){
          if($_GET['error'] == "none"){ ?>
          <div class="container">
            <div class="alert col-lg-12"> 
                <div class="alert alert-success alert-dismissible fade show">
                    <strong>Verification success!</strong> Please log-in.
                    <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
                </div>
                </div>
          </div>
          
              
          <?php  } 
        
         ?>

         <!-- this is alert when the stmt failed -->
         <?php
         if($_GET['error'] == "stmtfailed"){ ?>
          <div class="container">
            <div class="alert col-lg-12"> 
                <div class="alert alert-danger alert-dismissible fade show">
                    <strong>Invalid Credential!</strong> Please try again.
                    <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
                </div>
                </div>
          </div>
          
              
          <?php  } 
        
         ?>
         <!-- This is the alert when the login is invalid email -->
         <?php
          if($_GET['error'] == "invalidemail"){ ?>
          <div class="container">
            <div class="alert col-lg-12"> 
                <div class="alert alert-danger alert-dismissible fade show">
                    <strong>Warning!</strong> Email is invalid. Please check and try again.
                    <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
                </div>
                </div>
          </div>
          
              
          <?php  } 
        
         ?>
         <!-- This is the alert when the login is wrong pass -->
         <?php
        
          if($_GET['error'] == "wrongpassword"){ ?>
          <div class="container">
            <div class="alert col-lg-12"> 
                <div class="alert alert-danger alert-dismissible fade show">
                    <strong>Warning!</strong> Wrong password. Please try again.
                    <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
                </div>
                </div>
          </div>
          
              
          <?php  }
        } 
         ?>
          </div>
<body class="hold-transition login-page" style="background:#212529;">

<div class="login-box">
  <div class="login-logo">
    <a href="###" style="color: #d5d5d5">Oplan Visa Issuance System </a>
  </div>
  <!-- /.login-logo -->
  <div class="card">
    <div class="card-body login-card-body">
      <p class="login-box-msg">Sign in to start your session</p>
<!-- Log-in form -->
      <form action="Actions/login.php" method="post"> <!-- you can also put the file in another folder para mas malinis --> 
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

          <div class="col-12">
            <button type="submit" name="submit" class="btn btn-primary btn-block">Login</button>
          </div>
        </div>
      </form>
      <p class="mb-0">
        <a href="index.php" class="text-center">Register an account</a>
        <br>
        <a href="Admin-actions/" class="text-center">Login as admin</a>
      </p>
      
    </div>
  </div>
</div>
</body>

<script src="plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<script src="plugins/jquery/jquery.min.js"></script>
<script src="bootstrap-5.0.2-dist/js/jquery.min.js"> </script>
<script src="bootstrap-5.0.2-dist/js/bootstrap.min.js"> </script>
<script src="bootstrap-5.0.2-dist/js/bootstrap.bundle.min.js"> </script>    
</html>

