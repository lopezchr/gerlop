<?
	require_once("configGaleria.php");
	$imagenes=$galeriaPrincipal;
	$long=count($imagenes)*170;
?>
<script>
	var imgAry = eval(<?=json_encode($imagenes)?>);
</script>
<div>
	<div><h1>Galeria Principal</h1></div>
	<div><p>Galeria de imagenes Principal</p></div>
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
				<td align="center"><a href="#"><img id="showImagesImg" src="imagenes/gopanel.png" style="opacity:0.1"></a></td>
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
					<div class="minigallery_goleft"><a href="#"><img src="imagenes/flechaizquierda.png" style="float:left;"></a></div>
					<div class="minigallery_goright"><a href="#"><img src="imagenes/flechaderecha.png" style="float:right;"></a></div>
				</td>
			</tr>
		</table>
	</div>
</div>
