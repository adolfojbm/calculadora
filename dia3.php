<!DOCTYPE html>
<html>
<head>
	<title>calculadora_4</title>
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
</head>
<body>
	<form method="GET">
	<div class="card" style="width: 18rem;">
	<div class="card-body">
	    <h5 class="card-title">Calculadora</h5>
	    <div class="row">
	    	<div class="col-12"style="padding:0">
		    	<input type="text" name="texto" value="0" style="width: 100%;">
		    	<input type="text" name="texto1" value="0" style="width: 100%;">
		    	<input type="" name="siete" value="7">
		    </div>
		    <div class="col-3" style="padding:0">										
		    	<input id="siete"  type="button" name="siete" value="7" style="width: 100%;">
		    	<input id="cuatro"  type="button" name="cuatro" value="4" style="width: 100%;">
		    	<input id="uno"  type="button" name="uno" value="1" style="width: 100%;">
		    	<input id="cero"  type="button" name="cero" value="0" style="width: 100%;">
		    </div>
		    <div class="col-3" style="padding:0">
		    	<input id="ocho"  type="button" name="ocho" value="8" style="width: 100%;">
		    	<input id="cinco"  type="button" name="cinco" value="5" style="width: 100%;">
		    	<input id="dos"  type="button" name="dos" value="2" style="width: 100%;">
		    	<input id="punto"  type="button" name="punto" value="." style="width: 100%;">
		    </div>
		    <div class="col-3" style="padding:0">
		    	<input id="nueve"  type="button" name="nueve" value="9" style="width: 100%;">
		    	<input id="seis"  type="button" name="seis" value="6" style="width: 100%;">
		    	<input id="tres"  type="button" name="tres" value="3" style="width: 100%;">
		    	<input id="mas"  type="button" name="mas" value="+" style="width: 100%;">
		    </div>		   
		   	<div class="col-3" style="padding:0">	
		     <input id="dividir" type="button" name="dividir" value="/" style="width: 100%;">
		     <input id="por"type="button" name="por" value="*" style="width: 100%;">
		     <input id="menos"type="button" name="menos" value="-" style="width: 100%;">		         
		     <input id="igual"type="button" name="igual" value="=" style="width: 100%;">
		    </div>	
	    
	    </div>
  </div>
</div>

	</form>
<?php	
		$A=0;
		$B=0;	
			

	if (isset($_GET ["mas"]))
	{
		$A=$_GET["A"];
		$B=$_GET["B"];
		$F=$A+$B;
		echo "EL RESULTADO ES ".$F;
	}
	if (isset($_GET ["menos"]))
	{
		$A=$_GET["A"];
		$B=$_GET["B"];
		$F=$A-$B;
		echo "EL RESULTADO ES ".$F;
	}
	if (isset($_GET ["por"]))
	{
		$A=$_GET["A"];
		$B=$_GET["B"];
		$F=$A*$B;
		echo "EL RESULTADO ES ".$F;
	}
	if (isset($_GET ["dividir"]))
	{
		$A=$_GET["A"];
		$B=$_GET["B"];
		$F=$A/$B;
		echo "EL RESULTADO ES ".$F;
	
	}
?>

</body>
</html>