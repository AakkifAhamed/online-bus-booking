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


$sql="SELECT * FROM ac";
$result=$conn->query($sql);

echo "<table border='5'>
<tr>


<th >Vehicle ID</th>
<th>Date</th>
<th>Start</th>
<th>Destination</th>
<th>Time</th>

</tr>";



$stop_date = date("Y-m-d");




if($result->num_rows>0){
	while($row=$result->fetch_assoc()){

	  
		  $stop_date1 = date('Y-m-d ', strtotime($row['Date'] . ' +0 day'));
		  $stop_date2 = date('Y-m-d ', strtotime($stop_date . ' +0 day'));
	      if($stop_date1==$stop_date2)
		  {
			  
			  echo "<tr>";
	   
	   echo"<td  width='80' height='58' align='center'>".$row['vehicleID']."</td>";
	   echo"<td  width='90' height='58' align='center'>".$row['Date']."</td>";
	   echo"<td width='90' height='58'>". $row['Start']."</td>";
	   echo"<td width='90' height='58'>". $row['Destination']."</td>";
	    echo"<td width='90' height='58'>". $row['Time']."</td>";
	    echo"<td>". '<a class="btn btn-danger" href="confirmresetac.php?vehicleID=' . $row['vehicleID'] . '" >Reset</a>'."</td>";
		 echo"<td>". '<a class="btn btn-info" href="resetacpdf.php?vehicleID=' . $row['vehicleID'] . '" >Save</a>'."</td>";
	   echo "</tr>";
		  }
		  }
	}
	





		
	
	
	
	

?>