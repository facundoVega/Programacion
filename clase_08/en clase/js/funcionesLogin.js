function validarLogin()
{
		var varUsuario=$("#correo").val();
		var varClave=$("#clave").val();
		var recordar=$("#recordarme").is(':checked');
		
$("#informe").html("<img src='imagenes/ajax-loader.gif' style='width: 30px;'/>");
	

	$.ajax({

		url:"php/validarUsuario.php",
		type:"post",
	    data:{usuario:varUsuario,clave:varClave,recordarme:recordar}

	}).then(funcionUno,funcionDos);
	
	function funcionUno(retorno){

				if(retorno){	

					MostarBotones();
					MostarLogin();

					$("#BotonLogin").html("Ir a salir<br>-Sesión-");
					$("#BotonLogin").addClass("btn btn-danger");				
					$("#usuario").val("usuario: "+retorno);

				}else
				{
					$("#informe").html("usuario o clave incorrecta");	
					$("#formLogin").addClass("animated bounceInLeft");
				}
		
		
	}
	function funcionDos(retorno){
		
			$("#botonesABM").html(":(");
			$("#informe").html(retorno.responseText);
		
	}
		

	
}
function deslogear()
{	
	
	//	url:"php/deslogearUsuario.php",
	//	type:"post"		

}
function MostarBotones()
{	
	//	url:"nexo.php",
	//	type:"post",
	//	data:{queHacer:"MostarBotones"}


	$.ajax({

		url:"nexo.php",
		data:{queHacer:"MostarBotones"},
		type:"post"

	}).then(funcionUno,funcionDos);
	
	function funcionUno(retorno){
		MostarBotones();
	}
	function funcionDos(retorno){
		
		console.log("error");
	}

}
