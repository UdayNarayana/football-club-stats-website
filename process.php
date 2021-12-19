<?php  
	$conn= mysqli_connect("localhost","root","","footballclubdb");

	if(!$conn) {
		die("connection failed: ".mysqli_connect_error());
	}
	//if($conn->connect_error) {
	//	echo "error-404";
	//}else{
	//	echo "connected";
	//}

	$username = $_POST['username'];
	$password = $_POST['password'];
	//echo $username;
	//echo $password;
	$sql = "SELECT * FROM login WHERE username = '$username' AND password = '$password'";
	$result = mysqli_query($conn,$sql);
	$row = mysqli_fetch_array($result);
	if($username == "" && $password == "") {
		header('location:login.php');
	}
	if($row['username'] == $username && $row['password'] == $password) {
		header('location:selection.php');
	}else{
		echo "<script>alert('Check your credentials and try again')</script>";
		echo "<script>location.replace('login.php')</script>";
	}






?>