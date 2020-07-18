<html lang="en">
  <head>
    <title>Home</title>
    <!-- Required meta tags -->
        <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">

    <style type="text/css">
            .navbar{
                        background-color: rgb(0,0,0); /* Fallback color */
          background-color: rgba(0,0,0, 0.7); /* Black w/opacity/see-through */
          color: white;
            }

              .crossfade{
            
            /* The image used */
            
            background-image: url("main.png");
            /* Add the blur effect */
            filter: blur(0px);
            -webkit-filter: blur(1px);
            
            /* Full height */
            height: 100%; 
            
            /* Center and scale the image nicely */
            background-position: center;
            background-repeat: no-repeat;
            background-size: cover;
            scroll-behavior: none;
            overflow: hidden;
            animation-name: example;
          animation-duration: 8s;
          animation-iteration-count: infinite;
      }
      @keyframes example {
        0%   {background-image: url("main.png");}
        20%  {background-image: url(s1.png);}
        40%  {background-image: url(s2.png);}
        60%  {background-image: url(s3.png);}
        80%  {background-image: url(s4.png);}

      }


      .bg-text {
          background-color: rgb(0,0,0); /* Fallback color */
          background-color: rgba(0,0,0, 0.4); /* Black w/opacity/see-through */
          color: white;
          border: 3px solid;
          position: absolute;
          top: 55%;
          left: 50%;
          transform: translate(-50%, -50%);
          font-size: 100px;
          width: 70%;
          padding: 5px;
          text-align: center;
          box-shadow: 10px 10px 10px 0px black;
      }
            .bg-text1 {
          background-color: rgb(0,0,0); /* Fallback color */
          background-color: rgba(0,0,0, 0.6); /* Black w/opacity/see-through */
          color: white;
          
          position: absolute;   /* TO place the text above the image of the cover size */
          top: 60%;
          left: 50%;
          transform: translate(-50%, -50%);
          font-size: 40px;
          width: 70%;
          padding: 5px;
          text-align: center;
          font-family: MV Boli;
        
      }
      .login{
         
         position: absolute;
         top: 70%;
         left: 47%;
         text-align: center;
         opacity: 1;    
      }
      .login:hover{
        cursor: pointer;
      }


            .nav-link:hover{
        box-shadow: 0px 5px 10px 0 white;
          border-radius: 50px;
          text-align: center;
      }

    </style>


    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    
  </head>
  <body>
     
    <nav>
      <nav class="navbar navbar-expand-md fixed-top navbar-dark">
        <a href="https://sail.co.in/" target="_blank" class="navbar-brand" style="color: white">
          <img src="sail.png" width="40" height="40"> Steel Authority of India Ltd.</a>

        <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#menu">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="menu">

          <ul class="navbar-nav">
            <li class="nav-item dropdown" style="color: white;margin-left: 900px;">
              <a href="#" class="nav-link dropdown navbar-brand" data-toggle="dropdown" style="color: white;">
                <img src="signup.png" width="40" height="40"> REGISTER</a>
              <div class="dropdown-menu" style="background-color: rgb(0,0,0);background-color: rgba(0,0,0, 0.7);text-decoration: none;color: white;">
                <a href="signup.php" class="nav-link" style="color: white;text-decoration: none;">EMPLOYEE</a>

                <a href="signupa.php" class="nav-link" style="color: white;margin-top: 5px;">ADMINISTRATOR</a>
              </div></li>
              
                
            <li class="nav-item dropdown" style="color: white;margin-left: : 100px;">
              <a href="#" class="nav-link dropdown navbar-brand" data-toggle="dropdown" style="color: white;">
                <img src="logini.png" width="40" height="40"> LOGIN</a>
              <div class="dropdown-menu" style="background-color: rgb(0,0,0);background-color: rgba(0,0,0, 0.7);text-decoration: none;color: white;">
                <a href="login.php" class="nav-link" style="color: white;text-decoration: none;">EMPLOYEE</a>

                <a href="logina.php" class="nav-link" style="color: white;margin-top: 5px;">ADMINISTRATOR</a>
              </div>
              </li>
          <ul>
        </div>
    </nav>

    <div class="crossfade"></div>   
      <div class="bg-text">
        <h1 style="font-size:100px;text-decoration: none;">Bhilai Steel Plant</h1>

    </div>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
  </body>
</html>