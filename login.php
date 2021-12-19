<!DOCTYPE HTML>
<html>
<head>
	<title>Login</title>
	<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="das.css">
  <script src="asd.js"></script>
  <script src="dasda.js"></script>
	<style>
    button:hover{
  transform: scale(1.2);
  z-index: 1000;
  background: #ff3f81;
  opacity: 1;
}
		.navbar {
      margin-bottom: 0;
      border-radius: 0;
      background-color: rgba(0,0,0,0.3);
    }
    
    /* Set height of the grid so .sidenav can be 100% (adjust as needed) */
    .row.content {height: 450px}
    
    /* Set gray background color and 100% height */
    .sidenav {
      padding-top: 20px;
      background-color: #f1f1f1;
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
	body {
  background-image: url('football3.jpg');
  background-repeat: no-repeat;s
  background-attachment: fixed;
  background-size: cover;
  background-opacity: 0.3;
}
.box{

  width:300px;
  padding: 40px;
  position: absolute;;
  top: 50%;
  left: 50%;
  transform: translate(-50%,-50%);
  background: #191919;
  text-align: center;
}
.box h1{

  color: white;
  text-transform: uppercase;;
  font-weight: 500;
}
.box input[type="text"], .box input[type="password"] {

  border: 0;
  background : none;
  display: block;
  margin: 20px auto;
  text-align:center;
  border: 2px solid #3498db;
  padding: 14px 10px;
  width: 200px;
  outline: none;
  color: white;
  border-radius: 24px;
  transition: 0.25s;
}
.box input[type="text"]:focus, .box input[type="password"]:focus {

  width: 200px;
  border-color: #2ecc71;
}
.box input[type="submit"] {

  border:0;
  background:none;
  display: block;
  margin: 20px auto;
  text-align: center;
  border:2px solid #2ecc71;
  padding: 14px 40px;
  outline: none;
  color:white;
  border-radius: 24px;
  transition: 0.25s;
  cursor: pointer;
}
.box input[type="submit"]:hover {

  background:#2ecc71;
}
input:hover{
  transform: scale(1.2);
  z-index: 1000;
  opacity: 1;
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
        <li><a href="mainpage.php">Home</a></li>
        <li class="active"><a href="login.php">Employee</a></li>
      </ul>
      <ul class="nav navbar-nav navbar-right">
      </ul>
    </div>
  </div>
</nav>
    
  <form method="post" action="process.php" class="box">
	 <h1>Login</h1>
		<input type="text" name="username" pattern="^[A-Za-z0-9]*$" oninvalid="this.setCustomValidity('Enter the valid username')" oninput="this.setCustomValidity('')" autocomplete="off" placeholder="Enter Username" required autofocus>
		<input type="password" name="password" placeholder="Enter password" required>
		<input type="submit" value="login" >
	</form>
  <a href="mainpage.php">
    <button style="position: fixed;left:550px;top: 500px" autocomplete="off" class="btn btn-lg btn-primary">Back to Mainpage</button>

</body>
</html>