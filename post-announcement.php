<?php
include "Actions/verify-admin.php";
include "connection.php";



 //this is for admin member
 $sql0 = "SELECT * FROM tbl_admin_member";
 $result0 = $conn->query($sql0);
 $row0 = $result0->fetch_assoc();
 //this is for pending application
 $sql1 = "SELECT * FROM tbl_application_user";
 $result1 = $conn->query($sql1);
 $row1 = $result1->fetch_assoc();

 

?>

<html>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Oplan Visa Issuance System</title>
    
    <link rel="stylesheet" href="bootstrap-5.0.2-dist\css\bootstrap.min.css">
   <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="plugins/fontawesome-free/css/all.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.1/css/ionicons.min.css">
  <!-- Tempusdominus Bootstrap 4 -->
  <link rel="stylesheet" href="plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css">
  <!-- iCheck -->
  <link rel="stylesheet" href="plugins/icheck-bootstrap/icheck-bootstrap.min.css">
  <!-- JQVMap -->
  <link rel="stylesheet" href="plugins/jqvmap/jqvmap.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="dist/css/adminlte.min.css">
  <!-- overlayScrollbars -->
 
</head>
<body class="hold-transition sidebar-mini layout-fixed">
<div class="wrapper">

  <!-- Navbar -->
  <nav class="main-header navbar navbar-expand navbar-white navbar-light">
    <!-- Left navbar links -->
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
      </li>
    
    </ul>
    <!-- Right navbar links -->
    <ul class="navbar-nav ml-auto">
      <li class="nav-item">
        <a class="nav-link" data-widget="fullscreen" href="#" role="button">
          <i class="fas fa-expand-arrows-alt"></i>
        </a>
      </li>
     
    </ul>
  </nav> <!-- /.navbar -->
 
  
  <!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- isu Logo -->
    <a href="" class="brand-link">
      <img src="img/alfonsolista.png" alt="alfonsolista logo" class="brand-image img-circle elevation-3" style="opacity: .8">
      <span class="brand-text font-weight-light">Oplan Visa Issuance</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
   <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
    <img src="dist/img/avatar.png" class="img-square elevation-3" style="width:30px;  border-radius:10%;" alt="User Image">        </div>
        <div class="info">
          <a href="#" class="d-block" style="margin-top: -12px"><?php echo $row0["name"] ?></a>
         <a href="#" style="color: #239db1; font-size: 15px"><i class="fa fa-circle text-primary" style="font-size: 13px;"></i> Admin</a>
        </div>

      </div>

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
          <li class="nav-item">
            <a href="dashboard.php" class="nav-link">
              <i class="nav-icon fas fa-tachometer-alt"></i>
              <p>
                Dashboard
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="post-announcement.php" class="nav-link active">
              <i class="nav-icon fas fa-edit"></i>
              <p>
                Post announcement
              </p>
            </a>
          </li>
          <!-- this where all the pending application store -->
          <li class="nav-item">
            <a href="pending_application.php" class="nav-link">
              <i class="nav-icon fas fa-users-cog"></i>
              <p>
                Pending Application
              </p>
            </a>
          </li>
          <!-- user management this where you can edit the names of all admins -->
          <li class="nav-item">
                    <a href="registered-member.php" class="nav-link">
                    <i class="nav-icon fas fa-id-card"></i>
                    <p>
                  Approved Member
                    </p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="registered-w-visa.php" class="nav-link">
                    <i class="nav-icon fas fa-id-card"></i>
                    <p>
                  Registered member
                    </p>
                    </a>
                </li>

         <!-- this is the log-out promt -->
          <li class="nav-item">
            <a href="" class="nav-link" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#logout">
              <i class="nav-icon fas fa-power-off"></i>
              <p>
                Logout
              </p>
            </a>
          </li>

        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside> 
 
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
                        <a href="Admin-actions/admin-logout.php" type="submit" class="btn btn-success">Yes</a>
                      </div>
                    </div>
                  </div>
                </div>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">

    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Post announcement</h1>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div><!-- /.content-header -->

    <!-- This is the alert when the post is success -->
        <?php
        if(isset($_GET['error'])){
          if($_GET['error'] == "postsuccess"){ ?>
              <div class="container"> 
            <div class="alert alert-success alert-dismissible fade show">
                <strong>Success!</strong> The announcement has been posted successfully.
                <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
            </div>
            </div>
          <?php  } 
         ?>
      <!-- This is the alert when deleted is success -->
        <?php
        if($_GET['error'] == "deletedsuccessfully"){ ?>
              <div class="container"> 
            <div class="alert alert-success alert-dismissible fade show">
                The announcement has been deleted successfully.
                <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
            </div>
            </div>
          <?php  } 
        } ?>
    

    <section class="content">
    <div class="container">
            <form action="Actions/post-announcement-action.php" method="post">
            <div class="form-floating mb-3">
                <input type="" name="title" class="form-control" id="floatingInput" placeholder="name@example.com" required >
                <label for="floatingInput">Title</label>
            </div>
            <div class="form-floating">
                <textarea class="form-control" name ="body" placeholder="Write a announcement here" id="floatingTextarea2" style="height: 100px" required ></textarea>
                <label for="floatingTextarea2">Content</label>
            </div>
            <div class="col text-center btn-lg">
             <!-- Button trigger modal -->
             <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#post">
                  Post announcement
                </button>
            </div>
               

                <!-- Modal -->
                <div class="modal fade" id="post" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                  <div class="modal-dialog">
                    <div class="modal-content">
                      <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel"> <strong> Notice: </strong>To avoid multiple announcement, Please make sure you deleted your recent announcement before posting a new one.</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                      </div>
                     
                      <div class="modal-footer justify-content-between">
                        <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-primary" name="submit" data-bs-dismiss="modal">Post</button>
                      </div>
                    </div>
                  </div>
                </div>
            </form>
        </div>
        
    </section>
    <div class="container">
    <div class="card">
                    <div class="card-header">
                        <h3>  Current announcement</h3> 
                       
                   
                    </div>
   
    
                    <table id="example1" class="table table-bordered table-striped">
                                    <thead>
                                    <tr>

                                      <th>Announcement title</th>
                                      <th>Announcement content</th>
                                      <th>Date</th>
                                      <th width="7%"></th>
                                    </tr>
                                    </thead>
                                    <!-- this where i inputted the data base of admin management -->
    <?php
    
         $sql0 = "SELECT post_id, title,body, created FROM announcement";
            $result = $conn->query($sql0);

            if ($result->num_rows > 0) {
            // output data of each row
            $i = 0;
            while($row = $result->fetch_assoc()) {
                $i++; ?>

                 
                                    
                                    <tbody>
                                    <tr>
                                      
                                      <td><?php echo $row["title"]; ?></td>
                                      <td><?php echo $row["body"]; ?></td>
                                      <td><?php echo $row["created"]; ?></p></td>
                                      <td><button class="btn btn-danger btn-xs" data-bs-toggle="modal" data-bs-target="#delete<?php echo $row["post_id"]?>"><i class="fa fa-trash"></i></button></td>
                                      
                                    </tr>
                                    </tbody>
                            
                                  
                    </div>
                    <div class="flex-item-1">
                   
                        <!-- Modal -->
                        <div class="modal fade" id="delete<?php echo $row["post_id"]?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                        <div class="modal-dialog">
                            <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalLabel"> <strong>Notice: </strong>  You are about to delete this announcement. You want to proceed?</h5>
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
                            
                            <div class="modal-footer justify-content-between">
                                <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Close</button>
                                <a href="Actions/delete-announcement-action.php?post_id=<?php echo $row["post_id"] ?>" type="submit" class="btn btn-success"   value="">Delete</a>
                            </div>
                            </div>
                        </div>
                        </div>
                    </div>
               
          
            <?php }
            } else{
              echo "No current data";
            } ?>
         </table>
         </div>
         </div>
        
   



  </div>  <!-- /.content-wrapper -->


  <footer class="main-footer">
    <strong>Footer <a href="">Oplan Visa Issuance System</a>.</strong>
    All rights reserved.
    <div class="float-right d-none d-sm-inline-block">
      <b>Footer</b>
    </div>
  </footer>
 <!-- Control Sidebar -->
 <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
  </aside>
  <!-- /.control-sidebar -->
  <!-- jQuery to trigger the bootstrap 5 -->
  <script src="bootstrap-5.0.2-dist/js/jquery.min.js"> </script>
  <script src="bootstrap-5.0.2-dist/js/bootstrap.min.js"> </script>
  <script src="plugins/jquery/jquery.min.js"></script>
<!-- jQuery UI 1.11.4 -->
<script src="plugins/jquery-ui/jquery-ui.min.js"></script>
<!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
<script>
  $.widget.bridge('uibutton', $.ui.button)
</script>
<!-- Bootstrap 4 -->
<script src="plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- ChartJS -->
<script src="plugins/chart.js/Chart.min.js"></script>
<!-- Sparkline -->
<script src="plugins/sparklines/sparkline.js"></script>
<!-- JQVMap -->
<script src="plugins/jqvmap/jquery.vmap.min.js"></script>
<script src="plugins/jqvmap/maps/jquery.vmap.usa.js"></script>
<!-- jQuery Knob Chart -->
<script src="plugins/jquery-knob/jquery.knob.min.js"></script>
<!-- daterangepicker -->
<script src="plugins/moment/moment.min.js"></script>
<script src="plugins/daterangepicker/daterangepicker.js"></script>
<!-- Tempusdominus Bootstrap 4 -->
<script src="plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js"></script>
<!-- Summernote -->
<script src="plugins/summernote/summernote-bs4.min.js"></script>
<!-- overlayScrollbars -->
<script src="plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js"></script>
<!-- AdminLTE App -->
<script src="dist/js/adminlte.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="dist/js/demo.js"></script>
<!-- AdminLTE dashboard demo (This is only for demo purposes) -->


</body>
</html>