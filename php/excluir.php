<?php
require 'config.php';
$id = addslashes($_GET['id']);

$sql = "DELETE FROM pessoa WHERE id ='$id' ";

$pdo->query($sql);

header("location: index.php");

?>