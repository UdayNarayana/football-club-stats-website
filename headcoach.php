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
button:hover{
	transform: scale(1.2);
	z-index: 1000;
	background: grey;

		tr:nth-child(even) {background-color:: #ededed}
	</style>
</head>
<body>
	<nav class="navbar">
    <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav">
        <li >
        	<form action="headcoachsearch.php" method="POST">
          <font size="2">

                <select id="drop" name="drop" required class="btn btn-info btn-sm dropdwon-toggle">
                  <option value="">--Search By--</option>
                  <option value="club_name">Club Name</option>
                  <option value="manager_name">Manager Name</option>
                  <option value="join_date">Date Joined</option>
                  <option value="assistant_name">Assistant Manager Name</option>
                  <option value="trophies_won">Trophies Won</option>
                </select>
                <input type="text" name="search" placeholder="Enter Search Term" required style="border-radius: 40px ;background-color: grey;color: white;" class="panel">
                <input type="submit" class="btn btn-sm btn-success" name="submit" value="Search" >
              </form>
        </li>
       
      </ul>
  </div>
</nav>
	<table style="position: fixed;top: 100px;left:210px;">
		<tr>
			<th style="text-align: center">Club Name</th>
			<th style="text-align: center">Manager Name</th>
			<th style="text-align: center">Date Joined</th>
			<th style="text-align: center">Assistant Manager Name</th>
			<th style="text-align: center">Trophies Won</th>
			<th style="text-align: center" colspan="2">Operation</th>
		</tr>
		<a href="headup.php">
		<button class="btn" style="position: fixed;left:650px;top:80px;width: 60px;top:40px">Insert</button>
	</a>
	<a href="selection.php">
		<button class="btn" style="position: fixed;left:450px;top:80px;width: 60px;top:40px">Back</button>
	</a>
<?php 
	$conn=mysqli_connect("localhost","root","","footballclubdb");
	$sql="SELECT * FROM head_coach";
	$result =$conn->query($sql);

	if($result-> num_rows > 0) {

		while ($row = $result-> fetch_assoc()) {
			echo "<tr><td>". $row["club_name"] ."</td><td>". $row["manager_name"]. "</td><td>" .$row["join_date"] ."</td><td>" . $row["assistant_name"] . "</td><td>" . $row["trophies_won"] . "</td><td><a href='headcoached.php?cn=$row[club_name]&mn=$row[manager_name]&dj=$row[join_date]&am=$row[assistant_name]&tw=$row[trophies_won]'>Edit/Update</td><td><a href='headcoachde.php?cn=$row[club_name]' onclick='return checkdelete()'>Delete</td></tr>";
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