
function MostrarError()
{
	alert("error");
	//url:"nexoNoExiste.php",type:"post"
	$.ajax({
		url:"nexoNoExiste.php"
	}).then(funcionUno,funcionDos);
	
	function funcionUno(retorno){
		//console.info(retorno);
		console.log("funcionUno");
	}
	function funcionDos(retorno){
		//console.info(retorno);
		console.log("funcionDos");
		$("#informe").html("<p>Error</p>"); //(retorno.responseText

	}
}
function MostrarSinParametros()
{
	//url:"nexoTexto.php"});

	
}

function Mostrar(queMostrar)
{
		alert(queMostrar);
	
		//url:"nexo.php",
		//type:"post",

		$.ajax({
		url:"nexo.php",
		data:"queHacer",
		type:"post"
	}).then(funcionUno,funcionDos);
	
	function funcionUno(retorno){
		$("#principal").html(retorno.responseText);
	}
	function funcionDos(retorno){
		
		
	}
	
}

/*
function MostarLogin() // esta ok original
{
		//alert(queMostrar);
	var funcionAjax=$.ajax({
		url:"nexo.php",
		type:"post",
		data:{queHacer:"MostarLogin"}
	});
	funcionAjax.done(function(retorno){
		$("#principal").html(retorno);
		$("#informe").html("Correcto Form login!!!");	
	});
	funcionAjax.fail(function(retorno){
		$("#botonesABM").html(":(");
		$("#informe").html(retorno.responseText);	
	});
	funcionAjax.always(function(retorno){
		//alert("siempre "+retorno.statusText);

	});
}
*/

function MostarLogin() // esta ok otra manera
{

	$.ajax({

		url:"nexo.php",
		type:"post",
		data:{queHacer:"MostarLogin"}

	}).then(funcionUno,funcionDos);
	
	function funcionUno(retorno){

		$("#principal").html(retorno);
		$("#informe").html("Correcto Form login!!!");	
		
	}
	function funcionDos(retorno){
		
		$("#botonesABM").html(":(");
		$("#informe").html(retorno.responseText);	
		
	}

}