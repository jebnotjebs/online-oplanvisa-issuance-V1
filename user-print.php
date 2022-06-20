<?php
include 'connection.php';
$id = $_GET['userid'];
$sql = "SELECT * FROM tbl_application_user WHERE userid = $id";
$result = $conn->query($sql);
$row = $result->fetch_assoc();
?>
<html lang="en">
 <head>
     <meta charset="UTF-8">
     <meta http-equiv="X-UA-Compatible" content="IE=edge">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <title> </title>
     <link rel="stylesheet" href="bootstrap-5.0.2-dist/css/bootstrap.min.css" >
     <link rel="stylesheet" href="bootstrap-5.0.2-dist/css/bootstrap-grid.min.css" >
 </head>

 <style>
     img{
         margin-top: 2%;
        margin-left: auto;
        margin-right: auto;
        width: 7%;
     }
     @media print{
         .noprint, .noprint *{
             display: none; important;
         }
     }
     @page {
        size: auto;
        margin: 0;
     }
 </style>
 <body>
     <div class="container">
             <div class= "col-md-12 text-center">
                 <h1>Oplan Visa Issuance System</h1>
             </div>
     </div>
     <form action="">
        <div class="container">
            
            <div class="card card-primary">
            <img src="img/alfonsolista.png" alt="alfonsolista logo"/>
                <div class="card-body">
                <div class="col-12">
                            <h4>Name and contact address</h4>
                            </div>
                    <div class="row">
                        <div class="col-12">
                            <div class="form-group">
                                <label for="exampleInputEmail1">Complete name</label>
                            <input class="form-control" value="<?php echo $row["FName"]. " ". $row["LName"]?>">
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="form-group">
                            <label for="exampleInputEmail1">Full address</label>
                            <input type="text" class="form-control" value="<?php echo $row["Province"]. " ". $row["City"]. " ". $row["Baranggay"]?>">
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="form-group">
                            <label for="exampleInputEmail1">Control number</label>
                            <input type="text" class="form-control" value="<?php echo $row["Mobile_Num"]?>">
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="form-group">
                            <label for="exampleInputEmail1">Contact</label>
                            <input type="text" class="form-control" value="<?php echo $row["Mobile_Num"]?>">
                            </div>
                            </div>
                            <div class="col-12">
                            <h4>Motorcycle Description</h4>
                            </div>
                            <div class="col-4">
                                
                                <div class="form-group">
                                <label for="exampleInputEmail1">Make</label>
                                <input type="text" class="form-control" value="<?php echo $row["Make"]?>">
                                </div>
                            </div>
                            <div class="col-4">
                                <div class="form-group">
                                <label for="exampleInputEmail1">Model</label>
                                <input type="text" class="form-control" value="<?php echo $row["Model"]?>">
                                </div>
                            </div>
                            <div class="col-4">
                                <div class="form-group">
                                <label for="exampleInputEmail1">Color</label>
                                <input type="text" class="form-control" value="<?php echo $row["Color"]?>">
                                </div>
                            </div>
                            <div class="col-6">
                                <div class="form-group">
                                <label for="exampleInputEmail1">Engine number</label>
                                <input type="text" class="form-control" value="<?php echo $row["Engine_Num"]?>">
                                </div>
                            </div>
                            <div class="col-6">
                                <div class="form-group">
                                <label for="exampleInputEmail1">Engine displacement</label>
                                <input type="text" class="form-control" value="<?php echo $row["Engine_Dspcmt"]?>">
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="form-group">
                                <label for="exampleInputEmail1">Chasis number</label>
                                <input type="text" class="form-control" value="<?php echo $row["Chasis_Num"]?>">
                                </div>
                            </div>
                            <div class="col-6">
                                <div class="form-group">
                                <label for="exampleInputEmail1">OR number</label>
                                <input type="text" class="form-control" value="<?php echo $row["OR_Num"]?>">
                                </div>
                            </div>
                            <div class="col-6">
                                <div class="form-group">
                                <label for="exampleInputEmail1">CR number</label>
                                <input type="text" class="form-control" value="<?php echo $row["CR_Num"]?>">
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
                                <input type="text" class="form-control" value="<?php echo $row["Ownership"]?>">
                                </div>
                            </div>   
                        </div><!-- row -->
                </div> <!-- card body -->
            </div> <!-- card primary-->
        </div>
    </form>
   
    <div class="text-center">
        <a href = "status.php" class="btn btn-danger btn-lg noprint"> Cancel</a>
        <button onclick="window.print()" class="btn btn-primary btn-lg noprint"> Print</button>
    </div>

   

</body>
    <script src="bootstrap-5.0.2-dist/js/jquery.min.js"> </script>
    <script src="bootstrap-5.0.2-dist/js/bootstrap.min.js"> </script>
    <script src="bootstrap-5.0.2-dist/js/bootstrap.bundle.min.js"> </script>    
 </html>
