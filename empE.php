
<?php
	session_start();


	$con=mysqli_connect('localhost:3000','root','','registration');
	
	$email=$_POST['email'];
	$name=$_POST['name'];
	$dob=$_POST['dob'];
	$hdate=$_POST['hdate'];
	$salary=$_POST['salary'];
	$mgr=$_POST['mgr'];
	$deptno=$_POST['deptno'];

	$s=" select * from emp where name='$name'";
	$result=mysqli_query($con,$s);
	$num=mysqli_num_rows($result);



	if($num==1){
		echo "Name Aldready taken";
		header("location: emp.php");

		
	}
	else{
		$reg="insert into emp(email,name,dob,hdate,salary,mgr,deptno) values ('$email','$name','$dob','$hdate','$salary','$mgr','$deptno')";
		mysqli_query($con,$reg);
		header("location: emp.php");

		//echo "Registration Successful";
	}


?>
