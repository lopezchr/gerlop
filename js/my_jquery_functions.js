$(document).on("ready", evento);
function evento(ev){
	$(document).load('ajax/config.php', function(data){
		if(data){
			arraypage=data;
			//carga funcion en /js/menufunctionality
			loadUserMenu();
		}else{
			goPage('errorPage.php?&mensaje="No fue posible cargar los menus"');
		}
	});
}
