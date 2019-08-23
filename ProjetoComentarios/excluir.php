<?php
require '../ConexaoComBanco.php';

$id = addslashes($_GET['id']);

$sql = "DELETE FROM mensagem WHERE id ='$id'";

$pdo->query($sql);

header("location: index.php");

?>