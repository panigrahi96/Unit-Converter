
<html>
<head>
<link rel="stylesheet" type="text/css" href="css/Temparature.css">

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
		
		
$link = mysqli_connect("localhost", "root", "", "exam");
 
// Check connection
if($link === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}
 
 // Attempt create table  query execution

 $queryCreateUsersTable = "CREATE TABLE IF NOT EXISTS `Temperature` (
    `Temperature_in_Celcious` varchar(255) NOT NULL,
    `Temperature_in_Fahrenheit` varchar(255) NOT NULL
)";
 
if(mysqli_query($link, $queryCreateUsersTable)){
// Attempt insert query execution
$sql = "INSERT INTO Temperature (Temperature_in_Celcious, Temperature_in_Fahrenheit) VALUES ('$cel', '$unit2')";

if(!mysqli_query($link, $sql)){
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
}
 
// Close connection
mysqli_close($link);
}
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