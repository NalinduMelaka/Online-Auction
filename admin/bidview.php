<?php 
session_start();

	include("connection.php");
	include("functions.php");
	$admin_data = check_login($con);
  $result = mysqli_query($con,"SELECT * FROM bid");
	

?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Users</title>
	<link rel="stylesheet" href="styles.css">
    <script src="https://kit.fontawesome.com/b99e675b6e.js"></script>
</head>
<body>
<div class="wrapper">
<?php include 'includes/slidebar.php';?> 
<div class="main_content">
<main>
<div class="container">		
<?php
if (mysqli_num_rows($result) > 0) {
?>
<div class="tb">
<table id="customers">
	  <tr>
	    <th>Bid_No</th>
		<th>Item Id</th>
		<th>User Id</th>
		<th>Value</th>
		<th>Date</th>
	  </tr>
			<?php
			$i=0;
			while($row = mysqli_fetch_array($result)) {
			?>
	  <tr>
	    <td><?php echo $row["bid_id"]; ?></td>
		<td><?php echo $row["item_id"]; ?></td>
		<td><?php echo $row["user_id"]; ?></td>
		<td><?php echo $row["value"]; ?></td>
		<td><?php echo $row["date_time"]; ?></td>
		<td><a href="userupdate.php?id=<?php echo $row["bid_id"]; ?>">Update</a></td>
      </tr>
			<?php
			$i++;
			}
			?>
</table></div>
 <?php
}
else
{
    echo "No result found";
}
?>
</div></main></div></div>
 </body>
</html>
<style type="text/css">
	
	.tb{
		
		width: 800px;
		margin: 20px 0px 60px 100px;
		left: 0;
		right: 0;
	}
	a {
	text-decoration: none;
	color: #006097;
	font-weight: bold;
    }
    #customers {
  font-family: Arial, Helvetica, sans-serif;
  border-collapse: collapse;
  width: 100%;
}

#customers td, #customers th {
  border: 1px solid #ddd;
  padding: 8px;
}

#customers tr:nth-child(even){background-color: #f2f2f2;}

#customers tr:hover {background-color: #ddd;}

#customers th {
  padding-top: 12px;
  padding-bottom: 12px;
  text-align: left;
  background-color: #04AA6D;
  color: white;
}
</style>