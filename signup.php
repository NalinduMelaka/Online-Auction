<?php 
session_start();

	include("connection.php");
	include("functions.php");


	if($_SERVER['REQUEST_METHOD'] == "POST")
	{
		//something was posted
		$user_name = $_POST['user_name'];
		$password = $_POST['password'];
        $full_name = $_POST['full_name'];
        $email = $_POST['email'];
        $identity_card = $_POST['id'];


		if(!empty($user_name) && !empty($password)  && !empty($full_name) && !empty($email) && !empty($identity_card) && !is_numeric($user_name) && !is_numeric($full_name) )
		{

			//save to database
			$user_id = random_num(20);
			$query = "insert into users (user_id,user_name,password,full_name,email,identity_card) values ('$user_id','$user_name','$password','$full_name','$email','$identity_card')";

			mysqli_query($con, $query);

			header("Location: signin.php");
			die;
		}else
		{
			echo "There has error, Please enter some valid information!";
		}
	}
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Sign up</title>
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@fortawesome/fontawesome-free@5.15.4/css/fontawesome.min.css" integrity="sha384-jLKHWM3JRmfMU0A5x5AkjWkw/EYfGUAGagvnfryNV3F9VqM98XiIH7VBGVoxVSc7" crossorigin="anonymous">
	<link rel="stylesheet" href="style.css">
</head>
<body>

	
	<main>
	<div id="b">
	<div id="box">
		
		<form method="post">
			<div style="font-size: 25px;margin: 10px;color: black;">Signup</div>
            <div>
            <label for="full_name" id="lbname">Full name</label>
            <input id="text" type="text" name="full_name"><br><br>	
            </div> 
            <div>
            <label for="username" id="lbluser">Username</label>
			<input id="text" type="text" name="user_name"><br><br>
		    </div>
		    <div>
		    <label for="password" id="lblpass">Password</label>		
			<input id="text" type="password" name="password"><br><br>
            </div> 
            <div>
            <label for="email" id="lbemail">Email</label>
            <input id="text" type="text" name="email"><br><br>	
            </div>
            <div>
            <label for="identity_card" id="lbid">Identity card number</label>
            <input id="text" type="text" name="id"><br><br>	
            </div> 
			<input id="button" type="submit" value="Signup"><br><br>

			<a href="signin.php">Click to Login</a><br><br>
		</form>
	</div>
	</div>
	</main>
	
	<style type="text/css">
	



    a {
	text-decoration: none;
	color: #006097;
	font-weight: bold;
    }

	#text{

		height: 25px;
		border-radius: 5px;
		padding: 4px;
		border: solid thin #aaa;
		width: 100%;
	}

	#button{

	background: #006097;
	color: white;
	padding: 19px;
	border: 1px solid #006097;
	width: 100%;
	display: inline-block;
	margin-bottom: 5px;
	}
	#box{

		background-color: papayawhip;
		margin:50px 0px 70px 450px;
		width: 400px;
		padding: 20px;
		position: absolute;
		left: 0;
		right: 0;
	}
	#b{
		margin: auto;
	}
</style>

	
	
</body>
</html>