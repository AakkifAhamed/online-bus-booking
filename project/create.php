<html>
<head>
<link rel="stylesheet" type="text/css" href="stylex.css">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

</head>

<body>
<center>
<div class="main">
<form action="insertdet.php"  method="POST"  enctype="multipart/form-data">
<label for="">Seats</label>
<input type="text" name="seats" id=""><br><br>
<label for="">Rent </label>
<input type="text" name="price" id=""><br><br>
<label for="" >Image </label>
<input type="file" name="image" id=""><br><br>
<button name="upload">Upload</button>

</form>
</div>
</center>

<table class="table">
  <thead>
    <tr>
      <th scope="col">ID</th>
     
      <th scope="col">Image</th>
	   <th scope="col">Seats</th>
      <th scope="col">Price</th>
	  <th scope="col">Delete</th>
	  <th scope="col">Update</th>
		
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
	   <td><a href='delete.php?vehicleID=$row[vehicleID]' class='btn btn-danger'>Delete</a></td>
	   <td><a href='update.php?vehicleID=$row[vehicleID]' class='btn btn-primary'>Update</a></td>
	   
	   
	   </tr>";
   }
   ?>
  </tbody>
</table>
</body>
</html>