<html>
<head>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
<style>
body{
	margin:0px;
	background:#1E242A;
}
.menu-bar{
	
	text-align:center;
	height:8vh;
	
}

.menu-bar ul{
	display:inline-flex;
	list-style:none;
	color:#000;
}

.menu-bar ul li{
	width:120px;
	margin:15px;
	padding:15px;
	margin-top:2px;
}



.menu-bar ul li a{
	text-decoration:none;
	color:#fff;
}


.menu-bar ul li:hover{
	background:#7FFFD4;
	border-radius:3px;

}
.sub-menu-1{
	display:none;
	
}

.menu-bar ul li:hover .sub-menu-1{
	display:block;
	position:absolute;
	background:#FF1493;
	
	margin-top:12px;
	margin-left:-15px;
	opacity:0.8;
}

.menu-bar ul li:hover .sub-menu-1 ul{
	display:block;
	margin:10px;
	
}
.menu-bar ul li:hover .sub-menu-1 ul li{
	
	width:150px;
	paddding:-1px;
	border-bottom:1px dotted #fff;
	border-radius:0;
	text-align:left;
}
.menu-bar ul li:hover .sub-menu-1 ul li:last-child{
	border-bottom:none;
}
.menu-bar ul li:hover .sub-menu-1 ul li a:hover{
	color:#000;
}


.hover-me:hover .sub-menu-2{
	position:absolute;
	display:block;
	margin-top:-40px;
	margin-left:160px;
	background:#FF1493;
}
#main{
	width:100%;
	height:100%;
	position:absolute;
	overflow:hidden;
}
#box1{
	width:530px;
	height:625px;
	background-image:url('1.png');
	position:absolute;
	bottom:-100%;
	left:30%;
	animation:anim 2s forwards, anim2 3s forwards 3s;
}
#box1:after{
	content:'';
	position:absolute;
	width:530px;
	height:625px;
	background-image:url('2.png');
	left:0px;
	z-index:-1;
}
@keyframes anim{
	from{
		bottom:-100%;
	}
	to{
		bottom:0%;
	}
}
@keyframes anim2{
	from{
		left:30%;
		width:530px;
	}
	to{
		width:0px;
		left:50%;
	}
}
#box2{
	width:auto;
	height:auto;
	font-family:'Behnschrift Condensed';
	color:white;
	font-size:5em;
	font-weight:600;
	line-height:130px;
	position:absolute;
	top:250px;
	left:100px;
	overflow:hidden;
}
#text{
	position:relative;
	left:-100%;
	animation:anim3 2s forwards 3s;
}
@keyframes anim3{
	from{
		left:-100%;
	}
	to{
		left:0%;
	}
}

</style>

</head>
<body>
<div id="main">
   <div id="box1"></div>
   
   <div id="box2">
    <div id="text">
	Register & <BR>Get DisCounts<br>on Bookings
	</div>
	</div>
	<div class="menu-bar">
<ul>
<Li><a href="index.php"></i>Home</a></Li>
<Li><a href="#">Ticket Booking</a>
<div class="sub-menu-1">
<ul>


<li><a href="#">AC</a></Li>
<li><a href="#">Non-AC</a></li>

</Li>

</ul>
</div>
</Li>
<Li><a href="new account.php">Rental</a></Li>
<li><a href="Contact Us.php">Contact Us</a></Li>
</ul>
</div>
	</div>
    
</body>
</html>