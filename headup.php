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
	<form method="POST" action="headup.php">
		<input type="text" name="club_name" placeholder="Enter club name" required  style="position: fixed;left: 550px;top:150px"><br><br>
		<input type="text" name="manager_name" placeholder="Enter manager name" required style="position: fixed;left:550px;top:200px"><br><br>
		<input type="text" name="join_date" placeholder="Enter date joined" required   style="position: fixed;left: 550px;top:250px"><br><br>
    <input type="text" name="assistant_name" placeholder="Enter assistant manager name" required  style="position: fixed;left: 550px;top:300px"><br><br>
    <input type="text" name="trophies_won" placeholder="Enter no of trophies won" required  style="position: fixed;left: 550px;top:350px"><br><br>
		<input type="submit" class="btn btn-primary" name="submit" style="position: fixed;left:610px;top:400px">
	</form>
  <a href="headcoach.php">
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


                        $club_name=$_POST['club_name'];
                        $manager_name=$_POST['manager_name'];
                        $join_date=$_POST['join_date'];
                        $assistant_name=$_POST['assistant_name'];
                        $trophies_won=$_POST['$trophies_won'];



                       $result1=mysqli_query($conn,"INSERT into head_coach values('$club_name','$manager_name','$join_date','$assistant_name','$trophies_won')");
                        if($result1)
                        {
                         echo '<script>alert("Team Successfully Added")</script>';
                          header("location:headcoach.php");
                        }
                        else
                        {
                          echo '<script>alert("Team not Added")</script>';
                        }
                      }

  
?>