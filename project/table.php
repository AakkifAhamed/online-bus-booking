<?php
include "connection.php";
session_start();

$sql="SELECT * FROM rental";
$result=$conn->query($sql);
$mysql="SELECT * FROM rentalpay";

$mysql="SELECT `vehicleID` FROM `rentalpay`";
$myresult=$conn->query($mysql);
if($myresult==true){
if ($myresult->num_rows > 0) {
  // output data of each row
  while($row = $myresult->fetch_assoc()) {
    $VID= $row["vehicleID"];
  
  }
}
}


<?php


if(($result->num_rows>0)&&($myresult->num_rows>0)){
	while($row=$result->fetch_assoc()){
		
	?>
	
		<tr>
		
       <td><?php echo $row['vehicleID'];?></td>
	   
	   <td><img src="<?php echo $row ['image'];?>" height="100px" width="100px"</td>
	   <td><?php echo $row['seats'];?></td>
	   <td><?php echo $row['rentperday'];?></td>
       
	   
	   <td><?php if($row['vehicleID']==$VID){echo "BOOKED";}else{
		   
		   $_SESSION['veID']=$row['vehicleID'];
		   echo("<button onclick=\"location.href='rentalbooking.php'\">Book</button>");
	   } ?></td>
	  
       </tr>
	   
<?php	}
}else{
	while($row=$result->fetch_assoc()){
		
	?>
	
		<tr>
		
       <td><?php echo $row['vehicleID'];?></td>
	   <td><img src="<?php echo $row ['image'];?>" height="100px" width="100px"</td>
	   <td><?php echo $row['seats'];?></td>
	   <td><?php echo $row['rentperday'];?></td>

	   <td><a class="btn btn-info" href="rentalbooking.php?vehicleID=<?php echo $row['vehicleID'];?>">Book</a></td>
	  
       </tr>
	   
<?php	}
}
    
?>



else{
	$checkz="SELECT * FROM `user` WHERE username='".$_SESSION['customer']."'" ;
	$result=$conn->query($checkz);
	
   $config="SELECT * FROM `rental` WHERE vehicleID='".$_SESSION['veID']."'";
    $task=$conn->query($config);
	
      if($task->num_rows>0){
		  while($row=$task->fetch_assoc()){
			  $rent=$row['rentperday'];
			  $_SESSION['rent']=$row['rentperday'];
			 
			  
		  }
	  }
	  if($result->num_rows>0){
		 
		 
		while($row=$result->fetch_assoc()){
			$username=$row['username'];
			$IDnum=$row['IDnum'];
			 $_SESSION ['user']=$row['username'];
	          $_SESSION['ID']=$row['IDnum'];
			 echo "<br>"."<br>"."<br>"."<br>";
			echo "<center>" ."User Name:".$username. "</center>";
			echo "<br>";
			echo "<center>" ."NIC Number:".$IDnum. "</center>" ;
			echo "<br>";
			echo "<center>" ."Rented Bus ID:".$_SESSION['veID']. "</center>";
			echo "<br>";
			echo "<center>" ."Rent Per Day:".$_SESSION['rent']. "</center>";
			echo "<br>";
		}
	}
}
?>