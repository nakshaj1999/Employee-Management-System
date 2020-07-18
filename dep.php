<? php
	

	$conn=mysqli_connect("localhost:3307","root","","userregistration");

	$s="select * from usertable";
	$result=mysqli_query($conn,$s);
		while ($row=mysqli_fetch_array($result)) {

			echo " ".$row["name"]." ".$row["password"]."";
			# code...
		}
	}

?>