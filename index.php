<?php
include "connection.php";
session_start();
include "header.php";


?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <link href="Css/index1.css" rel="stylesheet">
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <link rel="stylesheet" href="dist/css/adminlte.min.css">
    <link rel="stylesheet" href="plugins/fontawesome-free/css/all.min.css"> <!-- this is for the icons-->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link href="Css/announcement.css" rel="stylesheet">
</head>
<body>
    <?php
            $sql0 = "SELECT post_id, title, body, created FROM announcement ORDER BY created DESC";
            $result = $conn->query($sql0);
            $row = $result->fetch_assoc();

            if($row){ ?>
                <div class="banner">
                    <div class="banner__content">
                    <div class="banner__text">
                        <a href="announcement-list.php" style="color:white;" > <strong>Announcement: </strong><?php echo $row["title"] . "! "; echo $row["body"];?></a>  
                    </div>
                    <button class="banner__close" type="button">
                        <span class="material-icons">
                        x
                        </span>
                    </button>
                    </div>
                </div>
                <?php
            }?>
            



          
        <!-- This is the alert when the login is success -->
          <?php
        if(isset($_GET['error'])){
          if($_GET['error'] == "registersuccessfuly"){ ?>
          <div class="container">
            <div class="alert col-lg-12"> 
                <div class="alert alert-success alert-dismissible fade show">
                    <strong>Submission Success!</strong> We will send you a message using your contact number once we are done checking your submission.
                    <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
                </div>
                </div>
          </div>
          
              
          <?php  } 
        
         ?>
         <?php
         if($_GET['error'] == "emailisalreadyinuse"){ ?>
          <div class="container">
            <div class="alert col-lg-12"> 
                <div class="alert alert-danger alert-dismissible fade show">
                    <strong>Sorry!</strong> The email you have entered is already in use. Please use another email.
                    <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
                </div>
                </div>
          </div>
          <?php  } 
        
         ?>
         <?php
         if($_GET['error'] == "passworddontmatch"){ ?>
          <div class="container">
            <div class="alert col-lg-12"> 
                <div class="alert alert-danger alert-dismissible fade show">
                    <strong>Warning!</strong> The password does not match. Please do it again.
                    <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
                </div>
                </div>
          </div>        
          <?php  } 
         ?>
         <?php
         if($_GET['error'] == "invalidemail"){ ?>
          <div class="container">
            <div class="alert col-lg-12"> 
                <div class="alert alert-danger alert-dismissible fade show">
                    <strong>Warning!</strong> The email you have entered is invalid. Please check your email.
                    <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
                </div>
                </div>
          </div>
          <?php  } 
         ?>
          <?php
         if($_GET['error'] == "emailalreadytaken"){ ?>
          <div class="container">
            <div class="alert col-lg-12"> 
                <div class="alert alert-danger alert-dismissible fade show">
                    <strong>Warning!</strong> The email you have entered is already taken.
                    <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
                </div>
                </div>
          </div>
          <?php
            }
         }
        ?>

<div class="container register">
                <div class="row">
                    <div class="col-md-3 register-left">
                        <img src="img/alfonsolista.png" alt="alfonsolista logo"/>
                        <h3>Welcome</h3>
                        <p>You are 30 seconds away from registering your visa!</p>
                        <a href="user-login.php" type="submit" name="" value="Login">Log in</a>
                    </div>
                    <div class="col-md-9 register-right">
                        <!--<ul class="nav nav-tabs nav-justified" id="myTab" role="tablist">
                            <li class="nav-item">
                                <a class="nav-link active" id="home-tab" data-toggle="tab" href="#home" role="tab" aria-controls="home" aria-selected="true">User</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" id="profile-tab" data-toggle="tab" href="#profile" role="tab" aria-controls="profile" aria-selected="false">Admin</a>
                            </li>
                        </ul>-->
                        
                      <section class="signup-form">
                        <form action="Actions/signup.php" method="post">
                          <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
                                <h3 class="register-heading">Register your account</h3>
                                <div class="row register-form">
                                    
                                <div class="col-md-12">
                                    <div class="input-group mb-3">
                                        <input type="text" name="eml" class="form-control" placeholder="Email" required>
                                        <div class="input-group-append">
                                        <div class="input-group-text">
                                            <span class="fas fa-envelope"></span>
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

                                    <div class="input-group mb-3">
                                        <input type="password" name="pwdrepeat" class="form-control" placeholder="Confirm Password" required>
                                        <div class="input-group-append">
                                        <div class="input-group-text">
                                            <span class="fas fa-lock"></span>
                                        </div>
                                        </div>
                                    </div>
                                        <input type="submit" name="submit" class="btnRegister"  value="Sign Up "/>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                  </form>
               </section>
            </div><!-- container register -->
            
            <div class="text-center">
            <div class="container">
            <div class="alert col-lg-12"> 
                <div class="alert alert-secondary alert-dismissible fade show">
               You can watch the tutorial here. Just <a href="video_tutorial.php" target="_blank" class="alert-link">click here</a>. 
                    <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
                </div>
                </div>
          </div>
            </div>
           
          
            
 <script src="plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<script>
document.querySelector(".banner__close").addEventListener("click", function () {
  this.closest(".banner").style.display = "none";
});
</script>
</body>
</html>