<?php
$dsn = "mysql:dbname=blog;host=localhost";

$dbuser = "root";
$dbpass = "";

$pdo = new PDO($dsn, $dbuser, $dbpass);

echo "deu bom";
?>