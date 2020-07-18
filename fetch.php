<?php
//fetch.php
  session_start();
$connect = mysqli_connect("localhost:3307", "root", "", "registration");
$output = '';
$s=" select * from emp where name='$name'";
if(isset($_POST["query"]))
{
 $search = mysqli_real_escape_string($connect, $_POST["query"]);
 $query = "
  SELECT * FROM emp 
  WHERE empid LIKE '%".$search."%'
  OR name LIKE '%".$search."%' 
  OR dob LIKE '%".$search."%' 
  OR salary LIKE '%".$search."%' 
  OR hdate LIKE '%".$search."%' 
  OR deptno LIKE '%".$search."%'
 ";
}
else
{
 $query = "
  SELECT * FROM emp ORDER BY empid
 ";
}
$result = mysqli_query($connect, $query);

if(mysqli_num_rows($result) > 0)
{
 $output .= '
    <script type="css/"
  <div class="table-responsive">
   <table class="table table bordered" class="login">
    <tr>
     <th>EMPID</th>
     <th>NAME</th>
     <th>DOB</th>
     <th>SALARY</th>
     <th>HIRE DATE</th>
     <th>DEPTNO</th>
    </tr>
 ';
 while($row = mysqli_fetch_array($result))
 {
  $output .= '
   <tr>
    <td>'.$row["empid"].'</td>
    <td>'.$row["name"].'</td>
    <td>'.$row["dob"].'</td>
    <td>'.$row["salary"].'</td>
    <td>'.$row["hdate"].'</td>
    <td>'.$row["deptno"].'</td>
   </tr>
  ';
 }
 echo $output;
}
else
{
 echo 'Data Not Found';
}

?>