<?php
    session_start();

    if(isset($_POST['lno'])){

    $conn=mysqli_connect("localhost:3307","root","","registration");



    if(isset($_REQUEST['submit'])){
      $sql="update holiday SET status='Approved' where lno={$_REQUEST['lno']}";
      if(mysqli_query($conn, $sql)){
        header("location: leaveapp.php");
      }
    }
  }

    
    if(!isset($_SESSION["user"])){
      header("location: logina.php");
        # code...
      }
    

 

?>


<html lang="en">
  <head>

    <script type="text/javascript">
      window.history.forward();
    </script>

    <title>LEAVE APPROVAL</title>

  	
  	<style type="text/css">
	body,html {
		/* to make an image of coversize, we need to make the body and html also 100%*/
				  height: 100%;
				}
            .navbar{
                        background-color: rgb(0,0,0); /* Fallback color */
          background-color: rgba(10,10,100, 0.6); /* Black w/opacity/see-through */
          color: white;
            }
                                    .logout:hover{
              cursor: pointer;
              box-shadow: 0 0 10px 0 white;
              box-shadow: 0px 5px 10px 0 white;
              border-radius: 50px;
              text-align: center;    


            }

            .logine{
        opacity: 0.8;
        background-color: white;
        margin-left: 4px;
        border: 110px;
        position: absolute;
        border-color: black;
        top: 140px;
        left: 2px;
        color: black;
        border-radius: 4px;
        font-size: 22px;
        padding: 30px;
        box-shadow: 10px 10px 10px 5px black;


      }


		.crossfade{
			background-image: url("sign.png");
          
          /* Add the blur effect */
          filter: blur(0px);
          -webkit-filter: blur(0px);
          
          /* Full height */
          height: 100%; 
          
          /* Center and scale the image nicely */
          background-position: center;
          background-repeat: no-repeat;
          background-size: cover;
          scroll-behavior: none;
          
          overflow: hidden;
      }
  		.navbar-nav:hover .nav-link{
  
  			display: block;
  		}
  		.nav-link:hover{
  			box-shadow: 0px 5px 10px 0 white;
        	border-radius: 50px;
        	text-align: center;
  		}
      .login{
        opacity: 0.8;
        background-color: white;
        margin-left: 4px;
        border: 110px;
        position: absolute;
        border-color: black;
        top: 95px;
        left: 250px;
        color: black;
        border-radius: 4px;
        font-size: 25px; 
        padding: 30px;
        box-shadow: 10px 10px 10px 8px black;


      }
      .logins{
        opacity: 0.9;
        background-color: white;
        margin-left: 4px;
        border: 110px;
        position: absolute;
        border-color: black;
        top: 105px;
        left: 1200px;
        color: black;
        border-radius: 4px;
        font-size: 15px; 
        padding: 30px;
        box-shadow: 10px 10px 10px 8px black;


      }
      .sub:hover{
        background-color: white; /* Green */
          color: black;
          box-shadow: 2px 2px 100px 10px; black;
      }
  		.noti {
          background-color: rgb(0,0,0); /* Fallback color */
          background-color: rgba(0,0,0, 0.6); /* Black w/opacity/see-through */
          color: white;
          
          position: absolute;   /* TO place the text above the image of the cover size */
          top: 55%;
          left: 15%;
          transform: translate(-50%, -50%);
          font-size: 20px;
          width: 25%;
          height: 550px;
          padding: 5px;
          text-align: center;
          font-family: MV Boli;
          font-size: 18px;
      }

      .bg-text{
          background-color: rgb(0,0,0); /* Fallback color */
          background-color: rgba(0,0,0, 0.6); /* Black w/opacity/see-through */
          color: white;
          
          position: absolute;   /* TO place the text above the image of the cover size */
          top: 50%;
          left: 210%;
          transform: translate(-50%, -50%);
          font-size: 40px;
          width: 200%;

          padding: 5px;
          text-align: center;
          font-family: MV Boli;

      }
      .lis:hover {
        color: lightblue;
      }

  		
  	</style>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="refresh" content="900;url=logouta.php" />

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    
  </head>
  <body>
    <div class="crossfade"></div>   
    <nav>
    	<nav class="navbar navbar-expand-sm fixed-top navbar-dark ">        <!-- BAR COLOR SCHEME AND STARTING -->
    		<a href="https://sail.co.in/" target="_blank" class="navbar-brand" style="color: white;">
    			<img src="sail.png" width="40" height="40">
    		Steel Authority Of India Ltd.</a>
    		<a href="maina.php" class="navbar-brand">
    			<img src="new.png" width="75" height="40" style="margin-left: 10px;">
    		</a>


    		<!-- COLLAPSE ICON AND ALL -->
    		
    		<button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#menu">
    			<span class="navbar-toggler-icon"></span>
    		</button>
    		<div class="collapse navbar-collapse" id="menu">
	    		<ul class="navbar-nav" style="margin-left: 80px;">   <!-- THE ITEMS ON THE BAR -->
	    			<li class="nav-item dropdown disable">
	    				<a href="#" class="nav-link dropdown" data-toggle="dropdown" style="color: white;margin-left: 50px;">List 1</a>
    					<div class="dropdown-menu " style="background-color: rgb(0,0,0); background-color: rgba(10,10,100,0.6); margin-top: 13px;">
	    					<a href="sub1a.php" class="nav-link">Sub 1</a>
	    					<a href="sub2a.php" class="nav-link">Sub 2</a>
	    					<a href="#" class="nav-link">Sub 3</a>
	    					<a href="#" class="nav-link">Sub 4</a>

    					</div>
    				</li>    			

	    			<li class="nav-item dropdown">      <!-- FOR THE DROPDOWN -->
	    				<a href="#" class="nav-link dropdown" data-toggle="dropdown" style="color: white;margin-left: 50px;">List 2</a>
	    				<div class="dropdown-menu " style="background-color: rgb(0,0,0); background-color: rgba(10,10,100,0.6); margin-top: 13px;">
	    					<a href="sub1a.php" class="nav-link">Sub 1</a>
	    					<a href="sub2a.php" class="nav-link">Sub 2</a>
	    					<a href="#" class="nav-link">Sub 3</a>
	    					<a href="#" class="nav-link">Sub 4</a>
	    				</div>
	    			</li>
	    			<li class="nav-item dropdown">
	    				<a href="#" class="nav-link dropdown" data-toggle="dropdown" style="color: white;margin-left: 50px;">List 3</a>
    					<div class="dropdown-menu " style="background-color: rgb(0,0,0); background-color: rgba(10,10,100,0.6); margin-top: 13px;">
	    					<a href="sub1a.php" class="nav-link">Sub 1</a>
	    					<a href="sub2a.php" class="nav-link">Sub 2</a>
	    					<a href="#" class="nav-link">Sub 3</a>
	    					<a href="#" class="nav-link">Sub 4</a>
    					</div>
	    			</li>
	    			<li class="nav-item dropdown">
	    				<a href="#" class="nav-link dropdown" data-toggle="dropdown" style="color: white;margin-left: 50px;">List 4</a>
	    				<div class="dropdown-menu " style="background-color: rgb(0,0,0); background-color: rgba(10,10,100,0.6); margin-top: 13px;">
	    					<a href="sub1a.php" class="nav-link">Sub 1</a>
	    					<a href="sub2a.php" class="nav-link">Sub 2</a>
	    					<a href="#" class="nav-link">Sub 3</a>
	    					<a href="#" class="nav-link">Sub 4</a>
	    				</div>
	    			</li>
	    			<li class="nav-item dropdown ">
	    				<a href="#" class="nav-link dropdown" data-toggle="dropdown" style="color: white;margin-left: 50px;">List 5</a>
	    				<div class="dropdown-menu " style="background-color: rgb(0,0,0); background-color: rgba(10,10,100,0.6); margin-top: 13px;">
	    					<a href="sub1a.php" class="nav-link">Sub 1</a>
	    					<a href="sub2a.php" class="nav-link">Sub 2</a>
	    					<a href="#" class="nav-link">Sub 3</a>
	    					<a href="#" class="nav-link">Sub 4</a>
	    				</div>
	    			</li>
            
            <li class="nav-item dropdown">
              <a href="emp.php" class="nav-link " style="color: white;margin-left: 50px;">Employee</a>
              <div class="dropdown-menu " style="background-color: rgb(0,0,0); background-color: rgba(10,10,100,0.6); margin-top: 13px;">
                <a href="dependent.php" class="nav-link"></a>
              </div>
            </li>


          
	    			
	    		</ul>
    		</div>
    		<div>
    			<ul class="navbar-nav"><li class="nav-item dropdown">
    				<a href=" " class="nav-link dropdown" data-toggle="dropdown" style="margin-right: 46px;color: white"><?php echo $_SESSION['user']; ?> (ADMIN)</a>
    				<div class="dropdown-menu" style="background-color: rgb(0,0,0); background-color: rgba(10,10,100,0.6); margin-top: 13px;">
    					<a href="#" class="nav-link">Profile</a>
    					<a href="#" class="nav-link">Settings</a>
    					<a href="#" class="nav-link">Messages</a>
              <a href="empser.php" class="nav-link">Emp DB View</a>

    					<form action="logouta.php" method="post"><input type="submit" value="Logout" class="logout" name="logout" style="border-radius: 10px;margin-top: 10px;margin-left: 30px; background-color: white;color: blacks;width: 100px;opacity: 0.9;"></form>
    				</div>
    				

    			</li></ul>
    		</div>
    </nav>

    </table>
          <table cellpadding="8" class="logine" border="10" >
            <tr>
              <th colspan="9" align="center" style="text-align: center;">LEAVE APPROVALS</th>
            </tr>
            <tr>
              <th>EMAIL</th>
              <th>NAME</th>
              <th>LTYPE</th>
              <th>DFROM</th>
              <th>TFROM</th>
              <th>DTO</th>
              <th>TTO</th>
              <th>REASON</th>
              <th>ACTION</th>
            </tr>

             <?php

                  $conn=mysqli_connect("localhost:3307","root","","registration");                  

                  $sql="select * from holiday where status='Applied [Pending]'";
                  $result=mysqli_query($conn,$sql);
                  $num=mysqli_num_rows($result);
                  
                  if($sql){


                  
                    while ($row=$result-> fetch_assoc()) {
                      if($sql){
                        echo "<tr><td>".$row['email']."</td><td>".$row['name']."</td><td>".$row['ltype']."</td><td>".$row['dfrom']."</td><td>".$row['tfrom']."</td><td>".$row['dto']."</td><td>".$row['tto']."</td><td>".$row['reason']."</td><td><form action='' method='post'><input type='hidden' name='lno' value=" .$row['lno'] ."><input type='submit' class='btn btn-sm btn-primary' name='submit' value='Approve' style='color: white;'></form></td></tr>";

                      }
                      else{
                        echo "NO APPLIED LEAVES";
                      }

                    }
                  }
                
                  
             ?>
        
    </table>
    
    

   



	

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
  </body>
</html>