<?php
if(isset($_POST['delete']))
{
	echo("1");
}

?>


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
<form action="confirmcancel.php" id="register" method="POST" enctype="multipart/form-data">
<div class="container">
<h1>Rental Cancellation</h1>
<label>User Name</label><br>
<input type="text" name="username" id="name" required><br><br>
<label>VehicleID</label><br>
<input type="text" name="vehicleID" id="name" required><br><br>
<center><input type="submit" name="delete" value="Cancel" id="submit"></center><br>



</div>
</form>
</div>
</BODY>
</HTML>