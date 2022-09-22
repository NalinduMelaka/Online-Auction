<?php 
session_start();

	include("connection.php");
	include("functions.php");

	$admin_data = check_login($con);

?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Admin</title>
	<link rel="stylesheet" href="styles.css">
   <script src="https://kit.fontawesome.com/b99e675b6e.js"></script>
</head>
<body>
	<div class="wrapper">
    <?php include 'includes/slidebar.php';?> 
    <div class="main_content">
        <div class="header">Welcome!! Have a nice day.</div>  
        <div class="info">
        	<?php
        	$connect = new PDO('mysql:host=localhost;dbname=login_sample_db','root','');

        	function rowCount($connect,$query){
        		$stmt = $connect->prepare($query);
        		$stmt->execute();
        		return $stmt->rowCount();
        	}
           ?>
        	<h1> Users = <?php echo rowCount($connect,"SELECT * FROM users");?></h1>
        	<h1> Items = <?php echo rowCount($connect,"SELECT * FROM item");?></h1>
        	<h1> Contacts = <?php echo rowCount($connect,"SELECT * FROM contact");?></h1>
        	<h1> Bids = <?php echo rowCount($connect,"SELECT * FROM bid");?></h1>
        	<h1> Admins = <?php echo rowCount($connect,"SELECT * FROM admin");?></h1>
        	<h1> Reports = <?php echo rowCount($connect,"SELECT * FROM report");?></h1>
        
      </div>
    </div>
</div>

</body>
</html>
<style type="text/css">
	h1{
		margin: 40px;
	}
</style>

</body>
</html>