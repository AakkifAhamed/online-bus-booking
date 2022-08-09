<html>
<head>
<link rel="stylesheet" type="text/css" href="css/style6.css">
</head>
<body>
<div class="register">
<form action="storepay.php" method="POST" id="register">
<?php
include "connection.php";

session_start();

		

if(isset($_POST['submit']))
{

	$username=$_SESSION['user'];
	$IDnum=$_SESSION['ID'];
	$vehicleID=$_SESSION['vehicle'];
	$date=$_POST['date'];
	$_SESSION['date']=$date;
	$returndate=$_POST['returndate'];
	$_SESSION['returndate']=$returndate;
	 $amountx=$_POST['numdays'];
	 $_SESSION['amountx']=$amountx;
	 $total=$amountx*$_SESSION['rent'];
	$amount=$total;
	$_SESSION['amount']=$amount;
	
	 

	
	echo "<br>"."<br>"."<br>"."<br>";
			echo "<center>" ."User Name:".$_SESSION ['user']. "</center>";
			echo "<br>";
			echo "<center>" ."NIC Number:".$_SESSION['ID']. "</center>" ;
			echo "<br>";
			echo "<center>" ."Rented Bus ID:".$_SESSION['vehicle']. "</center>";
			echo "<br>";
			echo "<center>" ."From:".$_SESSION['date']. "</center>";
			echo "<br>";
			echo "<center>" ."To:".$_SESSION['returndate']. "</center>";
			echo "<br>";
			echo "<center>" ."Total Amount:".$_SESSION['amount']. "</center>";
			echo "<br>";
	
		

  
       


}
	
	
?>


<center><input type="submit" name="submit1" value="Confirm" id="submit"></center><center><br><a href="upload.php" >Change Details</a></center>
</form>
</div>
</body>
</html>