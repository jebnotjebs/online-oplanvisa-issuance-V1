<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<link rel="stylesheet" href="../bootstrap-5.0.2-dist/css/bootstrap.min.css" >
<link rel="stylesheet" href="../bootstrap-5.0.2-dist/css/bootstrap-grid.min.css" >
<link rel="stylesheet" href="../dist/css/adminlte.min.css">
<link rel="stylesheet" href="../plugins/fontawesome-free/css/all.min.css">

<body>
<title>Oplan Visa Issuance System </title>

 <!-- This is the alert when the login is success -->
 <?php
        if(isset($_GET['error'])){
          if($_GET['error'] == "passwordnotmatch"){ ?>
          <div class="container">
            <div class="alert col-lg-12"> 
                <div class="alert alert-danger alert-dismissible fade show">
                    <strong>Error!</strong> Password does not match. Please try again.
                    <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
                </div>
                </div>
          </div>
          
              
          <?php  } 
        
         ?>
         <?php
           if($_GET['error'] == "alreadyinuse"){ ?>
            <div class="container">
              <div class="alert col-lg-12"> 
                  <div class="alert alert-danger alert-dismissible fade show">
                      <strong>Error!</strong> Email is already in use.
                      <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
                  </div>
                  </div>
            </div>
            
                
            <?php  } 
        }
            ?>



<body class="hold-transition register-page" style="background-color:rgb(170 182 191);">
<div class="register-box">
<div class="register-logo">
  <a href="index.php"><b>Oplan Visa Issuance</b>System </a>
</div>

<div class="card">
  <div class="card-body register-card-body">
    <p class="login-box-msg">Create a account</p>

    <form action="admin_register_action.php" method="post">
    <div class="input-group mb-3">
        <input type="text" name="fname" class="form-control" placeholder="Firstname" required>
        <div class="input-group-append">
          <div class="input-group-text">
            <span class="fas fa-user"></span>
          </div>
        </div>
      </div>
      
      <div class="input-group mb-3">
        <input type="text" name="lname" class="form-control" placeholder="Lastname" required>
        <div class="input-group-append">
          <div class="input-group-text">
            <span class="fas fa-user"></span>
          </div>
        </div>
      </div>
      <div class="input-group mb-3">
        <input type="text" name="email" class="form-control" placeholder="Email" required>
        <div class="input-group-append">
          <div class="input-group-text">
            <span class="fas fa-envelope"></span>
          </div>
        </div>
      </div>
    
      <div class="input-group mb-3">
        <input type="password" name="password" class="form-control" placeholder="Password" required>
        <div class="input-group-append">
          <div class="input-group-text">
            <span class="fas fa-lock"></span>
          </div>
        </div>
      </div>
      <div class="input-group mb-3">
        <input type="password" name="passrepeat" class="form-control" placeholder="Confirm Password" required>
        <div class="input-group-append">
          <div class="input-group-text">
            <span class="fas fa-lock"></span>
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-8">
      
        </div>
        <!-- /.col -->
        <div class="col-12">
          <button type="submit" name="register" class="btn btn-primary btn-block">Register</button>
        </div>
        <!-- /.col -->
      </div>
    </form>

   
    <a href="index.php" class="text-center">I already have an account</a>
  </div>
  <!-- /.form-box -->
</div><!-- /.card -->
</div>
<!-- /.register-box -->

<script src="../plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<script src="../plugins/jquery/jquery.min.js"></script>
<script src="../bootstrap-5.0.2-dist/js/jquery.min.js"> </script>
<script src="../bootstrap-5.0.2-dist/js/bootstrap.min.js"> </script>
<script src="../bootstrap-5.0.2-dist/js/bootstrap.bundle.min.js"> </script>    
</body>
</html>