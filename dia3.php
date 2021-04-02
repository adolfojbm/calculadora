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
	    	<div class="col-12">
		    	<input type="text" name="texto" value="0" style="width: 100%;">
		    </div>
		    <div class="col-3">										
		    	<input type="button" name="siete" value="7" style="width: 100%;">
		    	<input type="button" name="cuatro" value="4" style="width: 100%;">
		    	<input type="button" name="uno" value="1" style="width: 100%;">
		    	<input type="button" name="cero" value="0" style="width: 100%;">
		    </div>
		    <div class="col-3">
		    	<input type="button" name="ocho" value="8" style="width: 100%;">
		    	<input type="button" name="cinco" value="5" style="width: 100%;">
		    	<input type="button" name="dos" value="2" style="width: 100%;">
		    	<input type="button" name="punto" value="." style="width: 100%;">
		    </div>
		    <div class="col-3">
		    	<input type="button" name="nueve" value="9" style="width: 100%;">
		    	<input type="button" name="seis" value="6" style="width: 100%;">
		    	<input type="button" name="tres" value="3" style="width: 100%;">
		    	<input type="button" name="mas" value="+" style="width: 100%;">
		    </div>		   
		   	<div class="col-3">	
		     <input type="button" name="dividir" value="/" style="width: 100%;">
		     <input type="button" name="por" value="*" style="width: 100%;">
		     <input type="button" name="menos" value="-" style="width: 100%;">		         
		     <input type="button" name="igual" value="=" style="width: 100%;">
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
		$C=$_GET["C"];
		$D=$_GET["D"];
		$F=$A+$B+$C+$D;
		echo "EL RESULTADO ES ".$F;
	}
	if (isset($_GET ["menos"]))
	{
		$A=$_GET["A"];
		$B=$_GET["B"];
		$C=$_GET["C"];
		$D=$_GET["D"];
		$F=$A-$B-$C-$D;
		echo "EL RESULTADO ES ".$F;
	}
	if (isset($_GET ["por"]))
	{
		$A=$_GET["A"];
		$B=$_GET["B"];
		$C=$_GET["C"];
		$D=$_GET["D"];
		$F=$A*$B*$C*$D;
		echo "EL RESULTADO ES ".$F;
	}
	if (isset($_GET ["dividir"]))
	{
		$A=$_GET["A"];
		$B=$_GET["B"];
		$C=$_GET["C"];
		$D=$_GET["D"];
		$F=$A/$B/$C/$D;
		echo "EL RESULTADO ES ".$F;

	}
?>

</body>
</html>