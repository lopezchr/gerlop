$(document).ready(function(){
	$(document).load('ajax/config.php', function(data){
		if(data){
			arraypage=data;
			loadUserMenu();
		}else{
			goPage('errorPage.php?&mensaje="No fue posible cargar los menus"');
		}
	});

	$(document).on("click","div.imgContainer",
		function(){
			//extraigo el contadorde la imagen
			var imgcount = $("img",this)[0].parentNode.id.split("_")[1];
			$("#countImg").val(imgcount);
			//rxtraigo la url de la imagen
			var url=$("img",this)[0].attributes[0].nodeValue;
			$("div.maingallery").css({"z-index":100,"display":"inline"});
			showimage(url);
		}
	);
	function showimage(url){
		$("div.galleryImage").html('<img src='+url+' style="float:left; display:;"/>');
		var altoDiv= $("div.galleryImage")[0].clientHeight;
		var anchoDiv= $("div.galleryImage")[0].clientWidth;

		var altoImg= $("div.galleryImage img")[0].height;
		var anchoImg= $("div.galleryImage img")[0].width;

		var relationDiv = altoDiv/anchoDiv;
		var relationImg = altoImg/anchoImg;
	
		var oper = relationDiv - relationImg;

		if(oper >= 0){
			//se redimenciona la imagen a lo ancho del div
			if(anchoDiv < anchoImg){
				$("div.galleryImage img").css({"width":"100%","height":"auto"});
			}
		}else{
			//se redimenciona la imagen a lo alto del div
			if(altoDiv < altoImg){
				$("div.galleryImage img").css({"width":"auto","height":"100%"});
			}
		}
		//se centra la imagen en la pantalla con las nuevas dimenciones

		altoImg = $("div.galleryImage img")[0].height;
		anchoImg = $("div.galleryImage img")[0].width;

		var left = (anchoDiv - anchoImg)/anchoDiv/2*100;
		var up = (altoDiv - altoImg)/altoDiv/2*100;

		$("div.galleryImage img").css({"top":up+"%","left":left+"%"});
	}

	$(document).on("click","div.maingallery div.topgallery",
		function(){
			$("div.maingallery").css({"z-index":-1,"display":"none"});
	});

//funciones que para abrir y ocultar el panel de miniaturas en la galeria
	$(document).on("click","table.gallerymenu",function(){
		$("tr.miniaturasGaleria").slideDown(500,function(){
			$("tr.miniaturasGaleria td div").fadeIn(500);
		});
	});
	$(document).on("mouseleave","table.gallerymenu",function(){
		$("tr.miniaturasGaleria td div").fadeOut(500,function(){
			$("tr.miniaturasGaleria").slideUp(500);
		});
	});
//funcion que esconde los botones de la galeria
	$(document).on("mouseenter","table.gallerymenu",function(){
		$("#showImagesImg").fadeTo("slow",1.0);
	});
	$(document).on("mouseleave","table.gallerymenu",function(){
		$("#showImagesImg").fadeTo("slow",0.1);
	});
	$(document).on("mouseenter","div.rightgallery",function(){
		$("div.rightgallery img").fadeTo("slow",1.0);
	});
	$(document).on("mouseleave","div.rightgallery",function(){
		$("div.rightgallery img").fadeTo("slow",0.1);
	});
	$(document).on("mouseenter","div.leftgallery",function(){
		$("div.leftgallery img").fadeTo("slow",1.0);
	});
	$(document).on("mouseleave","div.leftgallery",function(){
		$("div.leftgallery img").fadeTo("slow",0.1);
	});
	$(document).on("mouseenter","div.topgallery",function(){
		$("div.topgallery img").fadeTo("slow",1.0);
	});
	$(document).on("mouseleave","div.topgallery",function(){
		$("div.topgallery img").fadeTo("slow",0.1);
	});
	$(document).on("mouseenter","div.minigallery_goleft",function(){
		$("div.minigallery_goleft img").fadeTo("slow",1.0);
	});
	$(document).on("mouseleave","div.minigallery_goleft",function(){
		$("div.minigallery_goleft img").fadeTo("slow",0.1);
	});
	$(document).on("mouseenter","div.minigallery_goright",function(){
		$("div.minigallery_goright img").fadeTo("slow",1.0);
	});
	$(document).on("mouseleave","div.minigallery_goright",function(){
		$("div.minigallery_goright img").fadeTo("slow",0.1);
	});
//funciones para mover el panel
	$(document).on("click","div.minigallery_goleft",function(){
		$("div.contenedor").animate({left: "+=200"},500);
	});
	$(document).on("click","div.minigallery_goright",function(){
		$("div.contenedor").animate({left: "-=200"},500);
	});
//funciones para pasar de imagen
	$(document).on("click","div.leftgallery",
		function(){
			var idimg = $("#countImg").val();
			idimg--;
			if(idimg >= 0){
				var url= imgAry[idimg];
				showimage(url);
				$("#countImg").val(idimg);
			}else{
				console.log("no se puede")
			}
		}
	);
	$(document).on("click","div.rightgallery",
		function(){
			var idimg = $("#countImg").val();
			idimg++;
			if(idimg < imgAry.length){
				var url= imgAry[idimg];
				showimage(url);
				$("#countImg").val(idimg);
			
			}else{
				console.log("no se puede")
			}
		}
	);
});
