<?php
// Dados de conexão
$host = 'localhost'; // ou o endereço do seu servidor MySQL
$db   = 'academia';
$user = 'root';
$pass = '';

// Conexão com o banco de dados
$conexao = new mysqli($host, $user, $pass, $db);

// Verifica conexão
if ($conexao->connect_error) {
    die("Conexão falhou: " . $conexao->connect_error);
}
?>



