<HTML>
<body>

<?php

require_once('connection.php');
session_start();
if(isset($_POST['Login']))
	if($_POST['username']=='admin')
	{
		 $query="select * from user where username='".$_POST['username']."' and password='".$_POST['password']."'";
	 $result=mysqli_query($conn,$query);
	   if(mysqli_fetch_assoc($result))
	  {
		 
		header("location:admin.php");
	   }else{
		   header("location:login.php?Invalid=Login failed Re-Enter");
	   }
	}
	else{
		
	  $query="select * from user where username='".$_POST['username']."' and password='".$_POST['password']."'";
	 $result=mysqli_query($conn,$query);
	   if(mysqli_fetch_assoc($result))
	  {
		  $_SESSION['customer']=$_POST['username'];
		  
		header("location:welcome.php");
	   }else{
		   header("location:login.php?Invalid=Login failed Re-Enter");
	   }
	

	}
?>

</body>
</HTML>