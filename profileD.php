<?php
	session_start();


	$con=mysqli_connect('localhost:3307','root','');
	mysqli_select_db($con,'registration');

	$user=$_POST['user'];
	$name=$_POST['name'];
	$dob=$_POST['dob'];
	$degree=$_POST['degree'];
	$desgn=$_POST['desgn'];
	$hdate=$_POST['hdate'];
	$deptno=$_POST['deptno'];

	$s=" select * from profile where user ='$user' ";
	$result=mysqli_query($con,$s);
	$num=mysqli_num_rows($result);

	if($num==1){
		echo "User Aldready Exists";
		header("Location: profile.php");
		
	}
	else{
		$reg="insert into profile(user,name,dob,degree,desgn,hdate,deptno) values ('$user','$name','$dob','$degree','$desgn','$hdate','$deptno')";
		mysqli_query($con,$reg);
		
		header("Location: profile.php");

		//echo "Registration Successful";
	}


?>