$("div.imgContainer").on("click", function(){

	console.log("entre");
	//extraigo el contadorde la imagen
	var imgcount = $("img",this)[0].parentNode.id.split("_")[1];
	$("#countImg").val(imgcount);
	//rxtraigo la url de la imagen
	var url=$("img",this)[0].attributes[0].nodeValue;
	$("div.maingallery").css({"z-index":100,"display":"inline"});
	showimage(url);

	var galeria = $("#galeria").html();
	$("div#contMiniaturas").html(galeria);
});

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

$("div.maingallery div.topgallery").on("click", function(){
		$("div.maingallery").css({"z-index":-1,"display":"none"});
});

//funciones que para abrir y ocultar el panel de miniaturas en la galeria
$("table.gallerymenu").on("click",function(){
	$("tr.miniaturasGaleria").slideDown(500,function(){
		$("tr.miniaturasGaleria td div").fadeIn(500);
	});
});
$("table.gallerymenu").on("mouseleave",function(){
	$("tr.miniaturasGaleria td div").fadeOut(500,function(){
		$("tr.miniaturasGaleria").slideUp(500);
	});
});
//funcion que esconde los botones de la galeria
$("table.gallerymenu").on("mouseenter",function(){
	$("#showImagesImg").fadeTo("slow",1.0);
});
$("table.gallerymenu").on("mouseleave",function(){
	$("#showImagesImg").fadeTo("slow",0.1);
});
$("div.rightgallery").on("mouseenter",function(){
	$("div.rightgallery img").fadeTo("slow",1.0);
});
$("div.rightgallery").on("mouseleave",function(){
	$("div.rightgallery img").fadeTo("slow",0.1);
});
$("div.leftgallery").on("mouseenter",function(){
	$("div.leftgallery img").fadeTo("slow",1.0);
});
$("div.leftgallery").on("mouseleave",function(){
	$("div.leftgallery img").fadeTo("slow",0.1);
});
$("div.topgallery").on("mouseenter",function(){
	$("div.topgallery img").fadeTo("slow",1.0);
});
$("div.topgallery").on("mouseleave",function(){
	$("div.topgallery img").fadeTo("slow",0.1);
});
$("div.minigallery_goleft").on("mouseenter",function(){
	$("div.minigallery_goleft img").fadeTo("slow",1.0);
});
$("div.minigallery_goleft").on("mouseleave",function(){
	$("div.minigallery_goleft img").fadeTo("slow",0.1);
});
$("div.minigallery_goright").on("mouseenter",function(){
	$("div.minigallery_goright img").fadeTo("slow",1.0);
});
$("div.minigallery_goright").on("mouseleave",function(){
	$("div.minigallery_goright img").fadeTo("slow",0.1);
});
//funciones para mover el panel
$("div.minigallery_goleft").on("click",function(){
	$("div.contenedor").animate({left: "+=200"},500);
});
$("div.minigallery_goright").on("click",function(){
	$("div.contenedor").animate({left: "-=200"},500);
});
//funciones para pasar de imagen
$("div.leftgallery").on("click", function(){
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
$("div.rightgallery").on("click", function(){
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