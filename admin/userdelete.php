<?php
$id = $_GET['i'];
//Connection

$con = mysqli_connect("localhost","root","","login_sample_db");
mysqli_query($con,"delete from users where id = '$id'");

//Afeter call to user view
header("location:userview.php");
?>