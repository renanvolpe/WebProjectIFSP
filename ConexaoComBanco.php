
<?php

$dsn = "mysql:dbname=crudoo;host=localhost";
$dbuser = "root";
$dbpass="Renan123";




try {
	$pdo = new PDO($dsn , $dbuser, $dbpass);

	echo "<br>deu bom <br>";


} catch (PDOException $e) {
	echo "deu ruim: ".$e->getMessage();
}
?>

