<?php
	session_start();


	$con=mysqli_connect('localhost:3000','root','');
	mysqli_select_db($con,'registration');

	$name=$_POST['user'];
	$fname=$_POST['fname'];
	$fooc=$_POST['fooc'];
	$mname=$_POST['mname'];
	$mooc=$_POST['mooc'];


	$s=" select * from dependent where user ='$name' ";
	$result=mysqli_query($con,$s);
	$num=mysqli_num_rows($result);

	if($num==1){
		echo "Name Aldready taken";
		header("Location: dependentr.php");
		
	}
	else{
		$reg="insert into dependent(user,fname,fooc,mname,mooc) values ('$name','$fname','$fooc','$mname','$mooc')";
		mysqli_query($con,$reg);
		header("Location: main.php");

		//echo "Registration Successful";
	}


?>