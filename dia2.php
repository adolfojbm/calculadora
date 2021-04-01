<?php
		$A=0;
		$B=0;
	if (isset($_GET['mas']))
		{
			$A=$_GET['A'];
			$B=$_GET['B'];
			$C=$A+$B;
			echo "el resultado es ".$C;

		}

	if (isset($_GET['menos']))
		{
			$A=$_GET['A'];
			$B=$_GET['B'];
			$C=$A-$B;
			echo "el resultado es ".$C;
		}
	if (isset($_GET['multiplicar']))
		{
		$A=$_GET['A'];
		$B=$_GET['B'];
		$C=$A*$B;
		echo "el resultado es ".$C;

		}

	if (isset($_GET['dividir']))
		{
		$A=$_GET['A'];
		$B=$_GET['B'];
		$C=$A/$B;
		echo "el resultado es ".$C;
		}
	if (isset($_POST['funcion'])) 
	{
		require_once'php/funcion_adolfo.php';
		$nuevaClase=(new matematicas);
		echo( $nuevaClase->multi($_POST['funA'],$_POST['funB']) );
	}
?>
<!DOCTYPE html>
<html>
<head>
	<title>dia2</title>
</head>
<body>
	<form method="GET">
		<input type="text" name="A">
		<input type="text" name="B">
		<input type="submit" name="mas" value="+">
		<input type="submit" name="menos" value="-">
		<input type="submit" name="multiplicar" value="*">
		<input type="submit" name="dividir" value="/">
	</form>
	<br>
	<form method="POST">
		<input type="text" name="funA">
		<input type="text" name="funB">
		<input type="submit" name="funcion" value="utiliza la funcion suma en php">
	</form>
</body>
</html>