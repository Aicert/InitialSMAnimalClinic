<?php   include "config.php"; ?>

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
              
                    <!-- DataTable for Appointments -->
        <div class="card mb-3">
                <div class="card-header">
                  <i class="fa fa-list-alt"></i>
                  Appointments</div>
                <div class="card-body">
                  <div class="table-responsive">
                    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0" style="white-space: nowrap;">
                      <thead>
                        <tr>
                          <th>Id</th>
                          <th>Pet's Name</th>
                          <th>Owner Name</th>
                          <th>Doctor Name</th>
                          <th>Date Schedule</th>
                          <th>Time</th>
                          <th>Problem</th>
                          <th>Status</th>
                          <th>Action</th>
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
                                                <td> <?php echo htmlentities($row['id']);?></td>
                                                <td> <?php echo htmlentities($row['petName']);?></td>
                                                <td> <?php echo htmlentities($row['ownerName']);?></td>
                                                <td> <?php echo htmlentities($row['doctorName']);?></td>
                                                <td> <?php echo htmlentities($row['dateSchedule']);?></td>
                                                <td> <?php echo htmlentities($row['time']);?></td>
                                                <td> <?php echo htmlentities($row['problem']);?></td>
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
                                                <td>

                                                <button type="button"  data-toggle="modal" data-target="#myModal" class="update btn btn-primary btn-sm"> Update </button>
                                                  &nbsp;

                                                <a  class="btn btn-danger btn-sm" href="patientAll.php?idPatient=<?php echo htmlentities($row['id']);?>"  onclick="return confirm('Do you want to delete this patient?');">Delete</a>

                                              </td>                                           
                                        </tr>
                                 <?php  }?>
                      </tbody>
                    </table>
                  </div>
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