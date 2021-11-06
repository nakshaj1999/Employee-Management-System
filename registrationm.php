<?php
	session_start();


	$con=mysqli_connect('localhost:3000','root','');
	mysqli_select_db($con,'registration');

	$name=$_POST['user'];
	$empid=$_POST['empid'];
	$pass=$_POST['password'];
	$pass1=base64_encode($pass);

	$s=" select * from usertablem where user ='$name' ";
	$s1="select email from emp where email='$name'";
	$result=mysqli_query($con,$s);
	$num=mysqli_num_rows($result);
	$result1=mysqli_query($con,$s1);
	$num1=mysqli_num_rows($result1);
	if($num==1){
		echo "Name Aldready taken";
		header("Location: signup.php");
		
	}
	else{
			if($num1==0){
				header("Location: signup.php");
			}
			else{
				$reg="insert into usertablem(name,empid,password) values ('$name','$empid','$pass1')";
				mysqli_query($con,$reg);
				header("Location: login.php");
				
			}
		
		

		//echo "Registration Successful";
	}


?>