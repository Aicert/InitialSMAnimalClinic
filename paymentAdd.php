<?php
include "config.php";
   if(isset($_POST['btnSave'])) 

            { 
                $serviceName = $_POST['serviceName'];
                $price = $_POST['price'];
                $createdBy = "admin";
                $status = 1;
              
                $sth=$conn->prepare("INSERT INTO tbl_services(serviceName,price,createdBy,status)
                VALUES(:serviceName,:price,:createdBy,:status) "); 
                $sth->bindParam(':serviceName',$serviceName); 
                $sth->bindParam(':price',$price); 
                $sth->bindParam(':createdBy',$createdBy); 
                $sth->bindParam(':status',$status); 
                $sth->execute(); 

                 header('location:paymentAll.php');
                  echo "<script type= 'text/javascript'>alert('New record created successfully');</script>";

             } 

?>


<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <link rel="icon" href="images/icon.png" type="image/x-icon" />

  <title>San Mateo Animal Clinic</title>

  <!-- Custom fonts for this template-->
  <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">

  <!-- Page level plugin CSS-->
  <link href="vendor/datatables/dataTables.bootstrap4.css" rel="stylesheet">

  <!-- Custom styles for this template-->
  <link href="css/sb-admin.css" rel="stylesheet">

</head>
<body id="page-top">
  
    <!-- Top Nav -->
  <?php 
    require_once("topNav.php");
  ?> 
  <div id="wrapper">
  <!-- Sidebar -->
  <?php 
    require_once("sideNav.php");
  ?> 
      <div id="content-wrapper">
  
        <div class="container-fluid">
  
          <!-- Breadcrumbs-->
          <div class="row">
            <!-- Widget Item -->
          <div class="col-md-12">
                            <div class="widget-area-2 proclinic-box-shadow">
                                <h3 class="widget-title">Add New Payment</h3>
                                <form method="POST">
                                    <div class="form-row">
                                        <div class="form-group col-md-6">
                                            <label for="First Name">Service Name</label>
                                            <input type="text" class="form-control"  name="serviceName" placeholder="Service Name" id="patient-id">
                                        </div>
                                            <div class="form-group col-md-6">
                                            <label for="Last Name">Price</label>
                                            <input type="text" class="form-control"  name="price" placeholder="Price" id="patient-id">
                                        </div>
                                        <div class="form-group col-md-12 mb-12">
                                            <input type="submit" value="Submit" name="btnSave" class="btn btn-primary btn-md" style="float:right;">
                                        </div>
                                    </div>
                                </form>
                            
                            </div>
                        </div>  
                        <!-- /Widget Item -->
        </div>
  
          
        <!-- Sticky Footer -->
        <footer class="sticky-footer">
          <div class="container my-auto">
            <div class="copyright text-center my-auto">
              <span>Copyright © San Mateo Animal Clinic 2019</span>
            </div>
          </div>
        </footer>
  
      </div>
      <!-- /.content-wrapper -->
  
    </div>
    <!-- /#wrapper -->
  
    <!-- Scroll to Top Button-->
    <a class="scroll-to-top rounded" href="#page-top">
      <i class="fas fa-angle-up"></i>
    </a>
  
    <!-- Logout Modal-->
    <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
            <button class="close" type="button" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">×</span>
            </button>
          </div>
          <div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
          <div class="modal-footer">
            <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
            <a class="btn btn-primary" href="login.php">Logout</a>
          </div>
        </div>
      </div>
    </div>
  
    <!-- Bootstrap core JavaScript-->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  
    <!-- Core plugin JavaScript-->
    <script src="vendor/jquery-easing/jquery.easing.min.js"></script>
  
    <!-- Page level plugin JavaScript-->

    <script src="vendor/datatables/jquery.dataTables.js"></script>
    <script src="vendor/datatables/dataTables.bootstrap4.js"></script>
  
    <!-- Custom scripts for all pages-->
    <script src="js/sb-admin.min.js"></script>
  
    <!-- Demo scripts for this page-->
    <script src="js/demo/datatables-demo.js"></script>

  
  </body>
  </html>