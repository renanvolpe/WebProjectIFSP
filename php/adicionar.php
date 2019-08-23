<?php
require 'config.php';
	
		
	$nome = addslashes($_POST['nome']);
	$email = addslashes($_POST['email']);	
	$senha = addslashes($_POST['senha']);	

	$sql = "INSERT INTO pessoa(nome,email,senha) VALUES('$nome','$email','$senha')";	

	$pdo->query($sql);

	$sql = "SELECT * FROM pessoa WHERE id = '$id'";
	$sql = $pdo->query($sql);
?>

<form method="POST">
	<br/><br/>
	Nome:
	<input type="text" name="nome" value="">
	<br/><br/>

	E-mail:
	<input type="text" name="email" value="">
	<br/><br/>
	
	Senha:
	<input type="text" name="senha" value="">
<br/><br/>
	<input type="submit" value="Cadastrar">
</form>
