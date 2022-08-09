<html>
<head>
<link rel="stylesheet" type="text/css" href="stylex.css">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</head>
<body>
<?php
include('connection.php');
$ID=$_GET['vehicleID'];
$record=mysqli_query($conn,"SELECT * FROM `rental` WHERE vehicleID=$ID");
$data=mysqli_fetch_array($record);
?>
<center>
<div class="main">
<form action="update1.php"  method="POST"  enctype="multipart/form-data">
<label for="">Seats</label>
<input type="text" value="<?php echo $data['seats']?>"name="seats" id=""><br>
<label for="">Price</label>
<input type="text"value="<?php echo $data['rentperday']?>" name="price" id=""><br>
<label for="" >Image </label><br>
<input type="file" name="image" value="<?php echo $data['image']?>"><img src="<?php echo $data['image'];?>"width='100px' height='100px'><br><br>
<input type="hidden" name="Id" value="<?php echo $data['vehicleID']?>">
<button name="submit" >Update</button>

</form>
</div>
</center>
</body>
</html>