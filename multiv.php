<?php
	session_start();


	$con=mysqli_connect('localhost:3307','root','');
	mysqli_select_db($con,'userregistration');

	$empid=$_POST['empid'];
	$name=$_POST['name'];
	$dob=$_POST['dob'];
	$salary=$_POST['slalry'];
	$deptno=$_POST['deptno'];
	

	$s=" select * from usertable where name ='$name' && password ='$pass' ";
	$result=mysqli_query($con,$s);
	$num=mysqli_num_rows($result);

	if($num==1){

		$_SESSION['username']=$name;
		header("Location: sub1.php");
		header("Location: sub2.php");
		header("Location: sub3.php");
		header("Location: sub4.php");
		header("Location: sub5.php");

		header("Location: main.php");

		
	}
	 else{
	 	header("Location:login.php");
	    echo "<script>alert('Invalid login details');</script>"; // this is not working
	     
	}
	   




?>