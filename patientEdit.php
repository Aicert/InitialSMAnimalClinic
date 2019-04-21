<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>SMAC Patient</title>

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
          <ol class="breadcrumb">
            <li class="breadcrumb-item">
              <a href="#">Animal Registration</a>
            </li>
            <li class="breadcrumb-item active">Overview</li>
          </ol>
          <div class="row">
           <!-- Widget Item -->
					<div class="col-md-12">
                            <div class="widget-area-2 proclinic-box-shadow">
                                <h3 class="widget-title">Edit Patient</h3>
                                <form>
                                    <div class="form-row">
                                        <div class="form-group col-md-6">
                                            <label for="patient-name">Patient Name</label>
                                            <input type="text" value="Daniel Smith" class="form-control" placeholder="Patient name" id="patient-name">
                                        </div>
                                        <div class="form-group col-md-6">
                                            <label for="dob">Date Of Birth</label>
                                            <input type="date" value="1989-10-10" placeholder="Date of Birth" class="form-control" id="dob">
                                        </div>
                                        <div class="form-group col-md-6">
                                            <label for="age">Age</label>
                                            <input type="text" value="30" placeholder="Age" class="form-control" id="age">
                                        </div>
                                        <div class="form-group col-md-6">
                                            <label for="phone">Phone</label>
                                            <input type="text" value="12345 67890" placeholder="Phone" class="form-control" id="phone">
                                        </div>
                                        <div class="form-group col-md-6">
                                            <label for="email">Email</label>
                                            <input type="email" value="email@email.com" placeholder="email" class="form-control" id="Email">
                                        </div>
                                        <div class="form-group col-md-6">
                                            <label for="gender">Gender</label>
                                            <select class="form-control" id="gender">
                                                <option selected="">Male</option>
                                                <option>Female</option>
                                                <option>Other</option>
                                            </select>
                                        </div>
                                        <div class="form-group col-md-12">
                                            <label for="exampleFormControlTextarea1">Address</label>
                                            <textarea placeholder="Address" class="form-control" id="exampleFormControlTextarea1" rows="3">Koramangala Banglore, India</textarea>
                                        </div>
                                        <div class="form-group col-md-12">
                                            <label for="file">File</label>
                                            <input type="file" class="form-control" id="file">
                                        </div>
                                                                            
                                        <div class="form-check col-md-12 mb-2">
                                            <div class="text-left">
                                                <div class="custom-control custom-checkbox">
                                                    <input class="custom-control-input" type="checkbox" id="ex-check-2">
                                                    <label class="custom-control-label" for="ex-check-2">Please Confirm</label>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group col-md-6 mb-3">
                                            <button type="submit" class="btn btn-primary btn-lg">Update</button>
                                        </div>
                                    </div>
                                </form>
                                <!-- Alerts-->
                                <div class="alert alert-success alert-dismissible fade show" role="alert">
                                    <strong>Successfully Updated!</strong> Please add payment now
                                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                        <span aria-hidden="true">×</span>
                                    </button>
                                </div>
                                <div class="alert alert-warning alert-dismissible fade show" role="alert">
                                    <strong>Holy guacamole!</strong> You should check in on some of those fields below.
                                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                        <span aria-hidden="true">×</span>
                                    </button>
                                </div>
                                <!-- /Alerts-->
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
    <script src="vendor/chart.js/Chart.min.js"></script>
    <script src="vendor/datatables/jquery.dataTables.js"></script>
    <script src="vendor/datatables/dataTables.bootstrap4.js"></script>
  
    <!-- Custom scripts for all pages-->
    <script src="js/sb-admin.min.js"></script>
  
    <!-- Demo scripts for this page-->
    <script src="js/demo/datatables-demo.js"></script>
    <script src="js/demo/chart-area-demo.js"></script>
  
  </body>
  
  </html>