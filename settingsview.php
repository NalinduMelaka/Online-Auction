<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Settings</title>
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@fortawesome/fontawesome-free@5.15.4/css/fontawesome.min.css" integrity="sha384-jLKHWM3JRmfMU0A5x5AkjWkw/EYfGUAGagvnfryNV3F9VqM98XiIH7VBGVoxVSc7" crossorigin="anonymous">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"/>
	<link rel="stylesheet" href="style.css">
</head>
	
<body>
	<?php include 'includes/header1.php';?> 
	<main>
		
<div class="log">
		<div>
			<a href="update-process.php">
				<button class="button">Click to User Details Settings</button>
			
		</a>
		</div>
		<div>
			<a href="useritemview.php">
				<button class="button">User Items Settings</button>
			
		</a>
		</div>		
    </div>
	    </main>

    <?php include 'includes/footer.php';?> 
</body>
<style type="text/css">
	button{
		 border: 2px solid #4CAF50; /* Green */
		padding: 20px;
		width: 360px;
		margin: 5px;
		background-color: coral;
		transition: all 0.3s;
		 font-size:24px;
	}
	.button:hover {background-color: #3e8e41}

    .button:active {
       background-color: #3e8e41;
       box-shadow: 0 5px #666;
       transform: translateY(4px);
    } 
	.log{
        
		background-color: papayawhip;
		margin:150px 0px 50px 450px;
		width: 400px;
		padding: 20px;
		position: absolute;
		left: 0;
		right: 0;
		
	}
</style>

</html>