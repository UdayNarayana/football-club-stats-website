<!DOCTYPE html>
<html lang="en">
<head>
  <title>Finance</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="das.css">
  <script src="asd.js"></script>
  <script src="dasda.js"></script>
  <style>
    /* Remove the navbar's default margin-bottom and rounded borders */ 
    .navbar {
      margin-bottom: 0;
      border-radius: 0;
       background-color: rgba(0,0,0,0.3);
    }
    table {

      border-collapse:collapse;
      width:60%;
      color:#black;
      font-family: monospace;
      font-size: 20px;
      text-align: center;
      border:1px solid black;
    }

    th {
      background:rgba(242,120,75,0.7);
      color:black;
      border:1px solid black;
    }
    td{
      border:1px solid black;
      background:rgba(250,190,88,0.5);
    }
    
    /* Set height of the grid so .sidenav can be 100% (adjust as needed) */
    .row.content {height: 450px}
    
    /* Set gray background color and 100% height */

    
    /* Set black background color, white text and some padding */
    /* On small screens, set height to 'auto' for sidenav and grid */
    @media screen and (max-width: 767px) {
      .row.content {height:auto;} 
    }

body {
  background-image: url('background.jpg');
  background-repeat: no-repeat;
  background-attachment: fixed;
  background-size: cover;
  background-opacity: 0.3;
}
</style>
</head>
<body>

   
<table style="position: fixed;top: 100px;left:210px;">
    <tr>
      <th style="text-align: center">Transfer Budget</th>
      <th style="text-align: center">Net Money Spent</th>
      <th style="text-align: center">Average Wage</th>
      <th style="text-align: center">Money Gained</th>
      <th style="text-align: center">Club Name</th>
      <th style="text-align: center" colspan="2">Operations</th>
    </tr>
    
  <a href="finance.php">
    <button style="position: fixed;left:1000px;top:80px;width: 60px;top:40px">Back</button>
  </a>
 <?php
 $conn=mysqli_connect("localhost","root","","footballclubdb");
  error_reporting(0);
  if (isset($_POST['submit']))

   {
    $str=$_POST['drop'];
    $str1 = $_POST['search'];
    
    $result = mysqli_query($conn,"SELECT * FROM finance WHERE $str like '%$str1%' ");
     if($result->num_rows>0)
      {
        while($row = $result-> fetch_assoc())
      {
       echo "<tr><td>". $row["transfer_budget"] ."</td><td>". $row["net_money_spent"]. "</td><td>" . $row["avg_wage"] ."</td><td>". $row["money_gained"] ."</td><td>" . $row["club_name"] ."</td><td><a href='financeed.php?tb=$row[transfer_budget]&ne=$row[net_money_spent]&aw=$row[avg_wage]&mg=$row[money_gained]&cn=$row[club_name]'>Edit/Update</td><td><a href='financede.php?cn=$row[club_name]' onclick='return checkdelete()'>Delete</td></tr>";
      }
    }
    else
    {
      echo "<script>alert('No Results Found')</script>";
      echo "<script>window.location.href='finance.php'</script>";
    }
  }
  
    
 ?>

    </table> 
</div>
</html>