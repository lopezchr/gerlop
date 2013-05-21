<?
	require_once("configGaleria.php");
	$imagenes=$galeriaPrincipal;
	$long=count($imagenes)*170;
?>

<div>
	<div><h1>Galeria Principal</h1></div>
	<div><p>Galeria de imagenes Principal</p></div>
	<div id="galeria" class="gallery" align="center">
		<?
		$count=0;
		foreach($imagenes as $img){?>
			<a href="#">
				<div id="imgGallery_<?=$count?>" class="imgContainer" onClick="showimage('<?=$img?>')">
					<img src=<?=$img?> />
				</div>
			</a>
			<?
			$count++;
		}?>
	</div>
</div>
<script>
	var imgAry = eval(<?=json_encode($imagenes)?>);
</script>
<input type="hidden" id="countImg"/>
<script type="text/javascript" src="js/galleryfunctionality.js"></script>

