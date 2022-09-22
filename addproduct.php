<?php 
session_start();

	include("connection.php");
	include("functions.php");
	$id = $_SESSION['user_id'];
	?>
<?php

require 'connection.php';
if(isset($_POST["submit"])){
  $name = $_POST["name"];
  $qulity = $_POST["qulity"];
  $price = $_POST["price"];
  $description = $_POST["description"];
  if($_FILES["image"]["error"] == 4){
    echo
    "<script> alert('Image Does Not Exist'); </script>"
    ;
  }
  else{
    $fileName = $_FILES["image"]["name"];
    $fileSize = $_FILES["image"]["size"];
    $tmpName = $_FILES["image"]["tmp_name"];

    $validImageExtension = ['jpg', 'jpeg', 'png'];
    $imageExtension = explode('.', $fileName);
    $imageExtension = strtolower(end($imageExtension));
    if ( !in_array($imageExtension, $validImageExtension) ){
      echo
      "
      <script>
        alert('Invalid Image Extension');
      </script>
      ";
    }
    else if($fileSize > 1000000){
      echo
      "
      <script>
        alert('Image Size Is Too Large');
      </script>
      ";
    }
    else{
      $newImageName = uniqid();
      $newImageName .= '.' . $imageExtension;

      move_uploaded_file($tmpName, 'img/' . $newImageName);
      $query = "INSERT INTO item VALUES('', '$name', '$newImageName','$qulity','$price','$description','$id')";
      mysqli_query($con, $query);
      echo
      "
      <script>
        alert('Successfully Added');
        document.location.href = 'useritemview.php';
      </script>
      ";
    }
  }
}
?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Add product</title>
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@fortawesome/fontawesome-free@5.15.4/css/fontawesome.min.css" integrity="sha384-jLKHWM3JRmfMU0A5x5AkjWkw/EYfGUAGagvnfryNV3F9VqM98XiIH7VBGVoxVSc7" crossorigin="anonymous">
	<link rel="stylesheet" href="style.css">
  </head>
  <body>
    <div id="b">
    <div id="box">
    <form class="" action="" method="post" autocomplete="off" enctype="multipart/form-data">
      <label for="name">Name : </label>
      <input type="text" name="name" id = "text" required value=""> <br>
      <label for="name">Qulity : </label>
      <input type="text" name="qulity" id = "text" required value=""> <br>
      <label for="name">Price : </label>
      <input type="text" name="price" id = "text" required value=""> <br>
      <label for="name">Description : </label>
      <input type="text" name="description" id = "text" required value=""> <br>
      <label for="image">Image : </label>
      <input type="file" name="image" id = "image" accept=".jpg, .jpeg, .png" value=""> <br> <br>
      <button id="button" type = "submit" name = "submit">Submit</button>
    </form>
    <br>
    <a href="index.php">Home</a>
  </div>
  </div>
  </body>
</html>

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
