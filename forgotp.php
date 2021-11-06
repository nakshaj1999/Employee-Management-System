<?php
	session_start();


	$con=mysqli_connect('localhost:3000','root','');
	mysqli_select_db($con,'registration');

	$name=$_POST['user'];
	$pass=$_POST['password'];

	
	$s=" update usertable set password='$pass' where name='$name' ";
	$result=mysqli_query($con,$s);
	$num=mysqli_num_rows($result);
	

	if($s){

		
		header("Location: login.php");


		
	}
	 else{
	 	
	    echo "<script>alert('Invalid login details');</script>"; // this is not working
	    header("Location:forgot.php");
	     
	}
	   




?>