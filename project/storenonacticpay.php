<html>

<body>

<?php
include "connection.php";
include "ACbooking.php";

    if(!isset($_SESSION)) 
    { 
        session_start(); 
    } 

if(isset($_POST['submit1']))
{
	$username=$_SESSION['customer'];
	
$id=$_SESSION['vID1'];

$quantity=$_SESSION['quant1'];
$ndepdate=$_SESSION['ndepdate'];

$total=$_SESSION['pri1'] * $quantity;
$_SESSION['tot1']=$total;
//$cardnumber=$_POST['cardnumber'];
//$_SESSION['cnumber1']=$cardnumber;
$start=$_SESSION['start1'];
$destination=$_SESSION['des1'];
$paydate=date("Y/m/d");
$_SESSION['paydate1']=$paydate;
  date_default_timezone_set("Asia/Colombo");

$paytime= date(" H:i:s"); 
$_SESSION['paytime1']=$paytime;
$check="INSERT INTO nonacbooking(username, vehicleID,start,destination, quantity, total,paiddate,paidtime,departuredate) VALUES ('$username','$id','$start','$destination','$quantity','$total','$paydate','$paytime','$ndepdate')";
$result= mysqli_query($conn, $check); 
	if($result==true)
	{
		 $_SESSION['id1']= mysqli_insert_id($conn);
		 
			header("location:nonacticpdf.php");
			
		
	}else{
		echo "1";
	}
 
 }else if(isset($_POST['delete']))
{
	header("location:ACbooking.php");
}else if(isset($_POST['home']))
{
	header("location:welcome.php");
}
?>


</body>
</html>