<?php
session_start();
include "header.php";
include "connection.php";
?>
 

<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="bootstrap-5.0.2-dist/css/bootstrap.min.css" >
    <link rel="stylesheet" href="bootstrap-5.0.2-dist/css/bootstrap-grid.min.css" >
    <link rel="stylesheet" href="plugins/icheck-bootstrap/icheck-bootstrap.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="dist/css/adminlte.min.css">
  <!-- overlayScrollbars -->
    <link rel="stylesheet" href="dist/css/adminlte.min.css">
    <link rel="stylesheet" href="Css/status.css">
</head>
<body>
  <style>
    .container{
      margin-top: 50px;
      width: 100%;
    }
  </style>
<div class="container">
    <div class="card">
        <div class="card-header">
            <h3>  Announcement record list</h3> 
        </div>
        <table id="example1" class="table table-bordered table-striped">
            <thead>
            <tr>

              <th>Announcement title</th>
              <th>Announcement content</th>
              <th>Date</th>
              
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
     
                  
                    <tr>
                      
                      <td><?php echo $row["title"]; ?></td>
                      <td><?php echo $row["body"]; ?></td>
                      <td><?php echo $row["created"]; ?></p></td>
                      
                      
                    </tr>
                 
                                  
                </div>    
               
            <?php }
            } else{
              echo "No current data";
            } ?>
            </div>
         </table>
         </div>
         </div>

    
</body>
<script src="plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<script src="plugins/jquery/jquery.min.js"></script>
</html>