<?php
  


  $serverName ="localhost";
  $dbUserName = "root";
  $dbPassword = "";
  $dbName = "smac";
  
  $conn = mysqli_connect($serverName, $dbUserName, $dbPassword, $dbName );
  
  if(!$conn){
      die("connection_failed:".mysqli_connect_error());
  }
  
  if(isset($_POST['patientAddSubmit']))
  {


      $sql = "INSERT INTO tbl_patients (ownerName, mobile, email, patientAddress, petName, species, gender, age, curCondition, medHistory, vaccination )
      VALUES ('".$_POST["ownerName"]."','".$_POST["mobile"]."', '".$_POST["email"]."', '".$_POST["patientAddress"]."', '".$_POST["petName"]."', '".$_POST["species"]."', '".$_POST["gender"]."', '".$_POST["age"]."', '".$_POST["curCondition"]."', '".$_POST["medHistory"]."', '".$_POST["vaccination"]."')";
   
      if ($conn->query($sql) === TRUE) {
        echo "<script type= 'text/javascript'>alert('New record created successfully');</script>";
        } else {
        echo "<script type= 'text/javascript'>alert('Error: " . $sql . "<br>" . $conn->error."');</script>";
        }
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
  
            <!-- Widget Item -->
            <div class="col-md-12">
                <div class="widget-area-2 proclinic-box-shadow">
                    <h3 class="widget-title">Animal Registration</h3>
                    <form  method="POST">
                        <div class="form-row">
                            <div class="form-group col-md-6">
                                <label for="ownerName">Owner's Name</label>
                                <input type="text" class="form-control" name="ownerName" placeholder="Owner's name" id="ownerName">
                            </div>
                            <div class="form-group col-md-6">
                                <label for="petName">Pet's Name</label>
                                <input type="text" placeholder="Pet's Name"  name="petName" class="form-control" id="petName">
                            </div>
                            <div class="form-group col-md-6">
                                <label for="mobile">Mobile Number</label>
                                <input type="text" placeholder="Mobile Number" name="mobile" class="form-control" id="mobile">
                            </div>
                            <div class="form-group col-md-6">
                                <label for="species">Species</label>
                                <input type="text" placeholder="Species" name="species" class="form-control" id="species">
                            </div>
                            <div class="form-group col-md-6">
                                <label for="email">Email</label>
                                <input type="email" placeholder="Email" name="email" class="form-control" id="Email">
                            </div>
                            <div class="form-group col-md-6">
                                <label for="gender">Gender</label>
                                  <select class="form-control" name="gender" id="gender">
                                        <option value="MALE">MALE</option>
                                        <option value="FEMALE">FEMALE</option> 
                                    </select>
                            </div>
                            <!-- <div class="form-group col-md-6">
                                <label for="gender">Gender</label>
                                <select class="form-control" id="gender">
                                    <option>Male</option>
                                    <option>Female</option>
                                    <option>Other</option>
                                </select>
                            </div> -->
                            <div class="form-group col-md-6">
                                <label for="patientAddress">Address</label>
                                <textarea placeholder="Address" class="form-control" name="patientAddress" id="patientAddress" rows="3"></textarea>
                            </div>
                            <div class="form-group col-md-6">
                              <label for="email">Age</label>
                              <input type="text" placeholder="Pet's age" name="age" class="form-control" id="age">
                          </div>
                            <h3 class="widget-title">Pet's Medical Condition</h3>
                            <div class="form-group col-md-12">
                              <label for="curCondition">Pet's Current Condition</label>
                              <textarea placeholder="" class="form-control" name="curCondition" id="curCondition" rows="3"></textarea>
                          </div>
                          <div class="form-group col-md-12">
                            <label for="medHistory">Pet's Medical History</label>
                            <textarea placeholder="" class="form-control" name="medHistory" id="medHistory" rows="3"></textarea>
                        </div>
                        <div class="form-group col-md-12">
                            <label for="vaccination">Vaccination</label>
                            <textarea placeholder="" class="form-control" name="vaccination" id="vaccination" rows="3"></textarea>
                        </div>
                                                                
                            
                            <div class="form-group col-md-6 mb-3">
                                <input type="submit" name="patientAddSubmit"  class="btn btn-info" value="Submit">
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