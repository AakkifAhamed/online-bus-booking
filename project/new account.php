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
<h1>Registration Form</h1>
<div class="register">
<h2>Register here</h2>
<form method="post" id="register" action="insert.php">

<label>User Name</label><br>
<input type="text" name="username" id="name" placeholder="Full Name" required><br><br>
<label>Password</label><br>
<input type="password" name="password" id="name" placeholder="Create your Password" required><br><br>
<label>NIC Number</label><br>
<input type="text" name="idnum" id="num" placeholder="Enter your NIC Number" required><br><br>
<label>Mobile Number</label><br>
<input type="number" name="MNum" id="num" placeholder="Enter your Mobile Number" required><br><br>
<label>Email</label><br>
<input type="email" name="email" id="name" placeholder="Enter your Email" required><br><br>



<input type="submit" value="Register" id="submit">
</form>
</div>


</body>
</HTML>