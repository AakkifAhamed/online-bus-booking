
<HTML>
<head>
<link rel="stylesheet" type="text/css" href="css/style4.css">
<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">

<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

<!-- Popper JS -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</head>
<BODY>
<div class="register">

<div class="container">
<?php
require_once('connection.php');
session_start();

	 $query="delete  from rentalbook where username='".$_POST['username']."' and vehicleID='".$_POST['vehicleID']."'";
	 $result=mysqli_query($conn,$query);
	   if(mysqli_query($conn,$query))
	   {
		   
		   echo"Rental Cancelled Successfully!";
	   }else{
		   echo"2";
	   }

?>
<H1>Rental Cancelled Successfully!</h1>
  <a href="upload.php">Back</a>
</div>

</div>
</BODY>
</HTML>