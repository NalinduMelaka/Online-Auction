<?php 

session_start();

	include("connection.php");
	include("functions.php");


	if($_SERVER['REQUEST_METHOD'] == "POST")
	{
		//something was posted
		$username = $_POST['username'];
		$password = $_POST['password'];

		if(!empty($username) && !empty($password))
		{

			//read from database
			$query = "select * from admin where username = '$username' limit 1";
			$result = mysqli_query($con, $query);

			if($result)
			{
				if($result && mysqli_num_rows($result) > 0)
				{

					$admin_data = mysqli_fetch_assoc($result);
					
					if($admin_data['password'] === $password)
					{

						$_SESSION['id'] = $admin_data['id'];
						header("Location: index.php");
						die;
					}
				}
			}
			
			echo "wrong username or password!";
		}else
		{
			echo "wrong username or password!";
		}
	}

?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Sign in</title>
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@fortawesome/fontawesome-free@5.15.4/css/fontawesome.min.css" integrity="sha384-jLKHWM3JRmfMU0A5x5AkjWkw/EYfGUAGagvnfryNV3F9VqM98XiIH7VBGVoxVSc7" crossorigin="anonymous">
	<link rel="stylesheet" href="styles.css">
</head>
<body>
		
	<main>
		<div class="container">
		<div id="box">
		<div class="log">
		<form method="post">
			<div style="font-size: 25px;margin: 10px;color: black;">Admin Login</div>
            <div>
            <label for="username" id="lbluser">Username</label>	
			<input id="text" type="text" name="username"><br><br>
		    </div>
		    <div>
		    <label for="password" id="lblpass">Password</label>	
			<input id="text" type="password" name="password"><br><br>
            </div>
            <div>
			<input type="submit" class="button" value="Login">
            </div>
           
		</form>
	    </div>
	</div>
	</div> <!-- .container -->
	</main>
	
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
	margin-bottom: 30px;
    }

	   </style>

</body>
</html>