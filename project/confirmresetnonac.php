<?php
include "connection.php";

session_start();
if(isset($_GET['vehicleID']))
{
	
	$veid=$_GET['vehicleID'];
	
	$checkz="DELETE  FROM `nonacbooking` WHERE vehicleID='".$_GET['vehicleID']."'" ;
	
	$resultz=mysqli_query($conn,$checkz);
	   if(mysqli_query($conn,$checkz))
	   {
		   
		   echo"Details deleted Successfully!";
	   }else{
		   echo"Failed";
	   }


}?>
<?php
	 if (isset($_POST['delete']))
{
	$query="UPDATE nonac SET Destination='".$_POST['destination']."',Date='".$_POST['date']."',Time='".$_POST['time']."' WHERE vehicleID='".$_GET['vehicleID']."'";
	
	
	 $result=mysqli_query($conn,$query);
	   if(mysqli_query($conn,$query))
	   {
		   
		   echo"Details changed Successfully!";
	   }else{
		   echo"Failed";
	   }
}
?>
<html>
<head>
<link rel="stylesheet" type="text/css" href="css/style4.css">
<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">

<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

<!-- Popper JS -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</head>
<BODY>
<div class="register">
<form action="" id="register" method="POST" enctype="multipart/form-data">
<div class="container">
<h1>Reset Details</h1>
<label>Destination</label><br>
<input type="text" name="destination" id="name" required><br><br>
<label>Date</label><br>
<input type="date" name="date" id="name" required><br><br>
<label>Time</label><br>
<input type="text" name="time" id="name" required><br><br>
<center><input type="submit" name="delete" value="Reset" id="submit"></center><br>



</div>
</form>
</div>
</BODY>

</html>