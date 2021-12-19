<?php

	$conn= mysqli_connect("localhost","root","","footballclubdb");
	error_reporting(0);

	if(!$conn) {
		die("connection failed: ".mysqli_connect_error());
	}

	$cn=$_GET['cn'];
	$mn=$_GET['mn'];
	$dj=$_GET['dj'];
	$am=$_GET['am'];
	$tw=$_GET['tw'];
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
		<input type="text" name="club_name" placeholder="Enter club name" value="<?php echo "$cn" ?>"  style="position: fixed;left: 550px;top:150px"><br><br>
		<input type="text" name="manager_name" placeholder="Enter manager name"  value="<?php echo "$mn" ?>" style="position: fixed;left:550px;top:200px"><br><br>
		<input type="text" name="join_date" placeholder="Enter date joined"  value="<?php echo "$dj" ?>" style="position: fixed;left: 550px;top:250px"><br><br>
    <input type="text" name="assistant_name" placeholder="Enter assistant manager name"  value="<?php echo "$am" ?>" style="position: fixed;left: 550px;top:300px"><br><br>
    <input type="text" name="trophies_won" placeholder="Enter no of trophies won" value="<?php echo "$tw" ?>" style="position: fixed;left: 550px;top:350px"><br><br>
		<input type="submit" class="btn btn-primary" name="submit" style="position: fixed;left:610px;top:400px">
	</form>
	<a href="headcoach.php">
  <button class="btn btn-primary" style="position: fixed;left: 610px;top: 450px;width: 70px">Back</button>
  </a>

</body>
</html>

<?php

	if($_GET['submit']) {

		$club_name=$_GET['club_name'];
		$manager_name=$_GET['manager_name'];
		$join_date=$_GET['join_date'];
		$assistant_name=$_GET['assistant_name'];
		$trophies_won=$_GET['trophies_won'];

		$result1=mysqli_query($conn,"UPDATE head_coach SET manager_name='$manager_name',join_date='$join_date',assistant_name='$assistant_name',trophies_won='$trophies_won' WHERE club_name='$club_name'");

		

		if($result1) {

			echo '<script>alert("Team Successfully Added")</script>';
                          header("location:headcoach.php");
		          }
		else
            {
            	echo '<script>alert("Team not Added")</script>';
            }
	}

?>