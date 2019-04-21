<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>SMAC Payment</title>

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
                                <h3 class="widget-title">Add Payment</h3>
                                <form>
                                    <div class="form-row">
                                        <div class="form-group col-md-6">
                                            <label for="patient-id">Patient ID</label>
                                            <input type="text" class="form-control" placeholder="Patient ID" id="patient-id">
                                        </div>
                                        <div class="form-group col-md-6">
                                            <label for="patient-name">Patient Name</label>
                                            <input type="text" class="form-control" placeholder="Patient Name" id="patient-name">
                                        </div>
                                        <div class="form-group col-md-6">
                                            <label for="department">Department</label>
                                            <select class="form-control" id="department">
                                                <option>Neuro</option>
                                                <option>Ortho</option>
                                                <option>General</option>
                                            </select>
                                        </div>
                                        <div class="form-group col-md-6">
                                            <label for="doctor-name">Doctor Name</label>
                                            <input type="text" placeholder="Doctor Name" class="form-control" id="doctor-name">
                                        </div>
                                        <div class="form-group col-md-6">
                                            <label for="adminssion-date">Admission Date</label>
                                            <input type="date" placeholder="Adminssion Date" class="form-control" id="adminssion-date">
                                        </div>	
                                        <div class="form-group col-md-6">
                                            <label for="discharge-date">Discharge Date</label>
                                            <input type="date" placeholder="Discharge Date" class="form-control" id="discharge-date">
                                        </div>	
                                        <div class="form-group col-md-12">
                                            <h4>Services</h4>										
                                        </div>
                                        <div class="form-group col-md-6">
                                            <label for="service-name">Service Name</label>
                                            <input type="text" placeholder="Service Name" class="form-control" id="service-name">
                                        </div>	
                                        <div class="form-group col-md-6">
                                            <label for="treatment-cost">Cost of Treatment</label>
                                            <input type="text" placeholder="Cost of Treatment" class="form-control" id="treatment-cost">
                                        </div>
                                        <div class="form-group col-md-12">
                                            <button type="button" class="btn btn-outline-success"><span class="ti-plus"></span> Add Service</button>										
                                        </div>
                                        <div class="form-group col-md-12">
                                            <h4>Payment</h4>										
                                        </div>
                                        <div class="form-group col-md-3">
                                            <label for="discount">Discount (%)</label>
                                            <input type="text" placeholder="Discount" class="form-control" id="discount">
                                        </div>	
                                        <div class="form-group col-md-3">
                                            <label for="advance-paid">Advance Paid</label>
                                            <input type="text" placeholder="Advance Paid" class="form-control" id="advance-paid">
                                        </div>
                                        <div class="form-group col-md-3">
                                            <label for="payment-type">Payment Type</label>
                                            <select class="form-control" id="payment-type">
                                                <option>Check</option>
                                                <option>Card</option>
                                                <option>Cash</option>
                                            </select>
                                        </div>	
                                        <div class="form-group col-md-3">
                                            <label for="card-check">Card/Check No</label>
                                            <input type="text" placeholder="Card/Check No" class="form-control" id="card-check">
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
                                            <button type="submit" class="btn btn-primary btn-lg">Submit</button>
                                        </div>
                                    </div>
                                </form>
                                <!-- Alerts-->
                                <div class="alert alert-success alert-dismissible fade show" role="alert">
                                    <strong>Successfully Done!</strong> Payment added
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