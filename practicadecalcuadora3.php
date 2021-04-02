
<!DOCTYPE html>
<html>
<head>
	<title>practica3</title>
</head>
<body>
	<form method="GET">
		<input type="text" name="A"> <input type="submit" name="suma" value="+">
		<br>
		<br>
		<input type="text" name="B"> <input type="submit" name="resta" value="-">
		<br>
		<br>
		<input type="text" name="E"> <input type="submit" name="multiplicacion" value="*">
		<br>
		<br>
		<input type="text" name="D"> <input type="submit" name="dividir" value="/">
		<br>
		<br>
		<label class="container">
		<input type="text" name="C">
		<input type="submit" name="realizar">
		</label>
	</form>
</body>
</html>
<?php

		$A=0;
		$B=0;
		$D=0;
		$E=0;

	if (isset($_GET["suma"])) 
		{
			$A=$_GET["A"];
			$B=$_GET["B"];
			$D=$_GET["D"];
			$E=$_GET["E"];
			$F=$A+$B+$D+$E;
			echo "el resultado es".$F;
		}
	if (isset($_GET["resta"])) 
		{
			$A=$_GET["A"];
			$B=$_GET["B"];
			$D=$_GET["D"];
			$E=$_GET["E"];
			$F=$A-$B-$D-$E;
			echo "el resultado es".$F;
		}
	if (isset($_GET["multiplicacion"])) 
		{
			$A=$_GET["A"];
			$B=$_GET["B"];
			$D=$_GET["D"];
			$E=$_GET["E"];
			$F=$A*$B*$D*$E;
			echo "el resultado es".$F;
		}

	if (isset($_GET["dividir"])) 
		{
			$A=$_GET["A"];
			$B=$_GET["B"];
			$D=$_GET["D"];
			$E=$_GET["E"];
			$F=$A/$B/$D/$E;
			echo "el resultado es".$F;
		}
	if (isset($_GET["realizar"]))
		{
	if ($_GET['C']=='+') 
			{
				$A=$_GET["A"];
				$B=$_GET["B"];
				$D=$_GET["D"];
				$E=$_GET["E"];
				$F=$A+$B+$D+$E;
			echo "el resultado es".$F;}

	if ($_GET['C']=='-') 
			{
				$A=$_GET["A"];
				$B=$_GET["B"];
				$D=$_GET["D"];
				$E=$_GET["E"];
				$F=$A-$B-$D-$E;
			echo "el resultado es".$F;}

	if ($_GET['C']=='*') 
			{
				$A=$_GET["A"];
				$B=$_GET["B"];
				$D=$_GET["D"];
				$E=$_GET["E"];
				$F=$A*$B*$D*$E;
			echo "el resultado es".$F;}

	
	if ($_GET['C']=='/') 
			{
				$A=$_GET["A"];
				$B=$_GET["B"];
				$D=$_GET["D"];
				$E=$_GET["E"];
				$F=$A/$B/$D/$E;
			echo "el resultado es".$F;

			}
		}
?>