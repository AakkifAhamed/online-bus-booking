<?php

require_once('connection.php');
session_start();
if(isset($_POST['Search'])){
	
		
		
	  $sql="select * from ac where Destination='".$_POST['destination']."' ";
	  $result=$conn->query($sql);
	  echo "<table border='5'>
<tr>
<th>VehicleID</th>
<th>Start</th>
<th>Destintion</th>
<th>Date</th>
<th>Time</th>
<th>Price</th>
<th>Seats</th>
<th> </th>
</tr>";

if($result->num_rows>0){
	while($row=$result->fetch_assoc()){
		
	   echo "<tr>";
	   echo"<td width='50' height='58'>".$row['vehicleID']."</td>";
	       
	   echo" <td width='150' height='58'>".$row['Start']."</td>";
	   echo"<td width='150' height='58'>". $row['Destination']."</td>";
	   echo"<td width='150' height='58'>". $row['Date']."</td>";
	   echo"<td width='150' height='58'>". $row['Time']."</td>";
	   echo"<td width='150' height='58'>". $row['Price']."</td>";

	   echo"<td width='150' height='58'>". $row['Seats']."</td>";
       echo"<td>". '<a class="btn btn-info" href="acticket.php?vehicleID=' . $row['vehicleID'] .  '" >View</a>'."</td>";
	  
	   
       echo "</tr>";

	}
}
	
}
	
?>







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
<a href="cancelactic.php">Cancel Pay</a><br><a href="welcome.php">Back</a>
<form action="ACbooking.php" method="post">
   <input type="text" name="destination" placeholder="Destination" required>
   
   <input type="submit" name="Search" value="Search"><br><br>
  
 </form>

<tbody>