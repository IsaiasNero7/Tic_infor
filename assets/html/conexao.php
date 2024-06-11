<?php


$servername = "localhost";
$username = "root";
$password = "";
$dbname = "academia";


$conexao = new mysqli($servername, $username, $password, $dbname);


if ($conexao->connect_error) {
    die("Conexão falhou: " . $conexao->connect_error);
}


?>