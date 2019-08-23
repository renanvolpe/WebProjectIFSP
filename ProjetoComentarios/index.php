<?php

require '../ConexaoComBanco.php';

if(isset($_POST['nome']) && empty($_POST['nome']) == false){
	$nome = $_POST['nome'];
	$mensagem = $_POST['mensagem'];
	

	
	
	
	$sql = "INSERT INTO mensagem(dataMsg,nome,msg) VALUES(CURRENT_DATE(),'$nome','$mensagem')";	


	$pdo->query($sql);
}
?>

<fieldset>
	<form method="POST">
		Nome: <br>
		<input type="text" name="nome"> <br> <br>
		Mensagem: <br>
		<textarea name="mensagem"> </textarea> <br> <br>

		<input type="submit" value="Enviar Mensagem">
	</form>
</fieldset>
<?php
	


		$sql = "SELECT * FROM mensagem ORDER BY dataMsg ASC";

		$sql = $pdo->query($sql);

		foreach ($sql->fetchAll() as $mensagem):
			?>
			<strong><?php echo $mensagem['nome'];  ?> </strong> <br>
			<?php echo $mensagem['msg'];?>
			
			
			<?php

			echo '- <a href="excluir.php?id='.$mensagem['id'].'" style="float:right">Excluir Comentario</a> <hr>';

			?>
			
			<?php

		endforeach;
		?>
	

