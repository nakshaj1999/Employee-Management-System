<?php
	session_start();


	$con=mysqli_connect('localhost:3000','root','');
	mysqli_select_db($con,'userregistration');

	$name=$_POST['user'];
	$pass=$_POST['password'];

	
	$s=" update usertablea set password='$pass' where user='$name' ";
	$result=mysqli_query($con,$s);
	$num=mysqli_num_rows($result);
	

	if($s){

		
		header("Location: logina.php");


		
	}
	 else{
	 	
	    echo "<script>alert('Invalid login details');</script>"; // this is not working
	    header("Location:forgota.php");
	     
	}
	   




?>