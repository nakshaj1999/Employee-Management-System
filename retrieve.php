<?php

	session_start();
	
	if(isset($_POST['search'])){

	}
	else{
		$query='select * from dependent';
		$search_result=filterTable($query);


	}

	function filterTable($query){
		$conn=mysqli_connect("localhost:3301","root","","userregistration");
		$filter_Result=mysqli_query($conn,$query);
		return $filter_Result;
	}
	

?>





<!DOCTYPE html>
<html>
<head>
	<title>RETRIEVE</title>
</head>
<body>

	<form>
		<input type="text" name="valueToSearch" placeholder="Value to Search"><br><br>
		<input type="text" name="search" value="Filter"><br><br>
		<table>
			<tr>
				<th>USER</th>
				<th>Father's Name</th>
				<th>Father's Occupation</th>
				<th>Mother's Name</th>
				<th>Mother's Occupation</th>
			</tr>

			<?php while ($row = mysqli_fetch_array($search_result)): ?>
			<tr>
				<td><?php echo $row['user'];?></td>				
				<td><?php echo $row['fname'];?></td>				
				<td><?php echo $row['fooc'];?></td>				
				<td><?php echo $row['mname'];?></td>				
				<td><?php echo $row['mooc'];?></td>				
			
			</tr>
			<?php endwhile;?>
		</table>
	</form>

</body>
</html>