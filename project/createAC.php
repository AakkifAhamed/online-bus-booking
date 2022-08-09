<?php
include "connection.php";

session_start();
	

if(isset($_POST['submit']))
{
	$AID=$_POST['vehicleAID'];
	
	
     $start=$_POST['start'];
	$des=$_POST['destination'];
        $date=$_POST['date'];
		$time=$_POST['time'];
	$price=$_POST['price'];
	$sav=$_POST['SA'];
	
	$check="INSERT INTO ac(vehicleID, Start, Destination,Date,Time,Price,Seats) VALUES ('$AID',' $start','$des','$date','$time','$price','$sav')";
	
		
		
    $result= mysqli_query($conn, $check); 
	if($result==true)
	{
		echo"New Data inserted Successfully";
		header("location:admin.php");
	}else{
		echo "1";
	}
         
       
}	

?>
<HTML>
<head>
<link rel="stylesheet" type="text/css" href="css/style9.css">
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
<label>Vehicle ID</label><br>
<input type="text" name="vehicleAID" id="name" required><br><br>
<label>Start</label><br>
<input type="text" name="start" id="name" required><br><br>
<label>Destination</label><br>
<input type="text" name="destination" id="name" required><br><br>
<label>Date</label><br>
<input type="date" name="date" id="name" required><br><br>
<label>Time</label><br>
<input type="text" name="time" id="name" required><br><br>

<label>Price</label><br>
<input type="number" name="price" id="name" required><br><br>
<label>Seats Available</label><br>
<input type="number" name="SA"  id="name"required><br><br>

<input type="submit" name="submit" id="submit" value="Submit">  <a href="changeacamount.php">Change Ticket Price </a>
<a href="deleteacbus.php" >Delete Bus</a>
</div>
</form>
</div>
</BODY>
</HTML>