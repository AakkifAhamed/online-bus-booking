<HTML>
<link rel="stylesheet" type="text/css" href="css/style3.css">
<body>
<div class="logs">
<UL>
<LI ><a href="index.php">Home</a></LI>
<LI  ><a href="login.php">Login</a></LI>
<LI><a href="Contact Us.php">Contact Us</a></LI>
</UL>
</div>
<?php
   if(@$_GET['Invalid']==true)
	
   {
?>
  <div class="alert-light text-danger text-center py-3">
 
  <?php  echo $_GET['Invalid'] ?></div>
  
   

   
   <?php
  
   }
 
  ?>
   <?php
   if(@$_GET['message']==true)
	
   {
?>
  <div class="alert-dark text-danger text-center py-3">
 
  <?php  echo $_GET['message'] ?></div>
  
   

   
   <?php
  
   }
 
  ?>
<h1>Change Pasword</h1>
<div class="register">
 <?php
   if(@$_GET['message']==true)
	
   {
?>
  <div class="alert-dark text-danger text-center py-3">
 
  <?php  echo $_GET['message'] ?></div>
  
   

   
   <?php
  
   }
  ?>
<h2>Update Here</h2>
<form method="post" id="register" action="verifychange.php">
<label>User Name</label><br>
<input type="text" name="Username" id="name"  required><br><br>

<label>Old Password</label><br>
<input type="text" name="oldpassword" id="name"  required><br><br>
<label>New Password</label><br>
<input type="text" name="newpassword" id="name"  required><br><br>

<label>Confirm Password</label><br>
<input type="text" name="confirm" id="name"  required><br><br>



<input type="submit" value="Update" name="Update" id="submit">
</form>
</div>
  
 

</body>
</HTML>