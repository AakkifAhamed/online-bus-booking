<HTML>
<head>
<link rel="stylesheet" type="text/css" href="css/style1.css">
</head>
<body>
<div class="log">
<UL>
<LI ><a href="index.php">Home</a></LI>
<LI class="active" ><a href="#">Login</a></LI>
<LI><a href="Contact Us.php">Contact Us</a></LI>
</UL>
</div>
<div class="box">

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
  <div class="alert-light text-danger text-center py-3">
 
  <?php  echo $_GET['message'] ?></div>
  
   

   
   <?php
  
   }
 
  ?>
  

<img src="logo.png" class="logo">
<h1>Login Here<h1>

<form action="verify.php" method="post">
   <input type="text" name="username" placeholder="Enter Username" required>
   <input type="password" name="password" placeholder="Enter Password" required>
   <input type="submit" name="Login" value="Login">
  
   <a href="welcomex.php?pageset=true">Login as Guest</a><br>
   <a href="new account.php">Create New Account</a><br>
   <a href="change.php">Change Password</a>
 </form>
</body>
</HTML>


