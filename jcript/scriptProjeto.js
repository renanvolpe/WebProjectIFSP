function adicionarNoticia() {
	var noticia = document.getElementById("noticia").value;

	var lista = document.getElementById("lista").innerHTML;

	lista = lista +"<li>"+noticia+"</li>";

	document.getElementById("lista").innerHTML = lista;
}