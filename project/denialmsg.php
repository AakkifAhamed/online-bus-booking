
<html>
<head>
<link rel="stylesheet" type="text/css" href="css/x.css">
</head>
<body>
<div class="register"
<form action="" method="post" id="register">
<?php
include "connection.php";
session_start();
$sql="SELECT * FROM rentalbook WHERE vehicleID='".$_SESSION['vehicle']."'";
$result=mysqli_query($conn,$sql);
while($row=mysqli_fetch_array($result))
{
	$returndate=$row['returndate'];
}
echo "<center>"."No Bookings Available";
echo "<br>";
echo "Booked until ".$returndate;
echo "<br>";
?>

<a href="upload.php">Back</a>
</div>
</form>
</body>
</html>