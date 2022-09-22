<?php 
session_start();

  include("connection.php");
  include("functions.php");


  if($_SERVER['REQUEST_METHOD'] == "POST")
  {
    //something was posted

    $email = $_POST['email'];
        $comment = $_POST['comment'];
       $name = $_POST['name'];
        


    if(!empty($email) && !empty($name) && !empty($comment))
    {

      //save to database
      $contact_id = random_num(20);
      $query = "insert into contact (contact_id,email,comment,name) values ('$contact_id','$email','$comment','$name')";

      mysqli_query($con, $query);

      header("Location: index.php");
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
	<title>Contact</title>
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@fortawesome/fontawesome-free@5.15.4/css/fontawesome.min.css" integrity="sha384-jLKHWM3JRmfMU0A5x5AkjWkw/EYfGUAGagvnfryNV3F9VqM98XiIH7VBGVoxVSc7" crossorigin="anonymous">
	<link rel="stylesheet" href="style.css">
</head>
<body>
	<?php include 'includes/header1.php';?> 	
	<main>
		<form method="post">      
            <input name="name" type="text" class="feedback-input" placeholder="Name" />   
            <input name="email" type="text" class="feedback-input" placeholder="Email" />
           <input name="comment" type = "text" class="feedback-input" placeholder="Comment">
            <input type="submit" value="SUBMIT"/>
       </form>
	</main>
	<?php include 'includes/footer.php';?> 
	<style type="text/css">
		@import url(https://fonts.googleapis.com/css?family=Montserrat:400,700);

body { background:rgb(30,30,40); }
form { max-width:420px; margin:50px auto; }

.feedback-input {
  color:white;
  font-family: Helvetica, Arial, sans-serif;
  font-weight:500;
  font-size: 18px;
  border-radius: 5px;
  line-height: 22px;
  background-color: transparent;
  border:2px solid #CC6666;
  transition: all 0.3s;
  padding: 13px;
  margin-bottom: 15px;
  width:100%;
  box-sizing: border-box;
  outline:0;
}

.feedback-input:focus { border:2px solid #CC4949; }



[type="submit"] {
  font-family: 'Montserrat', Arial, Helvetica, sans-serif;
  width: 100%;
  background:#CC6666;
  border-radius:5px;
  border:0;
  cursor:pointer;
  color:white;
  font-size:24px;
  padding-top:10px;
  padding-bottom:10px;
  transition: all 0.3s;
  margin-top:-4px;
  font-weight:700;
}
[type="submit"]:hover { background:#CC4949; }
	</style>

</body>
</html>