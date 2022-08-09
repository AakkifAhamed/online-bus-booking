
<?php
include "connection.php";

session_start();


$sql="SELECT * FROM ac";
$result=$conn->query($sql);

echo "<table border='5'>
<tr>

<th>VehicleID</th>
<th>Start</th>
<th>Destination</th>
<th>Date</th>
<th>Time</th>
<th>Price</th>
<th>Seats</th>
<th>Available seats</th>

</tr>";
$seats=0;


$mysql="SELECT * FROM acbooking";
$myresult=$conn->query($mysql);

if($result->num_rows>0){

	$seats=0;
	$userinfo = array();

	while($row1=$myresult->fetch_assoc())
	{
		$userinfo[]=$row1;
	}
	
	while($row=$result->fetch_assoc()){
	
     foreach($userinfo as $user)
	 {
		

		 if($row['vehicleID']==$user['vehicleID'])
		 {
			
		$query = "SELECT * FROM acbooking WHERE vehicleID='".$row['vehicleID']."'";
        $query_run = $conn->query($query);
        $qty= 0;
      while ($num = $query_run->fetch_assoc()) {
      $qty += $num['quantity'];
     }
	 $seats=$row['Seats']-$qty;
	 break;
		 }else{
			 $seats=$row['Seats'];
		 }
		 echo "<tr>";
	 } 
	 
	   
	   echo"<td width='150' height='58'>". $row['vehicleID']."</td>";
      
	   echo"<td width='150' height='58'>". $row['Start']."</td>";
	   echo"<td width='150' height='58'>". $row['Destination']."</td>";
	   echo"<td width='150' height='58'>". $row['Date']."</td>";
	   echo"<td width='150' height='58'>". $row['Time']."</td>";
	   echo"<td width='150' height='58'>". $row['Price']."</td>";
	   echo"<td width='150' height='58'>". $row['Seats']."</td>";
	   echo"<td width='150' height='58'>".$seats."</td>";
	   
	   
	   
      
	  
	   
	echo "</tr>";


	}//while $row
	
}




		
	
	
	
	

?>


 
	 
	
		
     
	  
	
	
       
    
     

 
 




		  
		   
	
	 

