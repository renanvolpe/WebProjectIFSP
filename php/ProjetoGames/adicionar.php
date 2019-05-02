<?php

require 'conexaoBanco.php';

	if(isset($_POST['nome']) && empty($_POST['nome']) == false)
		$nome = addslashes($_POST['nome']);
		$preco = addslashes($_POST['preco']);
		$estado = addcslashes($_POST['estado']);
		$dataEntrada = addcslashes($_POST['dataEntrada']);


		$sql = "INSERT INTO fisico SET nome = '$nome', preco = '$preco', estado = '$estado', dataEntrada = '$dataEntrada' ";

		//$sql = "INSERT INTO fisico (nome, preco, estado, dataEntrada) values('$nome','$preco','$estado','$dataEntrada'); ";

		$pdo->query($sql);

		
		

?>

<form method="POST">

nome:</br>
<input type="text" name="nome" /> </br>
preco</br>
<input type="text" name="email"/> </br>
estado</br>
<input type="text" name="estado"> </br>
data  </br>
<input type="text" name="data"> </br>

</br>
<input type="submit"  value ="Cadastrar" name=""/>

</form>