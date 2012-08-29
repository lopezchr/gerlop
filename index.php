<!DOCTYPE html>
<html>
<head>
        <meta name="fragment" content="!">
        <meta charset="UTF-8">
	<title>GerLop.</title>
	<link rel="stylesheet" type="text/css" href="estilo.css" />
	<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.8.0/jquery.min.js"></script>	
	<script type="text/javascript" src="JS/my_jquery_functions.js"></script>
	<script type="text/javascript" src="JS/menufunctionality.js"></script>
</head>
<body>
	<div id="menuSuperior"></div>

	<div id=contenedor style="width:auto; margin-top:10px">
		<div id="menuLateral"></div>
		<div id="contenido">
			<div id="titulo"><h1>Luis German López Ojeda, de la ciencia al arte.</h1></div>
			<div>
				<div style="float:left; width:40%; margin:10px;">
					<p>Pintor colombiano destacado por su labor como Dibujante Botánico y Artista. Su trabajo ha sido un proceso investigativo continuo a través de la forma con base en la disciplina del dibujo. Sus logros juegan a través del espacio perspectiva y magia produciendo sensaciones nuevas para el admirador de la realidad y la fantasía.</p>
			<p>Su incursión en el dibujo ha sido de gran productividad y grandes logros no solo por su agilidad y destreza sino por su creatividad, cualidad indispensable para dar vida a las imágenes que a veces nuestros ojos no alcanzan a captar.</p>
			<p>Los resultados lo han llevado a descubrir un mundo de diferentes dimensiones siempre unido a lo real por un hilo que liga lo onírico con la vida común, haciendo de esta forma más atractiva su obra. De esta manera su aporte a la plástica ha sido productiva por su versatilidad y espontaneidad que se demuestran el dominio de la técnica y facilidad de trazo,  logrando  imprimir gran energía en sus obras.</p>
				</div>
				<div style="float:left; width:40%; margin:10px;">
					<td><img src="imagenes/portada.jpg" height="400px"></td>
				</div>
			</div>
		</div>
	</div>
	
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
							<div class="contenedor" id="contMiniaturas">
							</div>
						</div>
						<div class="minigallery_goleft"><a href="#"><img src="imagenes/flechaizquierda.png" style="float:left;"></a></div>
						<div class="minigallery_goright"><a href="#"><img src="imagenes/flechaderecha.png" style="float:right;"></a></div>
					</td>
				</tr>
			</table>
		</div>
	</div>

	<script type="text/javascript">
		var arraypage='';
	</script>
</body>
 
			
