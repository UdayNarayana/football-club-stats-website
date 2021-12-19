<?php 


	$conn= mysqli_connect("localhost","root","","footballclubdb");
	error_reporting(0);

	if(!$conn) {
		die("connection failed: ".mysqli_connect_error());
	}

	$club_name=$_GET['cn'];

	$result1=mysqli_query($conn,"DELETE FROM head_coach WHERE club_name='$club_name'");

	if($result1) {

		echo '<script>alert("Team Successfully deleted")</script>';
                          header("location:headcoach.php");
	}
	else
    {
        echo '<script>alert("Team not deleted")</script>';
    }


 ?>