<!DOCTYPE html>
<html lang="en">
<head>
  <title>Homepage</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="das.css">
  <script src="asd.js"></script>
  <script src="dasda.js"></script>
  <style>
    button:hover{
  transform: scale(1.2);
  z-index: 1000;
  background: #transparent;
  opacity: 1;
}

       .navbar {
      margin-bottom: 0;
      border-radius: 0;
      background-color: rgba(0,0,0,0);
    }
    
    /* Set height of the grid so .sidenav can be 100% (adjust as needed) */
    .row.content {height: 450px}
    
    /* Set gray background color and 100% height */
    .sidenav {
      padding-top: 20px;
      background-color: rgba(0,0,0,0.3);
      height: 100%;
    }
    
    /* Set black background color, white text and some padding */
    footer {
      background-color: #555;
      color: white;
      padding: 15px;
    }
    
    /* On small screens, set height to 'auto' for sidenav and grid */
    @media screen and (max-width: 767px) {
      .sidenav {
        height: auto;
        padding: 15px;
      }
      .row.content {height:auto;} 
    }
  </style>
  <style>
body {
  background-image: url('hamburg.jpg');
  background-repeat: no-repeat;
  background-attachment: fixed;
  background-size: cover;
  background-opacity: 0.8;
}
h1{
  color: white;
}
</style>
</head>
<body>
<nav class="navbar">
  <div class="container-fluid">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>                        
      </button>
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav">
        <li class="active"><a href="mainpage.php">Home</a></li>
        <li><a href="login.php">Employee</a></li>
      </ul>
      <ul class="nav navbar-nav navbar-right">
      </ul>
    </div>
  </div>
</nav>
  
<div class="container-fluid text-center" style="background: rgba(0,0,0,0.5);border: 1px lightgray;border-radius: 10px;">    
    <div class="row-md-8 text-left"> 
     <center><h1 style="font-family: lucida bright;font-size: 50px;color:coral">MyClub</h1></center>
      <br>
     <p style="color: chocolate;font-size: 30px;font-family: garamond">Hello and welcome to the MyClub,here we provide you   with up-to-date info about the club regarding the manager,players,transfers etc.So that you dont miss out on anything about your football club.
     </p>
     <br>
     <br>
     <p style="color: crimson;font-size: 20px;font-family: italics;"><i>&#9888;</i>NOTE : If you are an employee please click on the "login" button and sign in ,if you are a visitor then please click on the "visitor" button.</p>
    
  </div>
</div>

<div class="container" style="position:fixed;left:500px;top:520px"> 
  <a href="login.php">
    <button type="button" style="width: 100px;height: 60px">login</button>
    </a> 
 </div>

  <div class="container" style="position: fixed;left: 650px;top:520px">
      <button class="button button1" onclick="document.location='selectionv.php'" type="button" style="width: 100px;height: 60px">visitor</button> 
    </a>
  </div> 

</body>
</html>