<?php

	$conn= mysqli_connect("localhost","root","","footballclubdb");
	error_reporting(0);

	if(!$conn) {
		die("connection failed: ".mysqli_connect_error());
	}

	$on=$_GET['on'];
	$nw=$_GET['nw'];
	$ti=$_GET['ti'];
	$cn=$_GET['cn'];
?>

<!DOCTYPE html>
<html>
<head>
	<title>Owner Update</title>
		<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="das.css">
  <script src="asd.js"></script>
  <script src="dasda.js"></script>
	<style >
	body {
  background-image: url('dark.jpg');
  background-repeat: no-repeat;s
  background-attachment: fixed;
  background-size: cover;
  background-opacity: 0.3;
}
input:hover{
  transform: scale(1.2);
  background-color: lightgrey
}
button:hover{
	transform: scale(1.2);
	z-index: 1000;
	background: grey;
}
</style>
</head>
<body>

	<form method="GET">
		<input type="text" name="name" placeholder="Enter name"  value="<?php echo "$on" ?>" required autofocus style="position: fixed;left: 550px;top:150px"><br><br>
		<input type="text" name="networth" placeholder="Enter networth"  value="<?php echo "$nw" ?>" required style="position: fixed;left:550px;top:200px"><br><br>
		<input type="text" name="time_spent" placeholder="Enter time"  value="<?php echo "$ti" ?>" required autofocus style="position: fixed;left: 550px;top:250px"><br><br>
		<input type="text" name="club name" placeholder="Enter club name" value="<?php echo "$cn" ?>" required autofocus style="position: fixed;left: 550px;top:300px"><br><br>
		<input type="submit" class="btn btn-primary" name="submit" style="position: fixed;left:610px;top:350px">
	</form>
	<a href="owner.php">
  <button class="btn btn-primary" style="position: fixed;left: 610px;top: 400px;width: 70px">Back</button>
  </a>
</body>

</body>
</html>

<?php

	if($_GET['submit']) {

		$name=$_GET['name'];
		$networth=$_GET['networth'];
		$time_spent=$_GET['time_spent'];
		$club_name=$_GET['club_name'];

		$result1=mysqli_query($conn,"UPDATE owner SET name='$name',networth='$networth',time_spent='$time_spent' WHERE club_name='$club_name'");

		

		if($result1) {

			echo '<script>alert("Team Successfully Added")</script>';
                          header("location:owner.php");
		          }
		else
            {
            	echo '<script>alert("Team not Added")</script>';
            }
	}

?>