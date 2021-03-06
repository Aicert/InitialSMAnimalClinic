<?php
	session_start();
  include "config.php";

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
          <div class="col-xl-4 col-sm-4 mb-3">
            <div class="card1  o-hidden h-100">
              <div class="card-body">
                <div class="mr-5"></div>
                  <div class="widget-left">
                    <span class="fa fa-paw"></span>
                  </div>
                  <div class="widget-right">
                    <h4 class="wiget-title">Patients</h4>
                           <?php
                                $sql = "SELECT COUNT(*) as count from tbl_patients";
                                $query = $conn -> prepare($sql);
                                $query->execute();
                                $results=$query->fetch(PDO::FETCH_ASSOC);
                                $count1 = $results['count'];
                                
                                ?>                    
                  <span class="numeric-color"><?php echo $count1; ?></span>
                  </div>
              </div>
            </div>
          </div>
          <div class="col-xl-4 col-sm-4 mb-3">
            <div class="card2  o-hidden h-100">
              <div class="card-body">
                <div class="mr-5"></div>
                <div class="widget-left">
                  <span class="fa fa-list-alt"></span>
                </div>
                <div class="widget-right">
                  <h4 class="wiget-title">Appointments</h4>
                    <?php
                                $sql = "SELECT COUNT(*) as count from tbl_appointment";
                                $query = $conn -> prepare($sql);
                                $query->execute();
                                $results=$query->fetch(PDO::FETCH_ASSOC);
                                $count1 = $results['count'];
                                
                                ?>                    
                  <span class="numeric-color"><?php echo $count1; ?></span>
                </div>
              </div>
            </div>
          </div>
    
          <div class="col-xl-4 col-sm-4 mb-3">
            <div class="card2  o-hidden h-100">
              <div class="card-body">
                <div class="mr-5"></div>
                <div class="widget-left">
                  <span class="fa fa-clipboard-list"></span>
                </div>
                <div class="widget-right">
                  <h4 class="wiget-title">Total Service</h4>
                    <?php
                                $sql = "SELECT COUNT(*) as count from tbl_services";
                                $query = $conn -> prepare($sql);
                                $query->execute();
                                $results=$query->fetch(PDO::FETCH_ASSOC);
                                $count1 = $results['count'];
                                
                                ?>                    
                  <span class="numeric-color"><?php echo $count1; ?></span>
                </div>
              </div>
            </div>
          </div>
   </div>
        <!-- DataTable for Appointments -->
        <div class="card mb-3">
          <div class="card-header">
            <i class="fa fa-list-alt"></i>
            Latest Appointments</div>
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
                <tbody>
                     <?php   

                                        $sql = "SELECT * from tbl_appointment";
                                        $query = $conn -> prepare($sql);
                                        $query->execute();
                                        while($row =  $query->fetch())
                                    {   
                                       ?>  
                                         <tr>
                                                <td> <?php echo htmlentities($row['ownerName']);?></td>
                                                <td> <?php echo htmlentities($row['petName']);?></td>
                                                <td> <?php echo htmlentities($row['doctorName']);?></td>
                                                <td> <?php echo htmlentities($row['dateSchedule']);?></td>
                                                <td> <?php echo htmlentities($row['time']);?></td>
                                                <td> <?php 
                                                    if($row['status'] == 1)
                                                    {
                                                         echo"<span class=\"badge badge-success\">Done</span>";
                                                    }
                                                    else
                                                    {
                                                         echo"<span class=\"badge badge-danger\">Pending</span>";
                                                    }
                                                ?></td>
                                        </tr>
                                 <?php  }?>
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
