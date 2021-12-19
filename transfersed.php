<?php

	$conn= mysqli_connect("localhost","root","","footballclubdb");
	error_reporting(0);

	if(!$conn) {
		die("connection failed: ".mysqli_connect_error());
	}

	$pi=$_GET['pi'];
	$po=$_GET['po'];
	$pn=$_GET['pn'];
	$pt=$_GET['pt'];
	$tb=$_GET['tb'];
	$cn=$_GET['cn'];
?>

<!DOCTYPE html>
<html>
<head>
	<title>Transfer Update</title>
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
		<input type="text" name="player_in" placeholder="Enter player in"  value="<?php echo "$pi" ?>" style="position: fixed;left: 550px;top:150px"><br><br>
		<input type="text" name="player_out" placeholder="Enter player out"  value="<?php echo "$po" ?>" style="position: fixed;left:550px;top:200px"><br><br>
		<input type="text" name="player_in_cost" placeholder="Enter cost of player in"  value="<?php echo "$pn" ?>" autofocus style="position: fixed;left: 550px;top:250px"><br><br>
		<input type="text" name="player_out_cost" placeholder="Enter cost of player out"  value="<?php echo "$pt" ?>" autofocus style="position: fixed;left: 550px;top:300px"><br><br>
    <input type="text" name="transfer_budget" placeholder="Enter transfer budget"  value="<?php echo "$tb" ?>" autofocus style="position: fixed;left: 550px;top:350px"><br><br>
    <input type="text" name="club_name" placeholder="Enter club name" value="<?php echo "$cn" ?>" autofocus style="position: fixed;left: 550px;top:400px"><br><br>
		<input type="submit" class="btn btn-primary" name="submit" style="position: fixed;left:610px;top:450px">
  
	</form>
	<a href="transfers.php">
  <button class="btn btn-primary" style="position: fixed;left: 610px;top: 500px;width: 70px">Back</button>
  </a>

</body>
</html>

<?php

	if($_GET['submit']) {

		$player_in=$_GET['player_in'];
		$player_out=$_GET['player_out'];
		$player_in_cost=$_GET['player_in_cost'];
		$player_out_cost=$_GET['player_out_cost'];
		$transfer_budget=$_GET['transfer_budget'];
		$club_name=$_GET['club_name'];

		$result1=mysqli_query($conn,"UPDATE transfer SET player_in='$player_in',player_out='$player_out',player_in_cost='$player_in_cost',player_out_cost='$player_out_cost',transfer_budget='$transfer_budget' WHERE club_name='$club_name'");

		

		if($result1) {

			echo '<script>alert("Team Successfully Added")</script>';
                          header("location:transfers.php");
		          }
		else
            {
            	echo '<script>alert("Team not Added")</script>';
            }
	}

?>