<?php
include('connection.php');

if(isset($_POST['upload']))
{
	$seats=$_POST['seats'];
	$price=$_POST['price'];
	$image=$_FILES['image'];
	
	//print_r($_FILES['image']);
	$img_loc=$_FILES['image']['tmp_name'];
	$img_name=$_FILES['image']['name'];
	
	move_uploaded_file($img_loc,'uploadimage/'.$img_name);
	$img_des="uploadimage/".$img_name;
	
	$query="INSERT INTO `rental`( `image`, `seats`, `rentperday`) VALUES ('$img_des','$seats','$price')";
	
	$result=mysqli_query($conn,$query);
	
	header('location:create.php');
	
	
	
}
?>