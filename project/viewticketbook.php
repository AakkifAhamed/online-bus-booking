<html>
<head>
<link rel="stylesheet" type="text/css" href="css/style6.css">
</head>
<body>
<div class="register">
<form action="storeacticpay.php" method="POST" id="register">
<?php

require_once('connection.php');
session_start();
if(isset($_POST['submit'])){
$username=$_SESSION['customer'];
$id=$_SESSION['vID'];
$quantity=$_POST['quantity'];
$_SESSION['quant']=$quantity;
$total=$_SESSION['pri'] * $quantity;
$_SESSION['tot']=$total;

}
echo "<br>";
echo"<br>";
echo "<br>";

echo'<center>';
echo "Name:".$_SESSION['customer'];
echo "<br>";
echo "VehicelID:".$_SESSION['vID'];
echo "<br>";
echo "Seats booked:".$_SESSION['quant'];
echo "<br>";
echo "Total:".$_SESSION['tot'];
echo "<br>";
$query = "SELECT * FROM ac WHERE vehicleID='".$_SESSION['vID']."'";
$query_run = $conn->query($query);
while ($num = $query_run->fetch_assoc()) {
	echo '<center>';
     echo"Start:"."<td>".$num['Start']."</td>";
	 $_SESSION['start']=$num['Start'];
	 echo"<br>";
	 echo "Destination:"."<td>".$num['Destination']."</td>";
	 $_SESSION['des']=$num['Destination'];
	  echo"<br>";
	 echo "Date:"."<td>".$num['Date']."</td>";
	 $_SESSION['ddate']=$num['Date'];
	  echo"<br>";
	 echo "Time:"."<td>".$num['Time']."</td>";
	 $_SESSION['dtime']=$num['Time'];
}
/*if(isset($_POST['submit'])){
$username=$_SESSION['customer'];
$id=$_SESSION['vID'];
$quantity=$_POST['quantity'];
$_SESSION['quant']=$quantity;
$total=$_SESSION['pri'] * $quantity;
$_SESSION['tot']=$total;
$check="INSERT INTO acbooking(username, vehicleID, quantity, total) VALUES ('$username','$id','$quantity','$total')";
$result= mysqli_query($conn, $check); 
	if($result==true)
	{
		
		header("location:viewticketbook.php?message=PAY HERE");
	}else{
		echo "1";
	}
} */
?>

<center><input type="submit" name="submit1" value="Confirm" id="submit"></center><center><br><a href="ACbooking.php" >Change Details</a></center>
</form>
</div>
</body>
</html>