<?php
   include "config.php";

      if(isset($_GET['idPatient']))
        {
                $id=$_GET['idPatient'];

                $sql = "DELETE FROM tbl_patients WHERE idPatient=:id";
                $query = $conn->prepare($sql);   
                $query -> bindParam(':id',$id, PDO::PARAM_STR);
                $query -> execute();
                header('location:patientAll.php');
        }


        if(isset($_POST['btnUpdate']))
        {
                $id=$_POST['hiddenId'];
                $petName=$_POST['petName'];
                $species=$_POST['species'];
                $ownerName=$_POST['ownerName'];
                $mobile=$_POST['mobile'];
                $email=$_POST['email'];
                $address=$_POST['address'];
                $gender=$_POST['gender'];

           
                $sql = "UPDATE tbl_patients set petName=:petName,species=:species,ownerName=:ownerName,mobile=:mobile,email=:email,patientAddress=:address,gender=:gender
                WHERE idPatient=:id";
                $query = $conn->prepare($sql);   
                $query -> bindParam(':id',$id);
                $query -> bindParam(':petName',$petName); 
                $query -> bindParam(':species',$species); 
                $query -> bindParam(':ownerName',$ownerName); 
                $query -> bindParam(':mobile',$mobile); 
                $query -> bindParam(':email',$email); 
                $query -> bindParam(':address',$address); 
                $query -> bindParam(':gender',$gender); 
                $query -> execute();
                header('location:patientAll.php');
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

  <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">

  <link href="vendor/datatables/dataTables.bootstrap4.css" rel="stylesheet">

  <link href="css/sb-admin.css" rel="stylesheet">

</head>
<body id="page-top">
    <!-- Top Nav -->
  <?php 
    include("topNav.php");
  ?> 
  <div id="wrapper">
  <!-- Sidebar -->
  <?php 
    include("sideNav.php");
  ?> 
      <div id="content-wrapper">
        <div class="container-fluid">
           <!-- DataTable for Appointments -->
        <div class="card mb-3">
          <div class="card-header">
            <i class="fa fa-paw"></i>
            All Patients</div>
          <div class="card-body">
            <div class="table-responsive">
              <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
             
                <thead>
                  <tr>
                    <th>Id</th>
                    <th>Pet's Name</th>
                    <th>Species</th>
                    <th>Owner's Name</th>
                    <th>Mobile Number</th>
                    <th>Email</th>
                    <th>Address</th>
                    <th>Gender</th>
                     <th width="200">Action</th>
                  </tr>
                </thead>
                <tbody>
                                   <?php   

                                        $sql = "SELECT * from tbl_patients";
                                        $query = $conn -> prepare($sql);
                                        $query->execute();
                                        while($row =  $query->fetch())
                                    {   
                                       ?>  
                                         <tr>
                                                <td> <?php echo htmlentities($row['idPatient']);?></td>
                                                <td> <?php echo htmlentities($row['petName']);?></td>
                                                <td> <?php echo htmlentities($row['species']);?></td>
                                                <td> <?php echo htmlentities($row['ownerName']);?></td>
                                                <td> <?php echo htmlentities($row['mobile']);?></td>
                                                <td> <?php echo htmlentities($row['email']);?></td>
                                                <td> <?php echo htmlentities($row['patientAddress']);?></td>
                                                <td> <?php echo htmlentities($row['gender']);?></td>
                                                <td>

                                                <button type="button"  data-toggle="modal" data-target="#myModal" class="update btn btn-primary btn-sm"> Update </button>
                                                  &nbsp;

                                                <a  class="btn btn-danger btn-sm" href="patientAll.php?idPatient=<?php echo htmlentities($row['idPatient']);?>"  onclick="return confirm('Do you want to delete this patient?');">Delete</a>

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
          </div>
      </div>


  <!-- Modal -->
  <div class="modal fade" id="myModal" role="dialog">
    <div class="modal-dialog modal-lg">
      <div class="modal-content">
          <form  method="POST">
               <input type="hidden" id="hiddenId" name="hiddenId">
        <div class="modal-header">
          <h4 class="modal-title">Update Details</h4>
        </div>
       
        <div class="modal-body">
                
        <div class="form-row">
            <div class="form-group col-md-6">
                <label for="petName">Pet Name</label>
                <input type="text" class="form-control" name="petName" placeholder="Pet's name" id="petName">
            </div>
                  <div class="form-group col-md-6">
                <label for="species">Species</label>
                <input type="text" class="form-control" name="species" placeholder="Species" id="species">
            </div>
         </div>
             <div class="form-row">
            <div class="form-group col-md-6">
                <label for="ownerName">Owner's Name</label>
                <input type="text" class="form-control" name="ownerName" placeholder="Owner's name" id="ownerName">
            </div>
                  <div class="form-group col-md-6">
                <label for="mobile">Mobile</label>
                <input type="text" class="form-control" name="mobile" placeholder="Mobile Number" id="mobile">
            </div>
         </div>
       
           <div class="form-row">
            <div class="form-group col-md-6">
                <label for="email ">Email</label>
                <input type="text" class="form-control" name="email" placeholder="Email" id="email">
            </div>
                  <div class="form-group col-md-6">
                <label for="address">Address</label>
                <input type="text" class="form-control" name="address" placeholder="Address" id="address">
            </div>
         </div>
           <div class="form-row">
            <div class="form-group col-md-6">
                <label for="gender">Gender</label>
                <select class="form-control" name="gender">
                  <option value="Male">Male</option>
                  <option value="Female">Female</option>
                </select>
            </div>
         </div>
       
        </div>
        <div class="modal-footer">
           <input type="submit" class="btn btn-primary" name="btnUpdate" value="Save Changes">
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        </div>
     
      </div>
       </form>
    </div>
  </div>
</div>

      <!-- /.container-fluid -->
                        
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
   <!-- <script src="vendor/chart.js/Chart.min.js"></script>-->
    <script src="vendor/datatables/jquery.dataTables.js"></script>
    <script src="vendor/datatables/dataTables.bootstrap4.js"></script>
  
    <!-- Custom scripts for all pages-->
    <script src="js/sb-admin.min.js"></script>
  
    <!-- Demo scripts for this page-->
    <script src="js/demo/datatables-demo.js"></script>

         <script type="text/javascript">
       $(document).ready(function(){
             $('#dataTable tbody').on('click','.update',function(){
                    var currow = $(this).closest('tr');
                    var id = currow.find('td:eq(0)').text();
                    var petName = currow.find('td:eq(1)').text();
                    var species = currow.find('td:eq(2)').text();
                    var ownerName = currow.find('td:eq(3)').text();
                    var mobile = currow.find('td:eq(4)').text();
                    var email = currow.find('td:eq(5)').text();
                    var address = currow.find('td:eq(6)').text();
                    var gender = currow.find('td:eq(7)').text();
                    $('#hiddenId').val(id);
                    $('#petName').val(petName);
                    $('#species').val(species);
                    $('#ownerName').val(ownerName);
                    $('#mobile').val(mobile);
                    $('#email').val(email);
                    $('#address').val(address);
                    $('#gender').val(gender);

            });  
        }); 
       </script>
 
  </body>
  
  </html>