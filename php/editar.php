<?php
require 'config.php';

$id = 0;
if(isset($_GET['id']) && empty($_GET['id']) == false){
	$id = addslashes($_GET['id']);
}

	if(isset($_POST['nome']) && empty($_POST['nome']) == false){
	$nome = addslashes($_POST['nome']);
	$email = addslashes($_POST['email']);	


	$sql = "UPDATE pessoa SET nome = '$nome', email='$email' WHERE id = '$id'";
	$sql = $pdo->query($sql);

}

$sql = "SELECT * FROM pessoa WHERE id = '$id'";
	$sql = $pdo->query($sql);

	$dado = $sql->fetch();
?>

<form method="POST">
	Nome:<br/>
	<input type="text" name="nome" value="<?php echo $dado['nome'];?>">
	E-mail:<br/>
	<input type="text" name="email " value="<?php echo $dado['email'];?>">
	

	<input type="submit" value="Atualizar">
</form>