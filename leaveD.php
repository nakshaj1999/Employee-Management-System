
<?php
	session_start();


	$con=mysqli_connect('localhost:3307','root','','registration');
	

	$email=$_POST['email'];
	$name=$_POST['name'];
	$ltype=$_POST['ltype'];
	$dfrom=$_POST['dfrom'];
	$tfrom=$_POST['tfrom'];
	$dto=$_POST['dto'];
	$tto=$_POST['tto'];
	$reason=$_POST['reason'];
	$reg="insert into holiday(email,name,ltype,dfrom,tfrom,dto,tto,reason,status) values ('$email','$name','$ltype','$dfrom','$tfrom','$dto','$tto','$reason','Applied [Pending]')";
	mysqli_query($con,$reg);
	header("location: leave.php");




?>
