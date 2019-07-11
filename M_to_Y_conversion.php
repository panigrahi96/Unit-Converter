<html>
<head>
<link rel="stylesheet" type="text/css" href="css/size.css">

<title>Meter to Yard and Yard to Meter Unit Converter</title>

</head>
<body>
<h1>Meter To Yard and Yard To Meter Converter</h1>

<form action="" method="POST">
Meter: <input type="text" name="unitmeter" value="<?php 
if(isset($_POST['Y_to_M']))
{
	    $meter = $_POST['unityard'];
		$yd = $meter * 1.0936;
		echo $yd;
		
		
}
?>"></br></br></br>
Yard: <input type="text" name="unityard" value="<?php 

if(isset($_POST['M_to_Y']))
{
	    $yard = $_POST['unitmeter'];
		$m = $yard/1.0936;
		echo $m;
}
?>"></br></br>
<input type="submit" value="Meter To Yard" name="M_to_Y"></br></br>
<input type="submit" value="Yard To Meter" name="Y_to_M">

</form>
</body>
</html>