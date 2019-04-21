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
    echo '<script type="text/javascript">alert("test");</script>';
    $ownerName = $_POST['ownerName'];
    $mobile = $_POST['mobile'];
    $email = $_POST['email'];
    $address = $_POST['patientAddress'];
    $petName = $_POST['petName'];
    $species = $_POST['species'];
    $gender = $_POST['gender'];
    $age = $_POST['age'];
    $curCondition = $_POST['curCondition'];
    $medHistory = $_POST['medHistory'];
    $vaccination = $_POST['vaccination'];

        $sql = "INSERT INTO patient (ownerName, mobile, email, patientAddress, petName, species, gender, age, curCondition, medHistory, vaccination)
        VALUES ($ownerName, $mobile, $email, $address, $petName, $species, $gender, $age, $curCondition, $medHistory, $vaccination);";
        mysqli_query($conn, $sql);
        header ("Location: ../patientAdd.php?adding=success");
}
   