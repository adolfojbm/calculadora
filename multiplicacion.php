<!DOCTYPE html>
<html>
<head>
	<title>Adolfo_multiplicacion</title>
</head>
<body>

<form>
	<!------------------------primer imput------------------------------->
	<lable for="id_numero_1">cantidad</lable>
	
	<select name="multiplo_1">
		<option value="0">0</option>
		<option value="1">1</option>
		<option value="2">2</option>
		<option value="3">3</option>
		<option value="4">4</option>
		<option value="5">5</option>
		<option value="6">6</option>
		<option value="7">7</option>
		<option value="8">8</option>
		<option value="9">9</option>
	</select>
	<br>
	<!------------------------segundo imput------------------------------->
	<lable for="id_numero_2">cantidad</lable>


	<select name="multiplo_2">
		<option value="0">0</option>
		<option value="1">1</option>
		<option value="2">2</option>
		<option value="3">3</option>
		<option value="4">4</option>
		<option value="5">5</option>
		<option value="6">6</option>
		<option value="7">7</option>
		<option value="8">8</option>
		<option value="9">9</option>
		
	</select>
	<br>
		
	
	<!--------------------------------------------------------------------->
	<label for="suma">Suma</label>
	<input type="radio" id="suma" name="operacion" value="+">

	<label for="resta">resta</label>
	<input type="radio" id="resta" name="operacion" value="-">

	<label for="multiplicacion">multiplicacion</label>
	<input type="radio" id="multiplicacion" name="operacion" value="*">

	<label for="division">division</label>
	<input type="radio" id="division" name="operacion" value="/">

	<!-------------------------------------->
	<?php
		$texto=$_GET['valores'];
		$texto="12+5+3+4";

		$porciones = explode("+", $texto);
		$suma=0;
		for ($i=0; $i < count($porciones)  ; $i++) 
		{ 	
			$suma=$suma+intval($porciones[$i]);
		}
		echo $suma;

		if (isset($_GET['multiplicar'])) 
		{
			if($_GET['operacion']=="+")
			{
				$numero1=$_GET['multiplo_1'];
				$numero2=$_GET['multiplo_2'];
				$multiplica=$numero1+$numero2;	
			
			echo $multiplica;
			}

			if($_GET['operacion']=="-")
			{
				$numero1=$_GET['multiplo_1'];
				$numero2=$_GET['multiplo_2'];
				$multiplica=$numero1-$numero2;	
			
			echo $multiplica;
			}
			if($_GET['operacion']=="*")
		    {
			
				$numero1=$_GET['multiplo_1'];
				$numero2=$_GET['multiplo_2'];
				$multiplica=$numero1*$numero2;	
			
			echo $multiplica;
			}

			if($_GET['operacion']=="/")
		    {
			
				$numero1=$_GET['multiplo_1'];
				$numero2=$_GET['multiplo_2'];
				$multiplica=$numero1/$numero2;	
			
			echo $multiplica;
			}

		}
	?>
		<input type="submit" name="multiplicar" value="buscar" id="mi multiplicar">
	</form>
</body>
</html>