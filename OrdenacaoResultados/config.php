<?php


$dsn = "mysql:dbname=crudoo;host=localhost";

$dbuser = "root";
$dbpass = "Renan123";

try{
$pdo = new PDO($dsn, $dbuser, $dbpass);
}
catch(PODException $e){
	echo "CARALHOOOO DEU RUIM PRA VOCE";
}

?>
