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
function adicionarComentario() {

   	

	var img = new Image();
    var div = document. getElementById('lista');
    img.onload = function() {
    div.appendChild(img);
    };
   
    img.src = '../imagem/imagemPessoa.png';
    
    var noticia = document.getElementById("noticia").value;
	
	var lista = document.getElementById("lista").innerHTML;


     lista =  '<div class="comentario" style=""><p>'+lista+noticia+'</p> </div>' ;

	document.getElementById("lista").innerHTML = lista;

	 img.src = '../imagem/imagemPessoa.png';
}

function Menufixo(){
	var nav =document.getElementById('nav');
	
	
					window.onscroll = function() {
						if (window.pageYOffset >550 ) {
							nav.style.background = "#0b132b";
							

						}
						else{
							nav.style.background = "transparent";

						}
					}

}