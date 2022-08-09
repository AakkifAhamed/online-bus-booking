<html>
<head>
<link rel="stylesheet" type="text/css" href="css/style6.css">
</head>
<body>
<div class="register">
<form action="storenonacticpay.php" method="POST" id="register">
<?php

require_once('connection.php');
session_start();
if(isset($_POST['submit'])){
$username=$_SESSION['customer'];
$id=$_SESSION['vID1'];
$quantity=$_POST['quantity'];
$_SESSION['quant1']=$quantity;
$total=$_SESSION['pri1'] * $quantity;
$_SESSION['tot1']=$total;

}
echo "<br>";
echo"<br>";
echo "<br>";

echo'<center>';
echo "Name:".$_SESSION['customer'];
echo "<br>";
echo "VehicelID:".$_SESSION['vID1'];
echo "<br>";
echo "Seats booked:".$_SESSION['quant1'];
echo "<br>";
echo "Total:".$_SESSION['tot1'];
echo "<br>";
$query = "SELECT * FROM nonac WHERE vehicleID='".$_SESSION['vID1']."'";
$query_run = $conn->query($query);
while ($num = $query_run->fetch_assoc()) {
	echo '<center>';
     echo"Start:"."<td>".$num['Start']."</td>";
	 $_SESSION['start1']=$num['Start'];
	 echo"<br>";
	 echo "Destination:"."<td>".$num['Destination']."</td>";
	 $_SESSION['des1']=$num['Destination'];
	  echo"<br>";
	 echo "Date:"."<td>".$num['Date']."</td>";
	 $_SESSION['ddate1']=$num['Date'];
	  echo"<br>";
	 echo "Time:"."<td>".$num['Time']."</td>";
	 $_SESSION['dtime1']=$num['Time'];
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

<center><input type="submit" name="submit1" value="Confirm" id="submit"></center><center><br><a href="nonacbooking.php" >Change Details</a></center>
</form>
</div>
</body>
</html>