<?php

require 'config.php';

if (isset($_GET['ordem'])&& empty($_GET['ordem']) == false) {
		$ordem = $_GET['ordem'];
		
		$sql = "SELECT * FROM usuario ORDER BY ".$ordem;
		
	}else{
		$ordem = '';
		$sql = "SELECT * FROM usuario";
		
	}
?>
<form method="GET">
	<select name="ordem" onchange="this.form.submit()">
		<option></option>
		<option value="idade"<?php echo ($ordem=="idade")?'selected="selected"':'';?>>Por Idade</option>
		<option value="nome" <?php echo ($ordem=="nome")?'selected="selected"':'';?>> Por Nome</option>
	</select>
</form>

<table border="1" width="400">
	
	<tr>
		<th> Nome</th>
		<th>Idade</th>
	</tr>
	<?php
	
	
	$sql = $pdo->query($sql);
	
	foreach ($sql->fetchAll() as $usuario):
	?>

	<tr>
		<td>
			<?php echo $usuario['nome'];?> 
		</td>
		<td>
			<?php echo $usuario['idade'];?>
		</td>
	</tr>
	<?php
	endforeach;
	?>
		
	
</table>