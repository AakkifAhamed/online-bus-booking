<?php

$sname="localhost";
$uname="root";
$password="";
$db_name="register";

$conn=new mysqli($sname,$uname,$password,$db_name);

	if(mysqli_connect_error())
	{
	  die('Connect Error(' . mysqli_connect_error().')'. mysqli_connect_error());	
	}