<?php
require 'conexaoBanco.php';
?>
<a href="adicionar.php"> Adicionar novoo Usuario </a>
<table border="0" width="100%">
	<tr>
		<th> Nome</th>
		<th> preco</th>
		<th> Ações</th>
	</tr>
	<?php
		$sql = "SELECT * FROM fisico";
		$sql = $pdo->query($sql);
			foreach ($sql->fetchAll() as $fisico) {
				echo '<tr>';
				
				echo '<td>'.$fisico['nome'].' </td>';
				echo '<td>'.$fisico['preco'].'</td>';
				echo '<td><a href="editar.php?id='.$fisico['idJogo'].'"> Editar.</a> -- <a href="excluir.php?id='.$fisico['idJogo'].'"> Excluir</a> </td>';
				echo '</tr>';


			}	
	?>
</table>
