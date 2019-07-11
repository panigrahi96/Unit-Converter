<!DOCTYPE html>
<html>
<head>
<title>Weight Conversion</title>
<link rel="stylesheet" href="css/kg_to_pound.css" type="text/css">
</head>
<body>
<div class="maindiv">
<!--HTML Form -->
<div class="form_div">
<div class="title">
<h1>WEIGHT CONVERSION</h1>
</div>
<form action="" method="POST">
<!-- Method can be set as POST for hiding values in URL-->
<label>Wieght in Kg:</label>
<input class="input" name="inputkg" type="text" value="<?php 
if(isset($_POST['pound_to_kg']))
{
	$input_pound = $_POST['inputpound'];
	$kg=($input_pound/2.2046);
	echo $kg;
}?>"><br><br>
<label>Weight in Pound:</label>
<input class="input" name="inputpound" type="text" value="<?php
if(isset($_POST['kg_to_pound']))
{
	$input_kg = $_POST['inputkg'];
	$pound=($input_kg*2.2046);
	echo $pound;
}?>"><br><br>
<input name="kg_to_pound" type="submit" value="KG TO POUND">
<input name="pound_to_kg" type="submit" value="POUND TO KG">
</form>
</div>
</div>
</body>
</html>