<?php
include('connection.php');
if(isset($_POST['submit'])){
	$ID=$_POST['Id'];
    $seats=$_POST['seats'];
	$price=$_POST['price'];
	$image=$_FILES['image'];
	
	//print_r($_FILES['image']);
	$img_loc=$_FILES['image']['tmp_name'];
	$img_name=$_FILES['image']['name'];
	
	move_uploaded_file($img_loc,'uploadimage/'.$img_name);
	$img_des="uploadimage/".$img_name;
	
	mysqli_query($conn,"UPDATE `rental` SET `Image`='$img_des',`seats`='$seats',`rentperday`='$price' WHERE vehicleID='$ID'");
	header("location:create.php");
}
?>