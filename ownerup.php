<!DOCTYPE html>
<html>
<head>
	<title>Update</title>
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
button:hover{
  transform: scale(1.2);
  z-index: 1000;
  background: grey;
}
input:hover{
  transform: scale(1.2);
  background-color: lightgrey
}

</style>
</head>
<body>
	<form method="POST">
		<input type="text" name="name" placeholder="Enter name" pattern="^[A-Za-z]*$" oninvalid="this.setCustomValidity('Enter the owner name without numbers and special characters')" oninput="this.setCustomValidity('')"  required autofocus style="position: fixed;left: 550px;top:150px"><br><br>
		<input type="text" name="networth" placeholder="Enter networth"  required style="position: fixed;left:550px;top:200px"><br><br>
		<input type="text" name="time_spent" placeholder="Enter time"  required autofocus style="position: fixed;left: 550px;top:250px"><br><br>
		<input type="text" name="club name" placeholder="Enter club name" required autofocus style="position: fixed;left: 550px;top:300px"><br><br>
		<input type="submit" name="submit" class="btn  btn-primary" style="position: fixed;left:610px;top:350px">
	</form>
  <a href="owner.php">
  <button class="btn btn-primary" style="position: fixed;left: 610px;top: 400px;width: 70px">Back</button>
  </a>
</body>


</html>
<?php
$conn= mysqli_connect("localhost","root","","footballclubdb");
	if(!$conn) {
		die("connection failed: ".mysqli_connect_error());
	}

	
                    if(isset($_POST['submit']))
                    {


                        $name=$_POST['name'];
                        $networth=$_POST['networth'];
                        $time_spent=$_POST['time_spent'];
                        $club_name=$_POST['club_name'];



                       $result1=mysqli_query($conn,"INSERT into owner values('$name','$networth','$time_spent','$club_name')");
                        if($result1)
                        {
                         echo '<script>alert("Team Successfully Added")</script>';
                          header("location:owner.php");
                        }
                        else
                        {
                          echo '<script>alert("Team not Added")</script>';
                        }
                      }


                    


?>	