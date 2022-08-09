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
</html>
<?php
include "connection.php";

session_start();
if(isset($_GET['vehicleID']))
{
	 $vid=$_GET['vehicleID'];
	
	
	$checkz="SELECT * FROM `acbooking` WHERE vehicleID='".$_GET['vehicleID']."'" ;
	$result=$conn->query($checkz);

}

echo "<table border='5'>
<tr>


<th >Order ID</th>
<th>Vehicle ID</th>
<th>User name</th>
<th>Start</th>
<th>Destination</th>
<th>Tickets</th>
<th>Amount</th>
<th>Booked date</th>
<th>Booked time</th>
<th>Reset</th>
<th>Save</th>

</tr>";








if($result->num_rows>0){
	while($row=$result->fetch_assoc()){

	  
		 
			  
			  echo "<tr>";
	     echo"<td  width='80' height='58' align='center'>".$row['paidid']."</td>";
	     echo"<td  width='80' height='58' align='center'>".$row['vehicleID']."</td>";
	     echo"<td  width='80' height='58' align='center'>".$row['username']."</td>";
		 echo"<td  width='80' height='58' align='center'>".$row['start']."</td>";
		 echo"<td  width='80' height='58' align='center'>".$row['destination']."</td>";
		 echo"<td  width='80' height='58' align='center'>".$row['quantity']."</td>";
		 echo"<td  width='80' height='58' align='center'>".$row['total']."</td>";
		 echo"<td  width='90' height='58' align='center'>".$row['paiddate']."</td>";
	     echo"<td  width='80' height='58' align='center'>".$row['paidtime']."</td>";
		 echo"<td>". '<a class="btn btn-danger" href="confirmresetac.php?vehicleID=' . $row['vehicleID'] . '" >Reset</a>'."</td>";
		 echo"<td>". '<a class="btn btn-info" href="resetacpdf.php?vehicleID=' . $row['vehicleID'] . '" >Save</a>'."</td>";
		 
	   
	   echo "</tr>";
		  
		  }
	}
	





		
	
	
	
	

?>