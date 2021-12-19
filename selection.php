<!DOCTYPE html>
<html>
<head>
	<title>Selection</title>
	<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="das.css">
  <script src="asd.js"></script>
  <script src="dasda.js"></script>
<style>
	body {
  background-image: url('background.jpg');
  background-repeat: no-repeat;
  background-attachment: fixed;
  background-size: cover;
  background-opacity: 0.3;
}

button:hover{
	transform: scale(1.2);
	z-index: 1000;
	background: #ff3f81;
	opacity: 1;
}
</style>
</head>
<body>
	<center><div style="background: rgba(0,0,0,0.3);width: 440px;height:120px;border-radius: 60px;">
		<h1 style="color: white;">Choose a Table To View and Edit From The Options Below</h1>
	</div></center>

<div>
	<a href="owner.php">
		<button style="position: fixed;left: 550px;top:150px;width: 200px;background-color: rgba(213,55,56,0.5);" class="btn btn-lg btn-primary">Owner</button>
	</a>
	<a href="ceo.php">
		<button style="position: fixed;left: 550px;top: 200px;width: 200px;background-color: rgba(213,55,56,0.5);" class="btn btn-lg btn-primary">CEO</button>
	</a>
	<a href="headcoach.php">
		<button style="position: fixed;left: 550px;top:250px;width: 200px;background-color: rgba(213,55,56,0.5);" class="btn btn-lg btn-primary">Head Coach</button>
	</a>
	<a href="finance.php">
		<button style="position: fixed;left: 550px;top: 300px;width: 200px;background-color: rgba(213,55,56,0.5);" class="btn btn-lg btn-primary">Finance</button>
	</a>
	<a href="transfers.php">
		<button style="position: fixed;left:550px;top: 350px;width: 200px;background-color: rgba(213,55,56,0.5);" class="btn btn-lg btn-primary">Transfers</button>
	</a>
	<a href="manager.php">
		<button style="position: fixed;left:550px;top: 400px;width: 200px;background-color: rgba(213,55,56,0.5);" class="btn btn-lg btn-primary">Manager Trophies</button>
	</a>
	<a href="mainpage.php">
		<button style="position: fixed;left:550px;top: 500px;width: 200px;" class="btn btn-lg btn-primary">Back to Mainpage</button>
	</a>
</div>
</body>
</html>