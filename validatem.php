<?php
	session_start();


	$con=mysqli_connect('localhost:3000','root','');
	mysqli_select_db($con,'registration');

	$name=$_POST['user'];
	$pass=$_POST['password'];
	$pass1=base64_encode($pass);

	$s=" select * from usertablem where name ='$name' && password ='$pass1' ";
	$result=mysqli_query($con,$s);
	$num=mysqli_num_rows($result);

	if($num==1){

		$_SESSION['user']=$name;
		header("Location: sub1.php");
		header("Location: sub2.php");
		header("Location: sub3.php");
		header("Location: sub4.php");
		header("Location: sub5.php");

		header("Location: mainm.php");

		
	}
	 else{
	 	
	    echo "invalid credentials";
	     
	}
	   




?>