var nome ="Renan";

function definirNome() {
	var nome = prompt("Qual seu nome? ");

	return nome;
}

function AdicionaIngrediente(){
	var ing = document.getElementById("ingrediente").value;

	var listahtml = document.getElementById("lista").innerHTML;

	listahtml = listahtml+"<li> "+ing+"</li>";

	document.getElementById("lista").innerHTML = listahtml;
}