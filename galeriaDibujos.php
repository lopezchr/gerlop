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

<div class="maingallery">
	<div class="galleryImage"></div>
	<div class="topgallery"><a href="#"><img src="imagenes/iconocerrar.png" style="float:left;"></a></div>
	<a href="#"><div class="leftgallery"><img src="imagenes/flechaizquierda.png" style="float:left;"></div></a>
	<a href="#"><div class="rightgallery"><img src="imagenes/flechaderecha.png" style="float:right;"></div></a>
	<div class="bottomgallery">
		<table class="gallerymenu" width="100%" border="0">
			<tr>
				<td align="center"><img src="imagenes/gopanel.png" style="opacity:0.1"></td>
			</tr>
			<tr class="miniaturasGaleria">
				<td>
					<div class="visor" width=100%>
						<div class="contenedor">
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
					<div class="minigallery_goleft"><img src="imagenes/flechaizquierda.png" style="float:left;"></div>
					<div class="minigallery_goright"><img src="imagenes/flechaderecha.png" style="float:right;"></div>
				</td>
			</tr>
		</table>
	</div>
</div>
