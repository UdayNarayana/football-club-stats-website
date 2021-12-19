<?php

	$conn= mysqli_connect("localhost","root","","footballclubdb");
	error_reporting(0);

	if(!$conn) {
		die("connection failed: ".mysqli_connect_error());
	}

	$tb=$_GET['tb'];
	$ne=$_GET['ne'];
	$aw=$_GET['aw'];
	$mg=$_GET['mg'];
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
		<input type="text" name="transfer_budget" placeholder="Enter transfer budget"  value="<?php echo "$tb" ?>" required autofocus style="position: fixed;left: 550px;top:150px"><br><br>
		<input type="text" name="net_money_spent" placeholder="Enter net money spent"  value="<?php echo "$ne" ?>" required style="position: fixed;left:550px;top:200px"><br><br>
		<input type="text" name="avg_wage" placeholder="Enter average wage"  value="<?php echo "$aw" ?>" required autofocus style="position: fixed;left: 550px;top:250px"><br><br>
		<input type="text" name="money_gained" placeholder="Enter money gained"  value="<?php echo "$mg" ?>" required autofocus style="position: fixed;left: 550px;top:300px"><br><br>
    <input type="text" name="club_name" placeholder="Enter club name" value="<?php echo "$cn" ?>" required autofocus style="position: fixed;left: 550px;top:350px"><br><br>
		<input type="submit" class="btn btn-primary" name="submit" style="position: fixed;left:610px;top:400px">
  
	</form>
	<a href="finance.php">
  <button class="btn btn-primary" style="position: fixed;left: 610px;top: 450px;width: 70px">Back</button>
  </a>

</body>
</html>

<?php

	if($_GET['submit']) {

		$transfer_budget=$_GET['transfer_budget'];
		$net_money_spent=$_GET['net_money_spent'];
		$avg_wage=$_GET['avg_wage'];
		$money_gained=$_GET['money_gained'];
		$club_name=$_GET['club_name'];

		$result1=mysqli_query($conn,"UPDATE finance SET transfer_budget='$transfer_budget',net_money_spent='$net_money_spent',avg_wage='$avg_wage',money_gained='$money_gained' WHERE club_name='$club_name'");

		

		if($result1) {

			echo '<script>alert("Team Successfully Added")</script>';
                          header("location:finance.php");
		          }
		else
            {
            	echo '<script>alert("Team not Added")</script>';
            }
	}

?>