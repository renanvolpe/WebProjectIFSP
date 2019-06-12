function adicionarNoticia() {

	var noticia = document.getElementById("noticia").value;
	
	var lista = document.getElementById("lista").innerHTML;


     lista =  lista +'<li>'+noticia +'</li>';

	document.getElementById("lista").innerHTML = lista;



	

   	

	var img = new Image();
    var div = document. getElementById('lista');
    img.onload = function() {
    div.appendChild(img);
    };
    img.src = '../imagem/ImagemTeste.jpg'

}

function Menufixo(){
	var nav =document.getElementById('nav');
	var  header = document.getElementById('header');

					window.onscroll = function() {
						if (window.pageYOffset >200 ) {
							nav.style.transition = ".3s";
							nav.style.background = "black";
							nav.style.boxShadow ="0px 4px 2px gray";
							nav.style.position = "absolute";
							nav.style.position = "fixed";
							nav.style.top = "0px";
							nav.style.left = "0px";
							nav.style.right = "0px";
							nav.style.width="100%";
							nav.style.margin="0px";
							header.style.padding = "0px";

						}
						else{
							nav.style.background = "white";
							nav.style.boxShadow ="none";
							nav.style.position = "static";
							nav.style.width="auto";
							nav.style.margin="60px 60px 60px 0";
							nav.style.transition = ".0s";

							var tamanhoTela = window.innerWidth;

							if (tamanhoTela > 1200)							
								header.style.padding="0px 300px";
							else			
								header.style.padding="0px";
							
							
							

						}
					}

}