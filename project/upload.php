<?php
include "connection.php";




?>
<html>
<head>
<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">

<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

<!-- Popper JS -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</head>
<body>

 <table class="table">
  <thead>
    <tr>
      <th scope="col">ID</th>
     
      <th scope="col">Image</th>
	   <th scope="col">Seats</th>
      <th scope="col">Price</th>
	 
		
    </tr>
  </thead>
  <tbody>
  <?php
   include('connection.php');
   $pic=mysqli_query($conn,"SELECT * FROM `rental` ");
   
   while($row=mysqli_fetch_array($pic))
   {
	   echo "
	   <tr>
	   <td>$row[vehicleID]</td>
	   
	   <td><img src='$row[image]' width='100px' height='100px'</td>
	   <td>$row[seats]</td>
	   <td>$row[rentperday]</td>
	
	  <td><a href='rentalbooking.php?vehicleID=$row[vehicleID]' class='btn btn-danger'>Book</a></td>
	   
	   </tr>";
   }
   ?>
  </tbody>
</table>

<a href="cancelrental.php">Cancel Order</a>
<br><br>
<a href="welcome.php">Back</a>


</body>
</html>






