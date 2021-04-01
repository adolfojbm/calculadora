<!DOCTYPE html>
<html>
<head>
	<title>nueva calculadora</title>
</head>
<body>
	<form method="POST">
		<input type="submit" name="multiplicar">
		<input type="text" name="valores">
		
	</form> 
		<?php  
		if (isset($_POST["multiplicar"]))
		{
		echo ($_ POST["valores"]); 
		}
		?>
</body>
</html>




