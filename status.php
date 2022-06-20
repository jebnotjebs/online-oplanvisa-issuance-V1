<?php
session_start();
include "header.php";
include "connection.php";
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
}
 
//this is for checking and view the statud of the application
$userId = $_SESSION["userid"];
$sql = "SELECT * FROM tbl_application_user WHERE userid = $userId";
$result=mysqli_query($conn,$sql);
$row = mysqli_fetch_assoc($result);
if (!$row) {
   exit('no current data');
} 
?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="bootstrap-5.0.2-dist/css/bootstrap.min.css" >
    <link rel="stylesheet" href="bootstrap-5.0.2-dist/css/bootstrap-grid.min.css" >
  <!-- Theme style -->
  <link rel="stylesheet" href="dist/css/adminlte.min.css">
  <!-- overlayScrollbars -->
    <link rel="stylesheet" href="dist/css/adminlte.min.css">
    <link rel="stylesheet" href="Css/status.css">
</head>
<body>
  
  <form action="">
    <div class="container">
    <div class="modal-content">
        <div class="modal-header">
            <h4 class="modal-title">Current status: <?php echo $row["user_status"]; ?></h4>
          
        </div> <!-- modal header -->

            <div class="card card-primary">
                <div class="card-body">
                    <div class="row">
                        <div class="col-12">
                            <div class="form-group">
                                <label for="exampleInputEmail1">Complete name</label>
                            <input type="text" class="form-control" id="" placeholder= "no value" value= "<?php echo $row["FName"]. " ". $row["LName"]?>">
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
                            <input type="text" class="form-control" id="" placeholder="<?php echo $row["Mobile_Num"]?>">
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
                            
                    </div><!-- row -->
              </div> <!-- card body -->
          </div> <!-- card primary-->
          <div class="col-lg text-center">
            
            <a href = "user-print.php?userid=<?php echo $row['userid'] ?>" class="btn btn-primary btn-lg"> Print</a>
            
            </div>
         
      </div> <!-- /.modal-content -->
    </div>
    
</form>
    
</body>
<script src="plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<script src="plugins/jquery/jquery.min.js"></script>
</html>