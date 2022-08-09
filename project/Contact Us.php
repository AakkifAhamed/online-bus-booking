<HTML>
<head>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css">
<link rel="stylesheet" type="text/css" href="css/style2.css">
</head>
<body>
<div class="contacts">

<UL>
<LI  ><a href="index.php">Home</a></LI>
<LI><a href="login.php">Login</a></LI>
<LI class="active"><a href="#">Contact Us</a></LI>

</UL>
</div>
 <?php
   if(@$_GET['message']==true)
	
   {
?>
  <div class="alert-dark text-danger text-center py-3">
 
  <?php  echo $_GET['message'] ?></div>
  
   

   
   <?php
  
   }
  ?>

<div class="contact-section">
<div class="contact-info">
<div><i class="fas fa-map-marker-alt"></i>#83, Munai Street, Batticaloa</div>
<div><i class="fas fa-envelope"></i>surenatravels@gmail.com</div>
<div><i class="fas fa-phone"></i>065 222 6152 | 077 107 5670 | 065 222 9152</div>
<div><i class="fas fa-clock"></i>Mon-Sun 7:00 AM to 9:00 PM</div>
</div>
<div class="contact-form">
<form class="contact" action="process.php" method="post">
<input type="text" name="name" class="text-box" placeholder="Your Name" required>
<input type="email" name="email" class="text-box" placeholder="Email" required>
<textarea name="message" rows="5" placeholder="Your Message" required></textarea>
<input type="submit" name="submit" class="send-btn" value="Send">
</form>
</div>
</div>
