<?php

	$conn= mysqli_connect("localhost","root","","footballclubdb");
	error_reporting(0);

	if(!$conn) {
		die("connection failed: ".mysqli_connect_error());
	}

	$ce=$_GET['ce'];
	$tn=$_GET['tn'];
	$ts=$_GET['ts'];
	$tf=$_GET['tf'];
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
		<input type="text" name="ceo_name" placeholder="Enter CEO name"  value="<?php echo "$ce" ?>" required autofocus style="position: fixed;left: 550px;top:150px"><br><br>
		<input type="text" name="transfer_neg" placeholder="Enter transfer negotiations"  value="<?php echo "$tn" ?>" required style="position: fixed;left:550px;top:200px"><br><br>
		<input type="text" name="transfer_success" placeholder="Enter successfull transfers"  value="<?php echo "$ts" ?>" required autofocus style="position: fixed;left: 550px;top:250px"><br><br>
		<input type="text" name="transfer_fail" placeholder="Enter failed transfers"  value="<?php echo "$tf" ?>" required autofocus style="position: fixed;left: 550px;top:300px"><br><br>
    <input type="text" name="club_name" placeholder="Enter club name" value="<?php echo "$cn" ?>" required autofocus style="position: fixed;left: 550px;top:350px"><br><br>
		<input type="submit" class="btn btn-primary" name="submit" style="position: fixed;left:610px;top:400px">
	</form>
	<a href="ceo.php">
  <button class="btn btn-primary" style="position: fixed;left: 610px;top: 450px;width: 70px">Back</button>
  </a>


</body>
</html>

<?php

	if($_GET['submit']) {

		$ceo_name=$_GET['ceo_name'];
		$transfer_neg=$_GET['transfer_neg'];
		$transfer_success=$_GET['transfer_success'];
		$transfer_fail=$_GET['transfer_fail'];
		$club_name=$_GET['club_name'];

		$result1=mysqli_query($conn,"UPDATE ceo SET ceo_name='$ceo_name',transfer_neg='$transfer_neg',transfer_success='$transfer_success',transfer_fail='$transfer_fail' WHERE club_name='$club_name'");

		

		if($result1) {

			echo '<script>alert("Team Successfully Added")</script>';
                          header("location:ceo.php");
		          }
		else
            {
            	echo '<script>alert("Team not Added")</script>';
            }
	}

?>