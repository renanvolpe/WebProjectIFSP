
<?php

$dsn = "mysql:dbname=jogo;host=localhost";
$dbuser = "root";
$dbpass="Renan123";




try {
	$pdo = new PDO($dsn , $dbuser, $dbpass);

	

	$sql = "SELECT * FROM  fisico";

	$sql = $pdo->query($sql);

	
	
	//mostrar dados
	foreach ($sql->fetchAll() as $fisico) {
		echo "Nome: ".$fisico["nome"]." ";
		echo "Preco: ".$fisico["preco"]."<br>";

	}
		$nome = "teste01";
		$preco = 101;
		$estado = "u";
		$dataEntrada = 2018-05-12;


		//comando para inserir dados
	$sql1 = "INSERT INTO fisico(nome,preco,estado,dataEntrada) VALUES('teste04','04','u','2018-05-03')";

	$sql1 = $pdo->query($sql1);

	foreach ($sql1->fetchAll() as $fisico) {
		echo "Nome: ".$fisico["nome"]." ";
		echo "Preco: ".$fisico["preco"]."<br>";

	}


	//atualizando os dados
	$sql2 = "UPDATE fisico SET nome = 'gtaIV' WHERE nome ='gtaV'";

	$sql2 = $pdo->query($sql2);

	foreach ($sql2->fetchAll() as $fisico) {
		echo "Nome: ".$fisico["nome"]." ";
		echo "Preco: ".$fisico["preco"]."<br>";

	}

	//deletando dados
	$sql3 = "DELETE FROM  fisico WHERE nome ='teste04'";

	$sql3 = $pdo->query($sql3);

	foreach ($sql3->fetchAll() as $fisico) {
		echo "Nome: ".$fisico["nome"]." ";
		echo "Preco: ".$fisico["preco"]."<br>";

	}


	

} catch (PDOException $e) {
	echo "deu ruim: ".$e->getMessage();
}
?>