<?php
$usuario = "root";
$senha = "";
$servidor = "localhost";
$porta = "3306";
$nome_bd = "bd_adega";

$conexao = mysqli_connect($servidor, $usuario, $senha, $nome_bd, $porta);
?>
