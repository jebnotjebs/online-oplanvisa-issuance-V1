<?php
include "Actions/verify-admin.php";
include "connection.php";
//this is for admin member
$sql1 = "SELECT * FROM tbl_admin_member";
$result1 = $conn->query($sql1);
$row1 = $result1->fetch_assoc();
//this is for pending application
$sql0 = "SELECT * FROM tbl_registered_member";
$result0 = $conn->query($sql0);
$row0 = $result0->fetch_assoc();
   
   
   
    
?>


<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registered Member</title>
</head>
<body>
<link href="bootstrap-5.0.2-dist/css/bootstrap.min.css" rel="stylesheet">
     <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="plugins/fontawesome-free/css/all.min.css">
  <!-- DataTables -->
  
  <link rel="stylesheet" href="plugins/datatables-responsive/css/responsive.bootstrap4.min.css">
  <link rel="stylesheet" href="plugins/datatables-buttons/css/buttons.bootstrap4.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="dist/css/adminlte.min.css">
   <!-- lighbox css -->
  <link rel="stylesheet" href="Css/lightbox.min.css">
  <link rel="stylesheet" href="uploads.css">

<body class="hold-transition sidebar-mini">
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
                    <!-- Notifications Dropdown Menu -->

                    <li class="nav-item">
                        <a class="nav-link" data-widget="fullscreen" href="#" role="button">
                        <i class="fas fa-expand-arrows-alt"></i>
                        </a>
                    </li>   
                </ul>
            </nav>
        <aside class="main-sidebar sidebar-dark-primary elevation-4">
            <!-- Brand Logo -->
            <a href="" class="brand-link">
            <img src="img/alfonsolista.png" alt="alfonsolista logo" class="brand-image img-circle elevation-3" style="opacity: .8">
            <span class="brand-text font-weight-light">Oplan Visa System</span>
            </a>

            <!-- Sidebar -->
            <div class="sidebar">
            <!-- Sidebar user panel (optional) -->
            <div class="user-panel mt-3 pb-3 mb-3 d-flex">
                    <div class="image">
                <img src="dist/img/avatar.png" class="img-square elevation-3" style="width:30px;  border-radius:10%;" alt="admin Image">     
                   </div>
                    <div class="info">
                    <a href="#" class="d-block" style="margin-top: -12px"><?php echo $row1["name"] ?></a>
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
                    <a href="post-announcement.php" class="nav-link">
                    <i class="nav-icon fas fa-edit"></i>
                    <p>
                        Post announcement
                    </p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="pending_application.php" class="nav-link">
                    <i class="nav-icon fas fa-users-cog"></i>
                    <p>
                        Pending Application
                    </p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="registered-member.php" class="nav-link active">
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
               
                
                
                <li class="nav-item">
                <a href="###" class="nav-link" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#logout">
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
        <!-- Modal -->
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
            <!-- Content Header (Page header) -->
            <section class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1>All Registered Member</h1>
                    </div>
                </div>
            </div><!-- /.container-fluid -->
            </section>

            <!-- this is success trappings-->
            <?php
        if(isset($_GET['error'])){
          if($_GET['error'] == "registersuccessfully"){ ?>
              <div class="container"> 
            <div class="alert alert-success alert-dismissible fade show">
                <strong>Success!</strong> new member registered successfully.
                <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
            </div>
            </div>
          <?php  } 
         ?>
      <!-- This is the alert when deleted is success -->
        <?php
        if($_GET['error'] == "smssent"){ ?>
              <div class="container"> 
            <div class="alert alert-success alert-dismissible fade show">
                The sms has been delivered!
                <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
            </div>
            </div>
          <?php  } 
        } ?>
          <!-- Main content -->
            <section class="content">
            <div class="container-fluid">
                <div class="row">
                <div class="col-12">
            <!-- this is when you manualy add a client -->

                    <div class="card">
                    <div class="card-header">
                        <h3 class="card-title">Registered member table</h3> 
                         <!-- add manually client-->
                    <button class="btn btn-success btn-xs" style="margin-left: 74%" data-toggle="modal" data-target="#add"><i class="fa fa-plus"></i> Add</button>
                    <div class="modal fade" id="add">
                                <div class="modal-dialog modal-md">
                                    <form action="Actions/add-action.php" method="post">
                                <div class="modal-content">
                                    <div class="modal-header">
                                    <h4 class="modal-title">User Application</h4>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                    </div>
                                    <div class="card card-primary">
                                    <div class="card-body">
                                        <div class="row">
                                        <div class="col-6">
                                        <div class="form-group">
                                            <label for="exampleInputEmail1">First Name</label>
                                        <input type="text" name="FName" class="form-control" required>
                                        </div>
                                    </div>
                                    <div class="col-6">
                                        <div class="form-group">
                                            <label for="exampleInputEmail1">Last Name</label>
                                        <input type="text" name="LName" class="form-control">
                                        </div>
                                    </div>
                                    <div class="col-4">
                                        <div class="form-group">
                                        <label for="exampleInputEmail1">Barangay</label>
                                        <input type="text" name="Baranggay" class="form-control">
                                        </div>
                                    </div>
                                    <div class="col-4">
                                        <div class="form-group">
                                        <label for="exampleInputEmail1">City</label>
                                        <input type="text" name="City" class="form-control">
                                        </div>
                                    </div>
                                    <div class="col-4">
                                        <div class="form-group">
                                        <label for="exampleInputEmail1">Province </label>
                                        <input type="text" name="Province" class="form-control">
                                        </div>
                                    </div>
                                    <div class="col-6">
                                        <div class="form-group">
                                        <label for="exampleInputEmail1">Control Number</label>
                                        <input type="text" name="Control_Num" class="form-control">
                                        </div>
                                    </div>
                                    <div class="col-6">
                                        <div class="form-group">
                                        <label for="exampleInputEmail1">Contact</label>
                                        <input type="text" name="Mobile_Num" class="form-control">
                                        </div>
                                    </div>
                                    <div class="col-12">
                                       <h4>Motorcycle Description</h4>
                                    </div>
                                    
                                    <div class="col-4">
                                        <div class="form-group">
                                        <label for="exampleInputEmail1">Make</label>
                                        <input type="text" name="Make" class="form-control">
                                        </div>
                                    </div>
                                    <div class="col-4">
                                        <div class="form-group">
                                        <label for="exampleInputEmail1">Model</label>
                                        <input type="text" name="Model" class="form-control">
                                        </div>
                                    </div>
                                    <div class="col-4">
                                        <div class="form-group">
                                        <label for="exampleInputEmail1">Color</label>
                                        <input type="text" name="Color" class="form-control">
                                        </div>
                                    </div>
                                    <div class="col-6">
                                        <div class="form-group">
                                        <label for="exampleInputEmail1">Engine Number</label>
                                        <input type="text" name="Engine_Num" class="form-control">
                                        </div>
                                    </div>
                                    <div class="col-6">
                                        <div class="form-group">
                                        <label for="exampleInputEmail1">Engine Displacement</label>
                                        <input type="text" name="Engine_Dspcmt" class="form-control">
                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <div class="form-group">
                                        <label for="exampleInputEmail1">Chasis Number</label>
                                        <input type="text" name="Chasis_Num" class="form-control">
                                        </div>
                                    </div>
                                    <div class="col-6">
                                        <div class="form-group">
                                        <label for="exampleInputEmail1">OR Number</label>
                                        <input type="text" name="OR_Num" class="form-control">
                                        </div>
                                    </div>
                                    <div class="col-6">
                                        <div class="form-group">
                                        <label for="exampleInputEmail1">CR Number</label>
                                        <input type="text" name="CR_Num" class="form-control">
                                        </div>
                                    </div>
                                    <div class="col-6">
                                        <div class="form-group">
                                        <label for="exampleInputEmail1">Plate Number</label>
                                        <input type="text" name="Plate_Num" class="form-control">
                                        </div>
                                    </div>
                                    <div class="col-6">
                                        <div class="form-group">
                                        <label for="exampleInputEmail1">Type of ownership</label>
                                        <input type="text" name="Ownership" class="form-control">
                                        </div>
                                    </div>
                                   
                             </div>
                             </div>
                             </div>
                                    <div class="modal-footer justify-content-between">
                                    <button type="button" class="btn btn-danger" data-dismiss="modal"><i class="fa fa-times"></i> Close</button>
                                    <a class="btn btn-primary" data-bs-toggle="modal" href="#exampleModalToggle" role="button">Submit</a>
                                    
                                    </div>
                                    <div class="d-grid gap-2 col-3 mx-auto">
                    
                                        <div class="modal fade" id="exampleModalToggle" aria-hidden="true" aria-labelledby="exampleModalToggleLabel" tabindex="-1">
                                            <div class="modal-dialog">
                                                <div class="modal-content">
                                                <div class="modal-header">
                                                    <h5 class="modal-title" id="exampleModalToggleLabel"> <strong>Notice: </strong> You are about to register this person</h5>
                                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                </div>
                                                <div class="modal-body">
                                                 <p>Are you sure to proceed?</p>
                                                </div>
                                                <div class="modal-footer justify-content-between">
                                                
                                                <button class="btn btn-danger" type="submit" data-bs-target="#exampleModalToggle2" data-bs-toggle="modal" data-bs-dismiss="modal">Close</button>
                                                <button class="btn btn-primary" name ="submit" type="submit">Submit</button>
                                                </div>
                                                </div>
                                            </div>
                                        </div>                                     
                                </div>
                                
                                </form>
                                </div><!-- /.modal-content -->
                                <!-- Modal of tryiong to add-->
                            </div> <!-- /.modal-dialog -->
                    </div>
                    <!-- /.card-header -->
                <div class="card-body">
                    <table id="example1" class="table table-bordered table-striped">    
                         <thead>
                            <tr>
                                <th>Avatar</th>
                                <th>Firstname</th>
                                <th>Lastname</th>
                                            
                                <th>Address</th>
                                <th>Date of submittion</th>
                               <th>Time of submittion</th>                       
                                <th width="7%"></th>
                                <th width="7%"></th>
                            </tr>
                        </thead>
                  
                    <?php
                    
                    $result = $conn->query($sql0);

                    if ($result->num_rows > 0) {
                    // output data of each row
                    $i = 0;
                    while($row = $result->fetch_assoc()) {
                        $i++; ?>
                                    <!-- this is all data in mini view -->
                                <tr>
                                    <td><img src="dist/img/avatar.png" class="img-square elevation-3" style="width:50px;  border-radius:10%;" alt="User Image">   </td>
                                    <td><?php echo $row["FName"] ?></td>
                                    <td><?php echo $row["LName"] ?></td>
                                    <td><?php echo $row["Baranggay"] . ", " . $row["City"] . ", " . $row["Province"] ?></td>
                                    <td><?php echo date("d/m/Y", strtotime($row["Date"])); ?></td>
                                    <td><?php echo date("h:i:s:a", strtotime($row["Date"])); ?></td>
                                    <td><button class="btn btn-primary btn-sm" data-toggle="modal" data-target="#view<?php echo $row["userid"];?>"><i class="fa fa-edit"></i></button>
                                    <button class="btn btn-success btn-sm" data-toggle="modal" data-target="#move<?php echo $row["userid"];?>"><i class="fas fa-check"></i></button>
                                    <td><button class="btn btn-primary btn-sm" data-toggle="modal" data-target="#message<?php echo $row["userid"];?>"><i class="fas fa-sms"></i></button>
                                    
                                     
                                    
                                                      
                                </tr>   
                                 <!-- Modal of tryiong to move all data in registered with visa-->
                                 <div class="modal fade" data-dismiss="modal" id="move<?php echo $row["userid"];?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                                <div class="modal-dialog">
                                                    <div class="modal-content">
                                                        <div class="modal-header">
                                                            <h5 class="modal-title" id="exampleModalLabel"> <strong>Warning!</strong>  You are about to move <?php echo $row["FName"]. " ". $row["LName"];?> application. This means <?php echo $row["FName"]. " ". $row["LName"];?> already got his Visa. <br>You want to proceed?</h5>
                                                            <button type="button" class="btn-close" data-dismiss="modal" aria-label="Close"></button>
                                                        </div>
                                                
                                                    
                                                    <div class="modal-footer justify-content-between">
                                                        <button type="button" class="btn btn-danger" data-dismiss="modal">No</button>
                                                        <a href="Actions/move-registered-visa-action.php?userid=<?php echo $row["userid"]; ?>" type="submit" class="btn btn-success"   value="">Yes</a>
                                                    </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- Modal of tryiong to message the client-->
                                 <div class="modal fade" data-dismiss="modal" id="message<?php echo $row["userid"];?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                                <div class="modal-dialog">
                                                    <div class="modal-content">
                                                        <div class="modal-header">
                                                            <h5 class="modal-title" id="exampleModalLabel">Notice: You are about to message <?php echo $row["FName"]. " ". $row["LName"];?>'s phone number. <br>You want to proceed?</h5>
                                                            <button type="button" class="btn-close" data-dismiss="modal" aria-label="Close"></button>
                                                        </div>
                                                
                                                    
                                                    <div class="modal-footer justify-content-between">
                                                        <button type="button" class="btn btn-danger" data-dismiss="modal">No</button>
                                                        <a href="Actions/sms-action.php?userid=<?php echo $row["userid"]; ?>" type="submit" class="btn btn-success"   value="">Yes</a>
                                                    </div>
                                                    </div>
                                                </div>
                                            </div>
                                 
                                 <!-- this is modal full view -->
                                <div class="modal fade" id="view<?php echo $row["userid"]?>">
                                <div class="modal-dialog modal-md">
                                    <form action="">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h4 class="modal-title">User Application</h4>
                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                    <span aria-hidden="true">&times;</span>
                                                </button>
                                            </div> <!-- modal header -->

                                                <div class="card card-primary">
                                                    <div class="card-body">
                                                        <div class="row">
                                                            <div class="col-12">
                                                                <div class="form-group">
                                                                    <label for="exampleInputEmail1">Complete name</label>
                                                                <input type="text" class="form-control" id="" placeholder="<?php echo $row["FName"]. " ". $row["LName"]?>">
                                                                </div>
                                                            </div>
                                                            <div class="col-12">
                                                                <div class="form-group">
                                                                <label for="exampleInputEmail1">Full address</label>
                                                                <input type="text" class="form-control" id="" placeholder="<?php echo $row["Province"]. " ". $row["City"]. " ". $row["Baranggay"]?>">
                                                                </div>
                                                            </div>
                                                            <div class="col-6">
                                                                <div class="form-group">
                                                                <label for="exampleInputEmail1">Control number</label>
                                                                <input type="text" class="form-control" id="" placeholder="<?php echo $row["Control_Num"]?>">
                                                                </div>
                                                            </div>
                                                            <div class="col-6">
                                                                <div class="form-group">
                                                                <label for="exampleInputEmail1">Contact</label>
                                                                <input type="text" class="form-control" id="" placeholder="<?php echo $row["Mobile_Num"]?>">
                                                                </div>
                                                                </div>
                                                                <div class="col-12">
                                                                <h4>Motorcycle Description</h4>
                                                                </div>
                                                                <div class="col-4">
                                                                    
                                                                    <div class="form-group">
                                                                    <label for="exampleInputEmail1">Make</label>
                                                                    <input type="text" class="form-control" id="" placeholder="<?php echo $row["Make"]?>">
                                                                    </div>
                                                                </div>
                                                                <div class="col-4">
                                                                    <div class="form-group">
                                                                    <label for="exampleInputEmail1">Model</label>
                                                                    <input type="text" class="form-control" id="" placeholder="<?php echo $row["Model"]?>">
                                                                    </div>
                                                                </div>
                                                                <div class="col-4">
                                                                    <div class="form-group">
                                                                    <label for="exampleInputEmail1">Color</label>
                                                                    <input type="text" class="form-control" id="" placeholder="<?php echo $row["Color"]?>">
                                                                    </div>
                                                                </div>
                                                                <div class="col-6">
                                                                    <div class="form-group">
                                                                    <label for="exampleInputEmail1">Engine number</label>
                                                                    <input type="text" class="form-control" id="" placeholder="<?php echo $row["Engine_Num"]?>">
                                                                    </div>
                                                                </div>
                                                                <div class="col-6">
                                                                    <div class="form-group">
                                                                    <label for="exampleInputEmail1">Engine displacement</label>
                                                                    <input type="text" class="form-control" id="" placeholder="<?php echo $row["Engine_Dspcmt"]?>">
                                                                    </div>
                                                                </div>
                                                                <div class="col-12">
                                                                    <div class="form-group">
                                                                    <label for="exampleInputEmail1">Chasis number</label>
                                                                    <input type="text" class="form-control" id="" placeholder="<?php echo $row["Chasis_Num"]?>">
                                                                    </div>
                                                                </div>
                                                                <div class="col-6">
                                                                    <div class="form-group">
                                                                    <label for="exampleInputEmail1">OR number</label>
                                                                    <input type="text" class="form-control" id="" placeholder="<?php echo $row["OR_Num"]?>">
                                                                    </div>
                                                                </div>
                                                                <div class="col-6">
                                                                    <div class="form-group">
                                                                    <label for="exampleInputEmail1">CR number</label>
                                                                    <input type="text" class="form-control" id="" placeholder="<?php echo $row["CR_Num"]?>">
                                                                    </div>
                                                                </div>
                                                                <div class="col-6">
                                                                    <div class="form-group">
                                                                    <label for="exampleInputEmail1">Plate number</label>
                                                                    <input type="text" class="form-control" id="" placeholder="<?php echo $row["Plate_Num"]?>">
                                                                    </div>
                                                                </div>
                                                                <div class="col-6">
                                                                    <div class="form-group">
                                                                    <label for="exampleInputEmail1">Utility type</label>
                                                                    <input type="text" class="form-control" id="" placeholder="<?php echo $row["Ownership"]?>">
                                                                    </div>
                                                                </div>
                                                               
                                                        </div>
                                                  </div> <!-- card body -->
                                             </div> <!-- card primary-->

                                                    <div class="modal-footer justify-center">
                                                    <button type="button" class="btn btn-danger" data-dismiss="modal"><i class="fa fa-times"></i> Close</button>
                                                   
                                                    </div>

                                     </div> <!-- /.modal-content -->
                                </form>
                            </div><!-- /.modal-dialog -->
                            </div> <!-- /.modal fade -->
                                               
                                                    
                </div>   <!-- card body -->    
                
                        <?php }
                        }
                        ?>

                    </table>

                    <!-- /.card-body -->
                    </div>
                    <!-- /.card -->
                </div>
                <!-- /.col -->
                </div>
                <!-- /.row -->
            </div>
            <!-- /.container-fluid -->
            </section>
            <!-- /.content -->
        </div>
        <!-- /.content-wrapper -->
        <footer class="main-footer">
            <strong>Footer <a href="">Opan Visa Issuance System</a>.</strong>
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
        </div>
        <!-- ./wrapper -->

        <!-- jQuery -->
        <script src="bootstrap-5.0.2-dist/js/jquery.min.js"> </script>
<script src="bootstrap-5.0.2-dist/js/bootstrap.min.js"> </script>
        <script src="plugins/jquery/jquery.min.js"></script>
        <!--lighbox jquery-->
        <script src="Css/lightbox-plus-jquery.min.js"></script>
        <!-- Bootstrap 4 --> 
         <script src="plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
        <!-- DataTables  & Plugins -->
        <script src="plugins/datatables/jquery.dataTables.min.js"></script>
        <script src="plugins/datatables-bs4/js/dataTables.bootstrap4.min.js"></script>
        <script src="plugins/datatables-responsive/js/dataTables.responsive.min.js"></script>
        <script src="plugins/datatables-responsive/js/responsive.bootstrap4.min.js"></script>
        <script src="plugins/datatables-buttons/js/dataTables.buttons.min.js"></script>
        <script src="plugins/datatables-buttons/js/buttons.bootstrap4.min.js"></script>
        <script src="plugins/jszip/jszip.min.js"></script>
        <script src="plugins/pdfmake/pdfmake.min.js"></script>
        <script src="plugins/pdfmake/vfs_fonts.js"></script>
        <script src="plugins/datatables-buttons/js/buttons.html5.min.js"></script>
        <script src="plugins/datatables-buttons/js/buttons.print.min.js"></script>
        <script src="plugins/datatables-buttons/js/buttons.colVis.min.js"></script>
       
        <!-- AdminLTE App -->
        <script src="dist/js/adminlte.min.js"></script>
        <!-- AdminLTE for demo purposes -->
        <script src="dist/js/demo.js"></script>
        <!-- Page specific script -->
        <script>
        $(function () {
            $("#example1").DataTable({
            "responsive": true, "lengthChange": false, "autoWidth": false,
            "buttons": [""]
            }).buttons().container().appendTo('#example1_wrapper .col-md-6:eq(0)');
            $('#example2').DataTable({
            "paging": true,
            "lengthChange": false,
            "searching": false,
            "ordering": true,
            "info": true,
            "autoWidth": false,
            "responsive": true,
            });
        });
        </script>
            
</body>
</html>