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
		<input type="text" name="in" placeholder="Enter player in" required   style="position: fixed;left: 550px;top:150px"><br><br>
		<input type="text" name="out" placeholder="Enter player out" required  style="position: fixed;left:550px;top:200px"><br><br>
		<input type="text" name="incost" placeholder="Enter cost of player in" required  autofocus style="position: fixed;left: 550px;top:250px"><br><br>
		<input type="text" name="outcost" placeholder="Enter cost of player out" required  autofocus style="position: fixed;left: 550px;top:300px"><br><br>
    <input type="text" name="transfer" placeholder="Enter transfer budget" required   autofocus style="position: fixed;left: 550px;top:350px"><br><br>
    <input type="text" name="club_name" placeholder="Enter club name" required  autofocus style="position: fixed;left: 550px;top:400px"><br><br>
		<input type="submit" class="btn btn-primary" name="submit" style="position: fixed;left:610px;top:450px">
	</form>
  <a href="transfers.php">
  <button class="btn btn-primary" style="position: fixed;left: 610px;top: 500px;width: 70px">Back</button>
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


                        $player_in=$_POST['in'];
                        $player_out=$_POST['out'];
                        $player_in_cost=$_POST['incost'];
                        $player_out_cost=$_POST['outcost'];
                        $transfer_budget=$_POST['transfer'];
                        $club_name=$_POST['club_name'];



                       $result1=mysqli_query($conn,"INSERT into transfer values('$player_in','$player_out','$player_in_cost','$player_out_cost','$transfer_budget','$club_name')");
                        if($result1)
                        {
                         echo '<script>alert("Team Successfully Added")</script>';
                          header("location:transfers.php");
                        }
                        else
                        {
                          echo '<script>alert("Team not Added")</script>';
                        }
                      }


                    


?>	