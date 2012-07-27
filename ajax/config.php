<?
	//menu principal
	$mainMenu=array('<img src="imagenes/boton_inicio.png" style="height:35px; float:left;">&mainPage.php');

	//galeria
	$galeria=array(
			'<img src="imagenes/boton_galeria.png" style="height:35px; float:left;">&galeria.php',
			'<img src="imagenes/boton_pinturas.png" style="height:35px; float:left;">&galeriaPinturas.php',
			'<img src="imagenes/boton_grabados.png" style="height:35px; float:left;">&galeriaGrabados.php',
			'<img src="imagenes/boton_dibujos.png" style="height:35px; float:left;">&galeriaDibujos.php'
	);

	//menu about
	$aboutMenu=array(
			'<img src="imagenes/boton_contacto.png" style="height:35px; float:left;">&contact.php',
			'<img src="imagenes/boton_acercadenosotros.png" style="height:35px; float:left;">&aboutPage.php',
			'Libro de visitas&guestbook.php'
	);

	//menu biografia
	$biografia=array(
			'<img src="imagenes/boton_biografia.png" style="height:35px; float:left;">&biografia.php',
			'<img src="imagenes/boton_conmemoraciones.png" style="height:35px; float:left;">&conmemoraciones.php'
	);

	//se agregan los menus al arreglo principal

	$menuArray=array($mainMenu,$galeria,$biografia,$aboutMenu);

	echo json_encode($menuArray);
?>
