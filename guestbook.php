<h1>Libro de visitas</h1>
<div style="height:85%; width:100%; overflow:auto;">
<form id="guestForm">
	<label for="from">De: </label><input id="from" type="text"></input>
	<p>Mensaje: </p><div><textarea id="guestMenssage" cols="80%" rows="4"></textarea></div>
	<div id="guestAlert"></div>	
	<input type="button" onClick="setGuestBook();" value="Publicar" ></input>
</form>
<div id="book"></div>
</div>
<script>
	$(document).ready(function(){
		getGuestBook();
	});

	function setGuestBook(){
		var from = $("#from")[0].value;
		var texto = $("#guestMenssage")[0].value;
		
		if(from =='' || texto == ''){
			mostrarMensaje("Por favor llene todos los datos");
			return false;
		}

		$.post("ajax/setBook.php", {texto: texto, from: from}, function(){
			$("#guestForm").each(function(){this.reset();});
			getGuestBook();
		});

		$.post('ajax/mainContact.php', {from: 'system@chr-notification.com', about: 'Nuevo mensaje en Libro de Visitas.', menssage: from+' -> '+texto},function(data, stat){
                        console.log(stat);
                        if(data == "00"){
                                console.log("El mensaje fue enviado correctamente.");
                        }else{
                                console.log("No fue posible enviar el mensaje. Intentelo mas tarde.");
                        }
                        
                });
	}

	function getGuestBook(){
		$("#book").load("ajax/getBook.php");
	}
	function mostrarMensaje(mensaje){
		$("#guestAlert").html(mensaje);
		$("#guestAlert").show();
		$("#guestAlert").fadeOut(6000);
	}
</script>
