<?php
require_once('connection.php');
session_start();

$query = "SELECT * FROM acbooking WHERE vehicleID='".$_GET['vehicleID']."'";
$query_run = $conn->query($query);
$qty= 0;
while ($num = $query_run->fetch_assoc()) {
    $qty += $num['quantity'];
}
$query1 = "SELECT * FROM ac WHERE vehicleID='".$_GET['vehicleID']."'";
$query_run1 = $conn->query($query1);
$seats= 0;
while ($num = $query_run1->fetch_assoc()) {
 $seats= $num['Seats'];
}



?>
<HTML>
<head>
<link rel="stylesheet" type="text/css" href="css/style10.css">
</head>
<body>
<form method="post" id="register" action="viewticketbook.php">

<center><label>Available Seats</label></center><br>
<center><?php $seats=$seats-$qty;echo($seats);?></center>

<center><label>User Name </label></center><br>
<center><?php echo($_SESSION['customer']);?></center><br>

<center><label>VehicleID</label></center><br>
<center><?php $_SESSION['vID']=$_GET['vehicleID'];
echo($_SESSION['vID']);?></center><br>

<center><label>Quantity</label></center><br>
<center><input type="number" name="quantity" id="name"></center><br>


<center><?php    if(isset($_GET['vehicleID']))
{
	  
	
	
	
	
   $config="SELECT * FROM `ac` WHERE vehicleID='".$_SESSION['vID']."'";
    $task=$conn->query($config);
	
      
		  while($row=$task->fetch_assoc()){
			  
			 
			$_SESSION['pri']=$row['Price'];
			$_SESSION['depdate']=$row['Date'];
			  
	  }
	  } ?></center><br>
	<?php if($seats==0)
	echo "No seats Available"."<br>";
 else{
	 echo '<center><input type="submit" name="submit" value="Book" id="submit" ></center>';
 }
?>
<a href="Acbooking.php">Back</a>
</form>
</body>
</HTML>
