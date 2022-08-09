<html>
<head>
</head>
<body>
<form action="rentmail.php" method="post">

<?php
include "connection.php";
//include "upload.php";

    if(!isset($_SESSION)) 
    { 
        session_start(); 
    } 

if(isset($_POST['submit1']))
{

$username= $_SESSION['user'];
$IDnum= $_SESSION['ID'];
$vehicleID=$_SESSION['vehicle'];
$paydate=date("Y/m/d");
$_SESSION['paydate']=$paydate;
//$cardnumber=$_POST['cardnumber'];
//$_SESSION['cardnumber']=$cardnumber;
$amount= $_SESSION['amount'];
    date_default_timezone_set("Asia/Colombo");

$paytime= date(" H:i:s"); 
$_SESSION['paytime']=$paytime;
$days=$_SESSION['amountx'];
$date=$_SESSION['date'];
$returndate= $_SESSION['returndate'];

$sql="INSERT INTO `rentalbook`(`username`, `vehicleID`, `date`, `returndate`, `amount`) VALUES ('$username','$vehicleID','$date','$returndate','$amount')";
$res=mysqli_query($conn,$sql);
if(!$res)
{
	echo "Failed";
}else{
	header("location:rentalpdf.php");
}
}

?>


</form>

</body>
</html>