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
	
$id=$_SESSION['vID'];

$quantity=$_SESSION['quant'];
$depdate=$_SESSION['depdate'];

$total=$_SESSION['pri'] * $quantity;
$_SESSION['tot']=$total;
$cardnumber=$_POST['cardnumber'];
$_SESSION['cnumber']=$cardnumber;
$start=$_SESSION['start'];
$destination=$_SESSION['des'];
$paydate=date("Y/m/d");
$_SESSION['paydate']=$paydate;
  date_default_timezone_set("Asia/Colombo");

$paytime= date(" H:i:s"); 
$_SESSION['paytime']=$paytime;
$check="INSERT INTO acbooking(username, vehicleID,start,destination, quantity, total,paiddate,paidtime,departuredate) VALUES ('$username','$id','$start','$destination','$quantity','$total','$paydate','$paytime','$depdate')";
$result= mysqli_query($conn, $check); 
	if($result==true)
	{
		 $_SESSION['id']= mysqli_insert_id($conn);
		 
			header("location:acticpdf.php");
			
		
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