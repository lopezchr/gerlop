<?
	require_once("configGaleria.php");
	$imagenes = $galeriaDibujos;
	$long=count($imagenes)*170;
?>
<script>
	var imgAry = eval(<?=json_encode($imagenes)?>);
</script>
<div>
	<div><h1>Dibujos</h1></div>
	<div><p>Galeria de dibujos.</p></div>
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

<input type="hidden" id="countImg"/>
<script type="text/javascript" src="js/galleryfunctionality.js"></script>
