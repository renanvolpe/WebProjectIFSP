function adicionarNoticia() {
	var noticia = document.getElementById("noticia").value;
	
	var lista = document.getElementById("lista").innerHTML;

	

	

	 var src = document.getElementById("noticia");
     var img = document.createElement("img");
     img.src = '../imagem/ImagemTeste.jpg';
     var image = src.appendChild(img);

     lista =  lista +'<li>'+noticia+image+'</li>';

	document.getElementById("lista").innerHTML = lista;
}

