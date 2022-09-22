<?php 
session_start();

	include("connection.php");
	include("functions.php");
	$id = $_SESSION['user_id'];
	$user_data = check_login($con);
  $result = mysqli_query($con,"SELECT * FROM users WHERE user_id = '$id'");
	

?>

<!DOCTYPE html>
<html>
 <head>
   <title> Retrive data & update</title>
   <link rel="stylesheet" href="style.css">
 </head>
<body>
<?php
if (mysqli_num_rows($result) > 0) {
?>
<table>
	  <tr>
	    <td>User_No</td>
		<td>User Name</td>
		<td>Password</td>
		<td>Email</td>
		<td>Identity_card</td>
		<td>Full Name</td>
	  </tr>
			<?php
			$i=0;
			while($row = mysqli_fetch_array($result)) {
			?>
	  <tr>
	    <td><?php echo $row["id"]; ?></td>
		<td><?php echo $row["user_name"]; ?></td>
		<td><?php echo $row["password"]; ?></td>
		<td><?php echo $row["email"]; ?></td>
		<td><?php echo $row["identity_card"]; ?></td>
		<td><?php echo $row["full_name"]; ?></td>
		<td><a href="update-process.php?id=<?php echo $row["id"]; ?>">Update</a></td>
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
 </body>
</html>