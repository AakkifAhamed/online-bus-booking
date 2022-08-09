<?php
include "connection.php";
session_start();
echo "<table border='5'>
<tr>

<th>User Name</th>
<th>VehicleID</th>

<th>Destination</th>
<th>Booked Date</th>
<th>Departure Date</th>
</tr>";
$name=$_SESSION['customer'];

$sql="SELECT * FROM acbooking WHERE username='".$name."'";
$result=$conn->query($sql);

while($row=$result->fetch_assoc())
{
	 echo "<tr>";
	  echo"<td width='50' height='58'>".$row['username']."</td>";
	   echo"<td width='50' height='58'>".$row['vehicleID']."</td>";
	     
	   echo"<td width='150' height='58'>". $row['destination']."</td>";
	   echo"<td width='150' height='58'>". $row['paiddate']."</td>";
	    echo"<td width='150' height='58'>".$row['departuredate']."</td>";
	   
}

?>