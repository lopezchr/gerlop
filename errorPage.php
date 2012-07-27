<?
	$mensaje=isset($_GET['mensaje'])?$_GET['mensaje']:'';

?>

<div align=center style="margin-top:100">
	<img src="imagenes/errorImage.png">
	<div style="margin: 30px"><strong>La pagina no pudo ser cargada, no existe o quisas este en construccion.<strong></div>
	</br><?=$mensaje?>
</div>
