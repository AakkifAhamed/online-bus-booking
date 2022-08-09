<?php
include('connection.php');
$ID=$_GET['vehicleID'];

mysqli_query($conn,"DELETE FROM `rental` WHERE vehicleID=$ID");
header('location:create.php');
?>