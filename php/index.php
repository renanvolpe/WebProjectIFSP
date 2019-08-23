<?php
require 'config.php';
?>
<a href="adicionar.php"> Adicionar novo usario</a>
<table border="0" width="100%">
	<tr>
		<th>
			nome
		</th>
		<th>
			email
		</th>
		<th>
			ações
		</th>
	</tr>
	<?php

	$sql = "SELECT * FROM pessoa";

	$sql = $pdo->query($sql);
	
	
		foreach ($sql->fetchall() as $pessoa):
			echo '<tr>';


			
			echo '<th>'.$pessoa['nome'].'</th>';
			echo '<th>'.$pessoa['email'].'</th>';
			echo '<th> <a href="editar.php?id='.$pessoa['id'].'">Editar</a> - <a href="excluir.php?id='.$pessoa['id'].'">Excluir</a></th>';

			echo '</tr>';
		endforeach;

	?>

</table>