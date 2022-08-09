<HTML>
<head>
<link rel="stylesheet" type="text/css" href="css/style5.css">
</head>
<body>
<?php
include "connection.php";
session_start();

if(isset($_GET['vehicleID']))
{
	  $_SESSION['vehicle']=$_GET['vehicleID'];
	
	$sql="SELECT * FROM rentalbook WHERE vehicleID='".$_SESSION['vehicle']."'";
	$result=mysqli_query($conn,$sql);
if($result){
	if($result->num_rows>0)
	{
		header("location:denialmsg.php");
	}else{
	$checkz="SELECT * FROM `user` WHERE username='".$_SESSION['customer']."'" ;
	$result=$conn->query($checkz);
	
   $config="SELECT * FROM `rental` WHERE vehicleID='".$_SESSION['vehicle']."'";
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
			echo "<center>" ."Rented Bus ID:".$_SESSION['vehicle']. "</center>";
			echo "<br>";
			echo "<center>" ."Rent Per Day:".$_SESSION['rent']. "</center>";
			echo "<br>";
		}
	}
	
} 
}
}
  


?>
<form method="post" id="register" action="confirmrental.php">

<center><label>Date</label></center><br>
<center><input type="date" name="date" id="name"></center><br>

<center><label>Return Date </label></center><br>
<center><input type="date" name="returndate" id="name"></center><br>

<center><label>Number Of Days</label></center><br>
<center><input type="number" name="numdays" id="name"></center><br>

<center><input type="submit" name="submit" value="Proceed" id="submit"></center>
</form>
</body>
</HTML>