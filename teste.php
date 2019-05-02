
<?php

$dsn = "mysql:dbname=jogo;host=localhost";
$dbuser = "root";
$dbpass="Renan123";




try {
	$pdo = new PDO($dsn , $dbuser, $dbpass);

	echo "deu bom";


} catch (PDOException $e) {
	echo "deu ruim: ".$e->getMessage();
}
?>