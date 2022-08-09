<?php
include "connection.php";

session_start();
//$username= $_SESSION['customer'];
$sql="SELECT * FROM rentalbook";
$result=$conn->query($sql);
echo "<table border='5'>
<tr>
<th>UserName</th>

<th>VehicleID</th>
<th>Date</th>
<th>Return Date</th>

<th>Amount</th>
</tr>";
if($result){
if($result->num_rows>0){
	while($row=$result->fetch_assoc()){
		
		echo "<tr>";
	   
	   echo"<td width='50' height='58'>".$row['username']."</td>";

	   echo"<td width='150' height='58'>". $row['vehicleID']."</td>";
	   echo"<td width='150' height='58'>". $row['date']."</td>";
	   echo"<td width='150' height='58'>". $row['returndate']."</td>";
	  
	   echo"<td width='150' height='58'>". $row['amount']."</td>";
      
	  
	   
       echo "</tr>";

	}
}
}
?>