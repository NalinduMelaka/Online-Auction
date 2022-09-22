<?php 
session_start();

	include("connection.php");
	include("functions.php");

	$user_data = check_login($con);

?>
<?php
$id = $_GET['id'];
include_once 'connection.php';
if(count($_POST)>0) {
mysqli_query($con,"UPDATE item set name='" . $_POST['name'] . "', qulity='" . $_POST['qulity'] . "', price='" . $_POST['price'] . "' ,image='" . $_POST['image'] . "', description='".$_POST['description']."' WHERE id='" . $_POST['id'] . "'");
$message = "Record Modified Successfully";
}
$result = mysqli_query($con,"SELECT * FROM item WHERE item_id = '$id'");
$row= mysqli_fetch_array($result);
?>
<html>
<head>
<title>Update  Data</title>
</head>
<body>
	
	<main>
	<div class="container">	
	<div id="box">
	<div class="log">
<form  method="post" action="">
<div><?php if(isset($message)) { echo $message; } ?>
</div>
<div style="padding-bottom:5px;">
</div>
<div style="font-size: 25px;margin: 10px;color: black;">Update</div>

<input type="hidden" name="id" class="txtField" value="<?php echo $row['id']; ?>">
<div>
Name: <br>
<input type="text" name="name"  value="<?php echo $row['name']; ?>">
<br>
</div>
<div>
Qulity: <br>
<input type="text" name="qulity" class="txtField" value="<?php echo $row['qulity']; ?>">
<br>
</div>
<div>
Price :<br>
<input type="text" name="price" class="txtField" value="<?php echo $row['price']; ?>">
<br>
</div>
<div>
Image:<br>
<input type="file" name="image" class="txtField" value="<?php echo $row['image']; ?>">
<br>
</div>
<div>
Description:<br>
<input type="text" name="description" class="txtField" value="<?php echo $row['description']; ?>">
<br>
</div>
<div>
<input type="submit" name="submit" value="Submit" class="button">
</div>
<div>
			<a href="index.php">Click to Home</a>
</div>

</form>
</div></div></div>
</main>

</body>
  	 <style type="text/css">
	 	.log{
        
		background-color: papayawhip;
		margin:50px 0px 50px 450px;
		width: 400px;
		padding: 20px;
		position: absolute;
		left: 0;
		right: 0;
		
	}

	a {
	text-decoration: none;
	color: #006097;
	font-weight: bold;
    }


    form div input {
	width: 100%;
	font-size: 20px;
	padding: 25px 10px 10px 10px;
	font-weight: bold;	
    }



	input.button {
	background: #006097;
	color: white;
	padding: 20px;
	border: 1px solid #006097;
	width: 100%;
	display: inline-block;
	margin-bottom: 5px;
    }

    a.button {
    text-align: center;	
    background: white;
    color: #006097;
    padding: 20px;	
	border: 1px solid #006097;
	width: 100%;
	display: inline-block;
	margin-bottom: 10px;
    }

	   </style>

</html>