<?php
	session_start();


	$con=mysqli_connect('localhost:3307','root','');
	mysqli_select_db($con,'registration');

	$name=$_POST['user'];
	$pass=$_POST['password'];

	$s=" select * from usertablea where user ='$name' ";
	$result=mysqli_query($con,$s);
	$num=mysqli_num_rows($result);

	if($num==1){
		echo "Name Aldready taken";
		header("Location: signupa.php");
		
	}
	else{
		$reg="insert into usertablea(user,password) values ('$name','$pass')";
		mysqli_query($con,$reg);
		header("Location: logina.php");

		//echo "Registration Successful";
	}


?>