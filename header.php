<?php
include "connection.php";
 

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="bootstrap-5.0.2-dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="dist/css/adminlte.min.css">

</head>
<body>
    

    <nav class="navbar navbar-expand-lg navbar-dark bg-dark sticky-top">
            <div class="container-fluid">
                <a class="navbar-brand" href="index.php">Online Oplan Visa Issuance</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarTogglerDemo02" aria-controls="navbarTogglerDemo02" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarTogglerDemo02">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    
                    <li class="nav-item">
                    <a class="nav-link" href="faq.php">FAQ</a>
                    </li>
                    <li class="nav-item">
                    <a class="nav-link" href="terms-condition.php">Terms and Conditions</a>
                    </li>
                    <li class="nav-item">
                    <a class="nav-link" href="announcement-list.php">Announcement list</a>
                    </li>
                    <?php
                    if(isset($_SESSION['isCustValid'])){ ?>
                    
                     <li class="nav-item">
                        <a class="nav-link" href="register-form.php">Register my visa</a>
                        </li>
                        <li class="nav-item">
                        <a href="status.php" class="nav-link">Check my status</a>
                        </li>

                        <li class="nav-item">
                        <a href="###" class="nav-link"  data-bs-toggle="modal" data-bs-target="#logout">Logout</a>
                        </li>
                        
                   <?php }
                    ?>
                </ul>
                </div>
            </div>
        </nav>
        <!-- Modal for logout -->
        <div class="modal fade" id="logout" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel"> <strong> Notice: </strong>You are about to logout. You want to proceed?</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                
                    <div class="modal-footer justify-content-between">
                        <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Close</button>
                        <a href="Actions/logout.php" type="submit" class="btn btn-success">Yes</a>
                    </div>
                </div>
            </div>
        </div>

  

   
</body>
<script src="bootstrap-5.0.2-dist/js/jquery.min.js"> </script>
<script src="bootstrap-5.0.2-dist/js/bootstrap.min.js"> </script>
</html>
