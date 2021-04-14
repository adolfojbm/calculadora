




const botonNumeros = document.getElementsByName("data_number");
const botonOpera = document.getElementsByName("data_opera");
const botonDelete = document.getElementsByName("data_delete")[0];
const botonIgual = document.getElementsByName("data_igual")[0];
var result = document.getElementById("result");
var opeActual = "";
var opeAnterior ="";
var operacion = undefined;


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

botonIgual.addEventListener("click",function(){
	calcular();
	actualizarDisplay();
});

botonDelete.addEventListener("click", function(){
	clear();
	actualizarDisplay();
});


function selectOperacion(op){

	 if (opeActual == "") return;

	 if (opeAnterior != ""){
 		calcular();
 		

 		}
 	
 	operacion = op.toString();
 	opeAnterior = opeActual;
 	opeActual = "";
	}

function calcular(){
	var calculo;
	const anterior = parseFloat(opeAnterior);
	const actual = parseFloat (opeActual);
		

	if (isNaN(anterior) || isNaN(actual)) return;
	switch(operacion)
	{ 
		case "+":
			calculo = anterior + actual;
			break;
			alert(anterior);
		case "-":
			calculo = anterior - actual;
			break;
		case "*":
			calculo = anterior * actual;
			break
		case "/":
			calculo = anterior / actual;
			break;
		default:
			return;
				}
		}
function agregaNumeros(num){
	opeActual = opeActual.toString() + num.toString();
	actualizarDisplay();
	};

function clear(){
	opeActual = "";
	opeAnterior = "";
	operacion = undefined;

	};

function actualizarDisplay(){
	result.value = opeActual;

};

clear();	

