<body bgcolor=orange>
<div style="width:50%; margin:0 auto; border: 2px double #FF0000; background-color: white; box-shadow: 1px 1px 10px 1px;">
	<h3 align="center">Add New Item</h3>
	<form action="" method="post">
		<fieldset>
			<div style="padding: 10px; text-align: center;">
				<input type="text" name="pnm" value="" placeholder="Enter Item Name" style="padding:5px; width:90%">
				
			</div>
			
			<div style="padding: 10px; text-align: center;">
				<input type="text" name="price" value="" placeholder="Enter Price" style="padding:5px; width:90%">
				
			</div>
				<div style="padding: 10px; text-align: center;">
				<textarea name="detail" value="" cols="5" placeholder="Enter Item deteails" style="padding:5px; width:90%"></textarea> 
				
			</div>
			<div style="padding: 10px; text-align: center;">
				<input type="submit" name="ins" value="INSERT NOW"  style="padding:5px; width:50%">
				
			</div>
		</fieldset>
	</form>
<?php

if(isset($_POST['ins']))
{
	//connection
	$con = mysqli_connect("localhost","root","","userdb");
	//variable pass
	$p = $_POST['pnm'];
	$pr = $_POST['price'];
	$det = $_POST['detail'];	
	
	//insert
	mysqli_query($con,"inser into product(pname,price,detail) values('$p','$pr','$det')");

   

}
?>
</div>	