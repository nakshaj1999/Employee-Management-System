<?php
	session_start();

  $conn=mysqli_connect("localhost:3307","root","","userregistration");
  
  $result=mysqli_query($conn,$s);

  if(isset($_POST['delete'])){
  	$chk=$_POST['checkbox'];
  	foreach ($chk as $id) {
  		mysqli_query($conn,"delete from emp where empid=".$id);
  		# code...
  	}
  	header("location:del1.php");
  }

?>