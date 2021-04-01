<!DOCTYPE html>
<html>
<head>
	<title>Adolfo</title>
</head>
<body>


	<!--Hey dos tipos de method y son GET y POST por defecto es GET-->
	<form>
		<label for="id_numero_1">Esto es un input en donde se va a colocar un numero</label>
		<!--el nombre de este input es -->
		<input type="text" name="numero_1" id="id_numero_1" placeholder="Coloque un Numero">
		<br>
		<br>
		<label for="id_numero_2">Esto es un input en donde se va a colocar un numero</label>
		<input type="text" name="numero_2" id="id_numero_2" placeholder="Coloque un Numero">
		<br>
		<br>
		<?php
			if (isset($_GET['sumar'])) 
			{
				$numero1=$_GET['numero_1'];
				$numero2=$_GET['numero_2'];
				$suma=$numero1+$numero2;
				echo $suma;
			}

		?>
		<br>
		<input type="submit" name="sumar" value="sumar" id="mi_sumar">
	</form>
</body>
</html>