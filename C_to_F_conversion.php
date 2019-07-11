<html>
<head>
<link rel="stylesheet" type="text/css" href="Temparature.css">

<title>Celsius to Fahrenheit and Fahrenheit to Celsius Unit Converter</title>

</head>
<body>
<h1>Celsius To Fahrenheit and Fahrenheit To Celsius Converter</h1>

<form action="" method="POST">
Celsiusius: <input type="text" name="unitcel" value="<?php 
if(isset($_POST['F_to_C']))
{
	    $unit2 = $_POST['unitfahr'];
		$cel = ($unit2 - 32)*(5/9);
		echo $cel;
		
}
?>"></br></br></br>
Fahrenheit: <input type="text" name="unitfahr" value="<?php 

if(isset($_POST['C_to_F']))
{
	    $unit1 = $_POST['unitcel'];
		$fahr = ($unit1 * (9/5))+32;
		echo $fahr;
}
?>"></br></br>
<input type="submit" value="Celsius To Fahrenheit" name="C_to_F"></br></br>
<input type="submit" value="Fahrenheit To Celsius" name="F_to_C">

</form>
</body>
</html>