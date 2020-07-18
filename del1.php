<?php

  $conn=mysqli_connect("localhost:3307","root","","userregistration");
  $s="select * from emp";
  $result=mysqli_query($conn,$s);
?>

<!DOCTYPE html>
<html>
<head>
  <title>Delete</title>
</head>
<body>

  <form method="post" action="del1p.php">
    <table>
            <tr>
              <th>EMPID</th>
              <th>NAME</th>
              <th>DOB</th>
              <th>SALARY</th>
              <th>DEPTNO</th>
              <th>ACTION</th>
            </tr>
            
              <?php

                while($row=$result->fetch_assoc()){
                  echo "<tr>";
                  echo "<td>".$row['empid']."</td>";
                  echo "<td>".$row['name']."</td>";
                  echo "<td>".$row['dob']."</td>";
                  echo "<td>".$row['salary']."</td>";
                  echo "<td>".$row['deptno']."</td>";
                  echo "<td><input type='checkbox' name='checkbox[] value='".$row['empid']."'</td>";

                  echo "</tr>";
                }

              ?>
    </table>
    <input type="submit" name="delete" id="delete" value="DELETE">
  </form>


</body>
</html>