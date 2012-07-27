function loadUserMenu(){
			var menuArray=eval(arraypage);
			var result = '<img src="imagenes/firma.png" style="float:left; width:200px; margin:0px 20px;">';
			result += '<ul id="topMenu">';	

			for(var i in menuArray){
				var pagearray = menuArray[i][0].split("&");
				result +="<li onclick=goMenu('"+i+"')><a id='top_"+i+"' href=#home>"+pagearray[0]+"</a></li>";
			} 

			result += '</ul>';
			document.getElementById("menuSuperior").innerHTML= result;
			//por defecto va al primer menu en el arreglo
			goMenu(0);
		}

		function goMenu(menu){
			var menuArray=eval(arraypage);

			for(var i in menuArray){
				document.getElementById('top_'+i).className = "inactivo";
			}
			document.getElementById('top_'+ menu ).className = "activo";

			var result='<ul id="subMenu">';
			for(var i in menuArray[menu]){
				var pagearray = menuArray[menu][i].split("&");
				result +="<li onclick=goPage('"+menu+'_'+i+"')><a id='sub_"+i+"' href=#home>"+pagearray[0]+"</a></li>";
			}

			result += '</ul>';
			document.getElementById("menuLateral").innerHTML= result;
			goPage( menu + "_0");
		}

		function goPage(codpage){
			var menuArray=eval(arraypage);
			var menupage=codpage.split('_');

			for(var i in menuArray[menupage[0]]){
				document.getElementById('sub_'+i).className = "inactivo";
			}
			document.getElementById('sub_'+ menupage[1]).className = "activo";
			var page=menuArray[menupage[0]][menupage[1]].split('&')[1];
			
			$("#contenido").load(page, function(data,stat){
				if(stat=="error"){
					$("#contenido").load('errorPage.php');
				}
			});
			
		}
