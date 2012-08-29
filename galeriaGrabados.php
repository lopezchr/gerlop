<?
	require_once("configGaleria.php");
	$imagenes=$galeriaGrabados;
	$long=count($imagenes)*170;
?>
<script>
	var imgAry = eval(<?=json_encode($imagenes)?>);
</script>
<div>
	<div><h1>Galeria Grabados</h1></div>
	<div><p>Galeria de grabados (en desarrollo)</p></div>
	<div id="galeria" class="gallery" align="center">
		<?
		$count=0;
		foreach($imagenes as $img){?>
			<a href="#">
				<div id="imgGallery_<?=$count?>" class="imgContainer">
					<img src=<?=$img?> />
				</div>
			</a>
			<?
			$count++;
		}?>
	</div>
</div>

<input type="hidden" id="countImg"/>
