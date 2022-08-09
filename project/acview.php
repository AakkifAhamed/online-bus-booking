<html>
<head>

<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">

<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

<!-- Popper JS -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</head>
<body>

<div class="container">


<h2>Details</h2>

<form action="acview.php" method="post">
   <input type="text" name="paiddate" placeholder="Date" required>
   
   <input type="submit" name="Search" value="Search"><br><br>
  
 </form>
<?php
include "connection.php";
if(isset($_POST['Search'])){
session_start();
//$username= $_SESSION['customer'];
$sql="SELECT * FROM acbooking where paiddate='".$_POST['paiddate']."' ";
$result=$conn->query($sql);
echo "<table border='5'>
<tr>
<th>Paid ID</th>
<th>User Name</th>
<th>VehicleID</th>
<th>Start</th>
<th>Destination</th>
<th>Seats booked</th>
<th>Total</th>

<th>Booked Date</th>
<th>Booked Time</th>

</tr>";

if($result->num_rows>0){
	while($row=$result->fetch_assoc()){
		
		echo "<tr>";
	   
	   echo"<td width='50' height='58'>".$row['paidid']."</td>";
	   echo"<td width='150' height='58'>". $row['username']."</td>";
	   echo"<td width='150' height='58'>". $row['vehicleID']."</td>";
	   echo"<td width='150' height='58'>". $row['start']."</td>";
	   echo"<td width='150' height='58'>". $row['destination']."</td>";
	   echo"<td width='150' height='58'>". $row['quantity']."</td>";
	   echo"<td width='150' height='58'>". $row['total']."</td>";
	   //echo"<td width='150' height='58'>". $row['ccnumber']."</td>";
	   echo"<td width='150' height='58'>". $row['paiddate']."</td>";
	   echo"<td width='150' height='58'>". $row['paidtime']."</td>";
      
	  
	   
       echo "</tr>";

	}
}
}
?>