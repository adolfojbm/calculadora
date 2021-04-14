const botonNumeros = document.getElementsByName("data_number");

const botonOpera = document.getElementsByName("data_opera");

const botonDelete = document.getElementsByName("data_delete")[0];

const botonDelete = document.getElementsByName("data_letras");
var opeActual = "";
var opeAnterior ="";
var operacion = undefined;

function selectOperacion(op){

	 if (opeActual == "") return;

	 if (opeAnterior != ""){
 		
 		}
 	
 	operacion = op.toString();
 	opeAnterior = opeActual;
 	opeActual = "";
	}

botonNumeros.forEach(function(boton){
	boton.addEventListener("click",function(){
		agregaNumeros(boton.innerText);
	})
});

botonOpera.forEach(function(boton){
	boton.addEventListener("click",function(){
		selectOperacion(boton.innerText);
	})
});

botonDelete.addEventListener("click", function(){
	clear();
	actualizarDisplay();
	});

function clear(){
	opeActual = "";
	opeAnterior = "";
	operacion = undefined;