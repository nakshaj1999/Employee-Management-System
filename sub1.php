<?php
    session_start();

    if(isset($_Request['Logout'])){
      session_unset();
      session_destroy();
      echo "<script> location.href='login.php';</script>";
    }


    if(!isset($_SESSION["username"])){
      header("location: login.php");
        # code...
      }
    

?>

<html lang="en">
  <head>
    <style type="text/css">
            .navbar{
                        background-color: rgb(0,0,0); /* Fallback color */
          background-color: rgba(10,10,100, 0.6); /* Black w/opacity/see-through */
          color: white;
            }
      .navbar-nav:hover .nav-link{
  
        display: block;
      }
                  .logout:hover{
              cursor: pointer;
              box-shadow: 0 0 10px 0 white;
              box-shadow: 0px 5px 10px 0 white;
              border-radius: 50px;
              text-align: center;    


            }
      .nav-link:hover{
        box-shadow: 0px 5px 10px 0 white;
          border-radius: 50px;
          text-align: center;
      }

      
    </style>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <title>Sub 1</title>
    <meta http-equiv="refresh" content="900;url=logout.php" />
  </head>
  <body background="sign.png">
    
    <nav>
      <nav class="navbar navbar-expand-sm fixed-top navbar-dark ">
        <a href="#" class="navbar-brand" style="color: white;">
          <img src="sail.png" width="40" height="40">
        Steel Authority Of India Ltd.</a>
        <a href="main.php" class="navbar-brand">
          <img src="new.png" width="75" height="40" style="margin-left: 10px;">
        </a>
        
        <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#menu">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="menu">
          <ul class="navbar-nav" style="margin-left: 80px;">
            <li class="nav-item dropdown">
              <a href="#" class="nav-link dropdown" data-toggle="dropdown" style="color: white;margin-left: 50px;">List 1</a>
              <div class="dropdown-menu" style="background-color: rgb(0,0,0); background-color: rgba(10,10,100,0.6); margin-top: 13px;">
                <a href="sub1.php" class="nav-link">Sub 1</a>
                <a href="sub2.php" class="nav-link">Sub 2</a>
                <a href="#" class="nav-link">Sub 3</a>
                <a href="#" class="nav-link">Sub 4</a>
              </div>
            </li>         

            <li class="nav-item dropdown">
              <a href="#" class="nav-link dropdown" data-toggle="dropdown" style="color: white;margin-left: 50px;">List 2</a>
              <div class="dropdown-menu" style="background-color: rgb(0,0,0); background-color: rgba(10,10,100,0.6); margin-top: 13px;">
                <a href="sub1.php" class="nav-link">Sub 1</a>
                <a href="sub2.php" class="nav-link">Sub 2</a>
                <a href="#" class="nav-link">Sub 3</a>
                <a href="#" class="nav-link">Sub 4</a>
              </div>
            </li>
            <li class="nav-item dropdown">
              <a href="#" class="nav-link dropdown" data-toggle="dropdown" style="color: white;margin-left: 50px;">List 3</a>
              <div class="dropdown-menu" style="background-color: rgb(0,0,0); background-color: rgba(10,10,100,0.6); margin-top: 13px;">
                <a href="sub1.php" class="nav-link">Sub 1</a>
                <a href="sub2.php" class="nav-link">Sub 2</a>
                <a href="#" class="nav-link">Sub 3</a>
                <a href="#" class="nav-link">Sub 4</a>
              </div>
            </li>
            <li class="nav-item dropdown">
              <a href="#" class="nav-link dropdown" data-toggle="dropdown" style="color: white;margin-left: 50px;">List 4</a>
              <div class="dropdown-menu" style="background-color: rgb(0,0,0); background-color: rgba(10,10,100,0.6); margin-top: 13px;">
                <a href="sub1.php" class="nav-link">Sub 1</a>
                <a href="sub2.php" class="nav-link">Sub 2</a>
                <a href="#" class="nav-link">Sub 3</a>
                <a href="#" class="nav-link">Sub 4</a>
              </div>
            </li>
            <li class="nav-item dropdown">
              <a href="#" class="nav-link dropdown" data-toggle="dropdown" style="color: white;margin-left: 50px;">List 5</a>
              <div class="dropdown-menu" style="background-color: rgb(0,0,0); background-color: rgba(10,10,100,0.6); margin-top: 13px;">
                <a href="sub1.php" class="nav-link">Sub 1</a>
                <a href="sub2.php" class="nav-link">Sub 2</a>
                <a href="#" class="nav-link">Sub 3</a>
                <a href="#" class="nav-link">Sub 4</a>
              </div>
              
            </li>
            <li class="nav-item dropdown">
              <a href="dependent.php" class="nav-link " style="color: white;margin-left: 50px;">Dependent</a>
              <div class="dropdown-menu " style="background-color: rgb(0,0,0); background-color: rgba(10,10,100,0.6); margin-top: 13px;">
                <a href="dependent.php" class="nav-link"></a>
              </div>
            </li>

          </ul>
        </div>
        <div>
          <ul class="navbar-nav"><li class="nav-item dropdown">
            <a href="#" class="nav-link dropdown" data-toggle="dropdown" style="margin-right: 46px;color: white"><?php echo $_SESSION['username']; ?></a>
            <div class="dropdown-menu "style="background-color: rgb(0,0,0); background-color: rgba(10,10,100,0.6); margin-top: 13px;">
              <a href="profilev.php" class="nav-link">Profile</a>
              <a href="#" class="nav-link">Settings</a>
              <a href="#" class="nav-link">Messages</a>
              <a href="leave.php" class="nav-link">Leave Application</a>
              <a href="dependentv.php" class="nav-link">Dependent View</a>
              <form action="logout.php" method="post"><input type="submit" value="Logout" class="logout" name="logout" style="border-radius: 10px;margin-top: 10px;margin-left: 30px; background-color: white;color: blacks;width: 100px;opacity: 0.9;"></form>

            </div>
            

          </li></ul>
        </div>
    </nav>
    <center>
      <h1 style="margin-top: 400px;">Welcome to SUB 1</h1>
    </center>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
  </body>
</html>