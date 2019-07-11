<?php
if(isset($_POST['Temperature']))
{
	
}
if(isset($_POST['Weight']))
{
	header("Location:kg_to_pound.php");
}	
if(isset($_POST['Distance']))
{
	
}
?>
<html>
<title>Unit Converter</title>
<link rel="stylesheet" href="css/frontpage.css" type="text/css">
</head>
<body>
<div class="maindiv">
<div class="form_div">
<div class="title">
<h2>UNIT CONVERTER</h2>
</div>
<form action="" method="POST">
<input name="Temperature" type="submit" value="Temperature"><br><br>
<input name="Weight" type="submit" value="Weight" ><br><br>
<input name="Distance" type="submit" value="Distance"><br><br>
</form>
</div>
</div>
</body>
</html>