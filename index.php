<?php
	session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>SMAC Dashboard</title>

  <!-- Custom fonts for this template-->
  <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">

  <!-- Page level plugin CSS-->
  <link href="vendor/datatables/dataTables.bootstrap4.css" rel="stylesheet">

  <!-- Custom styles for this template-->
  <link href="css/sb-admin.css" rel="stylesheet">
  <!-- Animations CSS -->
  <link rel="stylesheet" href="animate.css">
  <!-- Lato Font -->
  <link rel="stylesheet" type="text/css" href="//fonts.googleapis.com/css?family=Lato" />


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
    <div id="content-wrapper" style="font-family:lato";>
      <div class="container-fluid">
        
        <!-- Icon Cards-->
        <div class="row">
          <div class="col-xl-6 col-sm-6 mb-3">
            <div class="card1  o-hidden h-100">
              <div class="card-body">
                <div class="mr-5"></div>
                  <div class="widget-left">
                    <span class="fa fa-paw"></span>
                  </div>
                  <div class="widget-right">
                    <h4 class="wiget-title">Patients</h4>
                    <span class="numeric-color">143</span>
                  </div>
              </div>
            </div>
          </div>
          <div class="col-xl-6 col-sm-6 mb-3">
            <div class="card2  o-hidden h-100">
              <div class="card-body">
                <div class="mr-5"></div>
                <div class="widget-left">
                  <span class="fa fa-list-alt"></span>
                </div>
                <div class="widget-right">
                  <h4 class="wiget-title">Appointments</h4>
                  <span class="numeric-color">14344</span>
                </div>
              </div>
            </div>
          </div>
        </div>
        <!-- DataTable for Appointments -->
        <div class="card mb-3">
          <div class="card-header">
            <i class="fa fa-list-alt"></i>
            Appointments</div>
          <div class="card-body">
            <div class="table-responsive">
              <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                <thead>
                  <tr>
                    <th>Owner's Name</th>
                    <th>Pet's Name</th>
                    <th>Doctor</th>
                    <th>Date</th>
                    <th>Time</th>
                    <th>Status</th>
                  </tr>
                </thead>
                <tfoot>
                  <tr>
                    <th>Name</th>
                    <th>Position</th>
                    <th>Office</th>
                    <th>Age</th>
                    <th>Start date</th>
                    <th>Salary</th>
                  </tr>
                </tfoot>
                <tbody>
                  <tr>
                    <td>TJ Mariano</td>
                    <td>Santie Pelayo</td>
                    <td>Doctor Quack Quack</td>
                    <td>03-31-2019</td>
                    <td>12:10PM</td>
                    <td>
                      <span class="badge badge-success">Completed</span>
                    </td>
                  </tr>
                  <tr>
                    <td>Winnie the Pooh</td>
                    <td>Piglet </td>
                    <td>Doctor Strange </td>
                    <td>03-31-2019</td>
                    <td>1:10PM</td>
                    <td>
                      <span class="badge badge-danger">Cancelled</span>
                    </td>
                  </tr>
                  </tr>
                </tbody>
              </table>
            </div>
          </div>
      </div>
      <!-- /.container-fluid -->

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
