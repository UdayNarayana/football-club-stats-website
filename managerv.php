<!DOCTYPE html>
<html>
<head>
	<title>Head Coach</title>
	<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="das.css">
  <script src="asd.js"></script>
  <script src="dasda.js"></script>
	<style type="text/css">
		table {

			border-collapse:collapse;
			width:60%;
			color:black;
			font-family: monospace;
			font-size: 20px;
			text-align: center;
			border:1px solid black;

		}

		th {
			background:rgba(242,120,75,0.7);
			color:white;
			border:1px solid black;

		}

		td {
			border:1px solid black;
			background:rgba(250,190,88,0.5);
		}

		body {
  background-image: url('background.jpg');
  background-repeat: no-repeat;s
  background-attachment: fixed;
  background-size: cover;
  background-opacity: 0.3;
}
a {
  text-decoration: none;
  display: inline-block;
  padding: 8px 16px;
}

a:hover {
  background-color: #ddd;
  color: black;
  transform: scale(1.2);
}

.previous {
  background-color: #f1f1f1;
  color: black;
}

		tr:nth-child(even) {background-color:: #ededed}
	</style>
</head>
<body>
	<table style="position: fixed;top: 100px;left:210px;">
		<tr>
			<th style="text-align: center">Manager Name</th>
			<th style="text-align: center">Club Name</th>
			<th style="text-align: center">Trophies Won</th>
		</tr>
	<a href="selectionv.php" style="position: fixed;left:550px;top:40px;" class="previous">&laquo; Back</a>
<?php 
	$conn=mysqli_connect("localhost","root","","footballclubdb");
	$sql="SELECT * FROM manager";
	$result =$conn->query($sql);

	if($result-> num_rows > 0) {

		while ($row = $result-> fetch_assoc()) {
			echo "<tr><td>". $row["manager_name"] ."</td><td>". $row["club_name"]. "</td><td>" . $row["trophies_won"] . "</td></tr>";
		}
	}
	else {
		echo "no result";
	}

	$conn->close();
?>


	</table>

</body>
</html>