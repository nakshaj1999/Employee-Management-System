
<?php
	session_start();


	$con=mysqli_connect('localhost:3307','root','','registration');
	

	
	$s="delete from holiday where sysdate()=dto"
	mysqli_query($con,$s);
	header("location: leave.php");



?>
