<!DOCTYPE html>
<html>
<head>
	<title>CEO</title>
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
			border: 1px solid black;
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
	<nav class="navbar">
    <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav">
        <li >
        	<form action="ceovsearch.php" method="POST">
          <font size="2">

                <select id="drop" name="drop" required class="btn btn-info btn-sm dropdwon-toggle">
                  <option value="">--Search By--</option>
                  <option value="ceo_name">Name</option>
                  <option value="transfer_neg">Transfer Negotiations</option>
                  <option value="transfer_success">Successful Transfers</option>
                  <option value="transfer_fail">Failed Transfers</option>
                  <option value="club_name">Club Name</option>
                </select>
                <input type="text" name="search" style="border-radius: 40px ;background-color: grey;color: white;" placeholder="Enter Search Term" class="panel" required>
                <input class="btn btn-sm btn-success" type="submit" name="submit" value="Search" >
              </form>
        </li>
       
      </ul>
  </div>
</nav>
	<table style="position: fixed;top: 100px;left:210px;">
		<tr>
			<th style="text-align: center">Name</th>
			<th style="text-align: center">Transfer Negotiations</th>
			<th style="text-align: center">Successful transfers</th>
			<th style="text-align: center">Failed transfers</th>
			<th style="text-align: center">Club Name</th>
		</tr>
	<a href="selectionv.php" style="position: fixed;left:550px;top:40px;" class="previous">&laquo; Back</a>
<?php 
	$conn=mysqli_connect("localhost","root","","footballclubdb");
	$sql="SELECT * FROM ceo";
	$result =$conn->query($sql);

	if($result-> num_rows > 0) {

		while ($row = $result-> fetch_assoc()) {
			echo "<tr><td>". $row["ceo_name"] ."</td><td>". $row["transfer_neg"]. "</td><td>" .$row["transfer_success"] ."</td><td>". $row["transfer_fail"] ."</td><td>" . $row["club_name"] ."</td></tr>";
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