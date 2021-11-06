<?php
	session_start();


	$con=mysqli_connect('localhost:3000','root','');
	mysqli_select_db($con,'registration');

	$name=$_POST['user'];
	$pass=$_POST['password'];
	$pass1=base64_encode($pass);

	$s=" select * from usertablea where user ='$name' ";

	if($num==1){
		echo "Name Aldready taken";
		header("Location: signupa.php");
		
	}
	else{
		$reg="insert into usertablea (user,password) values ('$name','$pass1')";
		mysqli_query($con,$reg);
		header("Location: logina.php");

		//echo "Registration Successful";
	}


?>