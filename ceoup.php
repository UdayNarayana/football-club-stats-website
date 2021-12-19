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
input:hover{
  transform: scale(1.2);
  background-color: lightgrey
}

</style>
</head>
<body>
	<form method="POST">
		<input type="text" name="name" placeholder="Enter CEO name"  required autofocus style="position: fixed;left: 550px;top:150px"><br><br>
		<input type="text" name="transfer_neg" placeholder="Enter transfer negotiations"  required style="position: fixed;left:550px;top:200px"><br><br>
		<input type="text" name="transfer_success" placeholder="Enter successfull transfers"  required autofocus style="position: fixed;left: 550px;top:250px"><br><br>
		<input type="text" name="transfer_fail" placeholder="Enter failed transfers"  required autofocus style="position: fixed;left: 550px;top:300px"><br><br>
    <input type="text" name="club_name" placeholder="Enter club name" required autofocus style="position: fixed;left: 550px;top:350px"><br><br>
		<input type="submit" name="submit" class="btn btn-primary" style="position: fixed;left:610px;top:400px">
	</form>
  <a href="ceo.php">
  <button class="btn btn-primary" style="position: fixed;left: 610px;top: 450px;width: 70px">Back</button>
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


                        $ceo_name=$_POST['name'];
                        $transfer_neg=$_POST['transfer_neg'];
                        $transfer_success=$_POST['transfer_success'];
                        $transfer_fail=$_POST['transfer_fail'];
                        $club_name=$_POST['club_name'];



                       $result1=mysqli_query($conn,"INSERT into ceo values('$ceo_name','$transfer_neg','$transfer_success','$transfer_fail','$club_name')");
                        if($result1)
                        {
                         echo '<script>alert("Team Successfully Added")</script>';
                          header("location:ceo.php");
                        }
                        else
                        {
                          echo '<script>alert("Team not Added")</script>';
                        }
                      }


                    


?>	