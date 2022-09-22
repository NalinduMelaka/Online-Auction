<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Social media</title>
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@fortawesome/fontawesome-free@5.15.4/css/fontawesome.min.css" integrity="sha384-jLKHWM3JRmfMU0A5x5AkjWkw/EYfGUAGagvnfryNV3F9VqM98XiIH7VBGVoxVSc7" crossorigin="anonymous">
	<link rel="stylesheet" href="style.css">
</head>
<body>
	<?php include 'includes/header1.php';?> 	
	<main>
		<div class="Socialmedia">
		<h2>Social media</h2>
            <ul>
              <li><a href="#" title="Facebook"><img src="images/social-icon1.png" alt="Facebook" /><span>Facebook</span><span class="cl">&nbsp;</span></a></li>
              <li><a href="#" title="Twitter"><img src="images/social-icon2.png" alt="Twitter" /><span>Twitter</span><span class="cl">&nbsp;</span></a></li>              
              <li><a href="#" title="RSS"><img src="images/social-icon4.png" alt="RSS" /><span>RSS</span><span class="cl">&nbsp;</span></a></li>
              <li><a href="#" title="Blogger"><img src="images/social-icon7.png" alt="Blogger" /><span>Blogger</span><span class="cl">&nbsp;</span></a></li>
            </ul>
	</main>
	</div>
	<?php include 'includes/footer.php';?> 
	<style type="text/css">
		.Socialmedia h2{
			margin-top: 100px;
		}
		.Socialmedia ul{
	  margin-top: 20px;		
	  list-style: none;

	}

      .Socialmedia ul li{
	      display: inline-block;
	      padding: 25px;
    }	

	</style>

</body>
</html>