<?php

$Username=$_POST['Username'];
$oldpassword=$_POST['oldpassword'];
$newpassword=$_POST['newpassword'];
$confirm=$_POST['confirm'];


if(!empty($Username) || !empty($oldpassword) || !empty($newpassword) ||!empty($confirm) )
{
	$host="localhost";
	$dbusername="root";
	$dbPassword="jarvis13#";
	$dbname="register";
	$conn=new mysqli($host,$dbusername,$dbPassword,$dbname);
	
	if(mysqli_connect_error())
	{
	  die('Connect Error(' . mysqli_connect_error().')'. mysqli_connect_error());	
	}else
	{
		
	   
    if(isset($_POST['Update']))
	 {
		
	  
	  $check="select username from user where password='".$_POST['oldpassword']."'";
	   $resultz=mysqli_query($conn,$check);
	   if(mysqli_fetch_assoc($resultz))
	  {
		  if($newpassword==$confirm)
		  {
			mysqli_query($conn,"UPDATE user set password='" . $_POST['newpassword'] . "' WHERE username='" . $Username . "'");
			
			header("location:login.php?Invalid=Password Updated Successfully");
			
				
			
			
		  }	else{
			  header("location:change.php?message=Re-Enter Password");
		  }
      }else{
		  header("location:change.php?message=Invalid Password");
	  }
	 }
	}
}

?>