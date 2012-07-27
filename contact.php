<h1>Contacto</h1>
<p>Para nosotros sus opiniones o sugerencias acerca del diseño de la pagina, su contenido o cualquier cosa, es de gran importancia. Por favor deje sus comentarios y en lo posible le responderemos prontamente.</p>

<form id="formEmail">
	<p>Email:</p><input id="from_contact" type="text" style="width:300px"></input>
	<p>Asunto:</p><input id="about_contact" type="text" style="width:300px"></input>
	<p>Mensaje: <p><div><textarea id="menssage_contact" cols="80%" rows="10"></textarea></div>
</form>
<div id="mensaje_contact"></div>
<div><button onclick="validaForm();">Enviar</button></div>


<script>
	function validaForm(){
		var from = $("#from_contact")[0].value;
		var about = $("#about_contact")[0].value;
		var menssage = $("#menssage_contact")[0].value;

		//valida mail
		var filter = /[\w-\.]{3,}@([\w-]{2,}\.)*([\w-]{2,}\.)[\w-]{2,4}/;

		if(!filter.test(from)){
			mostrarMensaje('Por favor ingrese un correo electronico valido');
			return false;
		}
		if(about == ''){
			mostrarMensaje('Por favor ingrese asunto');
			return false;
		}
		if(menssage == ''){
			mostrarMensaje('No olvide ingresar el mensaje');
			return false;
		}
		$.post('ajax/mainContact.php', {from: from, about: about, menssage: menssage},function(data, stat){
			console.log(stat);
			if(data == "00"){
				$("#formEmail").each(function(){this.reset();});
                        	mostrarMensaje("El mensaje fue enviado correctamente.");
			}else{
                        	mostrarMensaje("No fue posible enviar el mensaje. Intentelo mas tarde.");
			}
			
		});
	}

	function mostrarMensaje(mensaje){
		$("#mensaje_contact").html(mensaje);
		$("#mensaje_contact").show();
		$("#mensaje_contact").fadeOut(6000);
	}
</script>
