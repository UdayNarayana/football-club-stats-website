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
		<input type="text" name="transfer" placeholder="Enter transfer budget"  required autofocus style="position: fixed;left: 550px;top:150px"><br><br>
		<input type="text" name="net" placeholder="Enter net money spent"  required style="position: fixed;left:550px;top:200px"><br><br>
		<input type="text" name="avg" placeholder="Enter average wage"  required autofocus style="position: fixed;left: 550px;top:250px"><br><br>
		<input type="text" name="money" placeholder="Enter money gained"  required autofocus style="position: fixed;left: 550px;top:300px"><br><br>
    <input type="text" name="club_name" placeholder="Enter club name" required autofocus style="position: fixed;left: 550px;top:350px"><br><br>
		<input type="submit" class="btn btn-primary" name="submit" style="position: fixed;left:610px;top:400px">
  
	</form>
  <a href="finance.php">
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


                        $transfer_budget=$_POST['transfer'];
                        $net_money_spent=$_POST['net'];
                        $avg_wage=$_POST['avg'];
                        $money_gained=$_POST['money'];
                        $club_name=$_POST['club_name'];



                       $result1=mysqli_query($conn,"INSERT into finance values('$transfer_budget','$net_money_spent','$avg_wage','$money_gained','$club_name')");
                        if($result1)
                        {
                         echo '<script>alert("Team Successfully Added")</script>';
                          header("location:finance.php");
                        }
                        else
                        {
                          echo '<script>alert("Team not Added")</script>';
                        }
                      }


                    


?>	