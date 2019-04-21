<?php   include "config.php"; 

     if(isset($_GET['idVet']))
        {
                $id=$_GET['idVet'];

                $sql = "DELETE FROM tbl_services WHERE id=:id";
                $query = $conn->prepare($sql);   
                $query -> bindParam(':id',$id, PDO::PARAM_STR);
                $query -> execute();
                header('location:paymentAll.php');
        }

       if(isset($_GET['deactivateId']))
        {
                $id=$_GET['deactivateId'];
                $status = 0;
                $sql = "UPDATE tbl_services SET status=:status  WHERE id=:id";
                $query = $conn->prepare($sql);   
                $query -> bindParam(':id',$id, PDO::PARAM_STR);
                $query -> bindParam(':status',$status, PDO::PARAM_STR);
                $query -> execute();
                header('location:paymentAll.php');
        }

           if(isset($_GET['activateId']))
        {
                $id=$_GET['activateId'];
                $status = 1;
                $sql = "UPDATE tbl_services SET status=:status  WHERE id=:id";
                $query = $conn->prepare($sql);   
                $query -> bindParam(':id',$id, PDO::PARAM_STR);
                $query -> bindParam(':status',$status, PDO::PARAM_STR);
                $query -> execute();
                header('location:paymentAll.php');
        }

         if(isset($_POST['btnUpdate']))
        {
                $id=$_POST['hiddenId'];
                $serviceName=$_POST['serviceName'];
                $price=$_POST['price'];
          
           
                $sql = "UPDATE tbl_services set serviceName=:serviceName,price=:price
                WHERE id=:id";
                $query = $conn->prepare($sql);   
                $query -> bindParam(':id',$id);
                $query -> bindParam(':serviceName',$serviceName); 
                $query -> bindParam(':price',$price); 
    
                $query -> execute();
                header('location:paymentAll.php');
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
              
                    <!-- DataTable for Appointments -->
        <div class="card mb-3">
              <div class="card-header">
                  <i class="fa fa-clipboard-list"></i>
                  List of Services</div>
                <div class="card-body">
                  <div class="table-responsive">
                    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0" style="white-space: nowrap;">
                      <thead>
                        <tr>
                          <th>Id</th>
                          <th>Service Name</th>
                          <th>Price</th>
                          <th>Created Date</th>
                          <th>Status</th>
                           <th width="200">Action</th>
                        </tr>
                      </thead>
                      <tbody>
                                   <?php   

                                        $sql = "SELECT * from tbl_services";
                                        $query = $conn -> prepare($sql);
                                        $query->execute();
                                        while($row =  $query->fetch())
                                    {   
                                       ?>  
                                         <tr>
                                                <td> <?php echo htmlentities($row['id']);?></td>
                                                <td> <?php echo htmlentities($row['serviceName']);?></td>
                                                <td> <?php echo htmlentities($row['price']);?></td>
                                                <td> <?php echo htmlentities($row['createdDate']);?></td>
                                                <td> <?php 

                                                    if($row['status'] == 1)
                                                    {
                                                         echo"<span class=\"badge badge-success\">Active</span>";
                                                    }
                                                    else
                                                    {
                                                         echo"<span class=\"badge badge-danger\">Inactive</span>";
                                                    }
                                                ?></td>
                                                <td>

                                                <button type="button"  data-toggle="modal" data-target="#myModal" class="update btn btn-primary btn-sm"> Update </button>

                                                <a  class="btn btn-danger btn-sm" href="paymentAll.php?idVet=<?php echo htmlentities($row['id']);?>"  onclick="return confirm('Do you want to delete this service?');">Delete</a>
                                                  <?php
                                                    if($row['status'] == 1){
                                                  ?>
                                                  <a  class="btn btn-danger btn-sm" href="paymentAll.php?deactivateId=<?php echo htmlentities($row['id']);?>"  onclick="return confirm('Do you want to inactive this service?');">Inactive</a>
                                                <?php }
                                                  else {
                                                 ?>
                                                      <a  class="btn btn-success btn-sm" href="paymentAll.php?activateId=<?php echo htmlentities($row['id']);?>"  onclick="return confirm('Do you want to activate this service?');">Active</a>
                                                    <?php } ?>

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
  

  <!-- Modal -->
  <div class="modal fade" id="myModal" role="dialog">
    <div class="modal-dialog modal-lg">
      <div class="modal-content">
          <form  method="POST">
               <input type="hidden" id="hiddenId" name="hiddenId">
        <div class="modal-header">
          <h4 class="modal-title">Update Service</h4>
        </div>
       
        <div class="modal-body">
                
        <div class="form-row">
            <div class="form-group col-md-6">
                <label for="serviceName">Service Name</label>
                <input type="text" class="form-control" name="serviceName" placeholder="Service Name" id="serviceName">
            </div>
                  <div class="form-group col-md-6">
                <label for="price">Price</label>
                <input type="text" class="form-control" name="price" placeholder="Price" id="price">
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
  
         <script type="text/javascript">
       $(document).ready(function(){
             $('#dataTable tbody').on('click','.update',function(){
                    var currow = $(this).closest('tr');
                    var id = currow.find('td:eq(0)').text();
                    var serviceName = currow.find('td:eq(1)').text();
                    var price = currow.find('td:eq(2)').text();
                    $('#hiddenId').val(id);
                    $('#serviceName').val(serviceName);
                    $('#price').val(price);

            });  
        }); 
       </script>
  </html>