<?php
session_start();

//Variavel global
$_SESSION["teste"] = "Renan";

echo "nome: ".$_SESSION["teste"];

//crirar cookie meu teste de duração de uma hora
setcookie("meuteste", "fulano de tao", time()+3600);

echo '<br> <br>'.$_COOKIE['meuteste'];

?>