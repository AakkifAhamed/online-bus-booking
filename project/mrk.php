<?php
include "connection.php";

session_start();
	

if(isset($_POST['submit']))
{
	$name$_POST['name'];
	
	
     $age=$_POST['age'];
	$address=$_POST['address'];
        $email=$_POST['email'];
		$contact=$_POST['contact'];

	
	$check="INSERT INTO ac(vehicleID, Start, Destination,Date,Time,Price,Seats) VALUES ('$AID',' $start','$des','$date','$time','$price','$sav')";
	
		
		
    $result= mysqli_query($conn, $check); 
	if($result==true)
	{
		echo"New Data inserted Successfully";
		header("location:admin.php");
	}else{
		echo "1";
	}
         
       
}	

?>
<HTML>

<BODY>
<form method="Post">
<label>Name</label><br><br>
<input type="text" name="name" placeholder="Name" required><br><br>

<label>Address</label><br><br>
<input type="text" name="address" placeholder="Addres" required><br><br>

<label>Age</label><br><br>
<input type="text" name="age" placeholder="Age" required><br><br>

<label>Email</label><br><br>
<input type="text" name="email" placeholder="Email" required><br><br>

<label>Contacts</label><br><br>
<input type="text" name="contact" placeholder="Contactss" required><br><br>

<input type="submit" name="submit" value="Submit">



</form>

</BODY>
</HTML>

