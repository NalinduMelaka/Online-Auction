<?php 
session_start();

	include("connection.php");
	include("functions.php");
	$id = $_SESSION['user_id'];
	$user_data = check_login($con);
  $result = mysqli_query($con,"SELECT * FROM item WHERE user_id = '$id'");
	

?>

<!DOCTYPE html>
<html>
 <head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>User Items View</title>
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@fortawesome/fontawesome-free@5.15.4/css/fontawesome.min.css" integrity="sha384-jLKHWM3JRmfMU0A5x5AkjWkw/EYfGUAGagvnfryNV3F9VqM98XiIH7VBGVoxVSc7" crossorigin="anonymous">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"/>
	<link rel="stylesheet" href="style.css">
 </head>
<body>
	<?php include 'includes/header1.php';?> 	
<?php
if (mysqli_num_rows($result) > 0) {
?>
<table id="customers">
	  <tr>
	    <th>Item_No</th>
		<th>Name</th>
		<th>Qulity</th>
		<th>price</th>
		<th>Image</th>
		<th>Description</th>
	  </tr>
			<?php
			$i=0;
			while($row = mysqli_fetch_array($result)) {
			?>
	  <tr>
	    <td><?php echo $row["item_id"]; ?></td>
		<td><?php echo $row["name"]; ?></td>
		<td><?php echo $row["qulity"]; ?></td>
		<td><?php echo $row["price"]; ?></td>
		<td> <img src="img/<?php echo $row["image"]; ?>" width = 200 title="<?php echo $row['image']; ?>"> </td>
		<td><?php echo $row["description"]; ?></td>
		<td><a href="useritemupdate.php?id=<?php echo $row["item_id"]; ?>">Update</a></td>
		<td><a href="useritemdelete.php?id=<?php echo $row["item_id"]; ?>">Delete</a></td>
		
      </tr>
			<?php
			$i++;
			}
			?>
</table>
 <?php
}
else
{
    echo "No result found";
}
?>
<?php include 'includes/footer.php';?> 
 </body>
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
   margin-top: 100px; 	
   margin-left: 100px;
  font-family: Arial, Helvetica, sans-serif;
  border-collapse: collapse;
  width: 80%;
}

#customers td, #customers th {
  border: 1px solid #ddd;
  padding: 4px;
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
</html>