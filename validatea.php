<?php
	session_start();


	$con=mysqli_connect('localhost:3307','root','');
	mysqli_select_db($con,'registration');

	$user=$_POST['user'];
	$pass=$_POST['password'];

	$s=" select * from usertablea where user ='$user' && password ='$pass' ";
	$result=mysqli_query($con,$s);
	$num=mysqli_num_rows($result);

	if($num==1){

		$_SESSION['user']=$user;
		header("Location: sub1.php");
		header("Location: sub2.php");
		header("Location: sub3.php");
		header("Location: sub4.php");
		header("Location: sub5.php");

		header("Location: maina.php");

		
	}
	 else{
	 	
	    echo "invalid credentials";
	     
	}
	   




?>