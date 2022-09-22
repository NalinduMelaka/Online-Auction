<?php 
session_start();

	include("connection.php");
	include("functions.php");

	$admin_data = check_login($con);

?>
<?php
$id = $_SESSION['id'];
include_once 'connection.php';
if(count($_POST)>0) {
mysqli_query($con,"UPDATE admin set username='" . $_POST['username'] . "', password='" . $_POST['password'] . "', email='" . $_POST['email'] . "' WHERE id='" . $_POST['id'] . "'");
$message = "Record Modified Successfully";
}
$result = mysqli_query($con,"SELECT * FROM admin WHERE id = '$id'");
$row= mysqli_fetch_array($result);
?>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Update Profile</title>
	<link rel="stylesheet" href="styles.css">
    <script src="https://kit.fontawesome.com/b99e675b6e.js"></script>
</head>
<body>
	<div class="wrapper">
    <?php include 'includes/slidebar.php';?> 
    <div class="main_content">
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
Username: <br>
<input type="text" name="username"  value="<?php echo $row['username']; ?>">
<br>
</div>
<div>
Password: <br>
<input type="password" name="password" class="txtField" value="<?php echo $row['password']; ?>">
<br>
</div>
<div>
Email :<br>
<input type="text" name="email" class="txtField" value="<?php echo $row['email']; ?>">
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
</div></div>
</body>
  	 <style type="text/css">
	 	.log{
        
		background-color: papayawhip;
		margin:100px 0px 50px 450px;
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