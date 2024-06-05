<!DOCTYPE html>
<html>
<head>
    <title>Formulário de Cadastro e Login</title>
</head>
<body>

<?php
// Configurações de conexão com o banco de dados
$servername = "localhost"; // endereço do servidor
$username = "root"; // nome de usuário do banco de dados
$password = ""; // senha do banco de dados
$dbname = "academia"; // nome do banco de dados

// Criar conexão
$conn = new mysqli($servername, $username, $password, $dbname);

// Verificar conexão
if ($conn->connect_error) {
    die("Erro na conexão: " . $conn->connect_error);
}

// Verificar se o formulário de cadastro foi enviado
if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['submit_cadastro'])) {
    $nome = $_POST['nome'];
    $email = $_POST['email'];
    $senha = $_POST['senha'];

    // Inserir dados na tabela Cadastro
    $sql = "INSERT INTO Cadastro (nome, email, senha) VALUES ('$nome', '$email', '$senha')";
    if ($conn->query($sql) === TRUE) {
        echo "Novo registro inserido com sucesso na tabela Cadastro.";
    } else {
        echo "Erro: " . $sql . "<br>" . $conn->error;
    }
}

// Verificar se o formulário de login foi enviado
if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['submit_login'])) {
    $email_login = $_POST['email_login'];
    $senha_login = $_POST['senha_login'];

    // Verificar se o email e senha correspondem na tabela Login
    $sql = "SELECT * FROM Login WHERE email='$email_login' AND senha='$senha_login'";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        echo "Login bem-sucedido!";
    } else {
        echo "Credenciais inválidas.";
    }
}
?>

<h2>Cadastro</h2>
<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
    Nome: <input type="text" name="nome"><br>
    Email: <input type="email" name="email"><br>
    Senha: <input type="password" name="senha"><br>
    <input type="submit" name="submit_cadastro" value="Cadastrar">
</form>

<h2>Login</h2>
<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
    Email: <input type="email" name="email_login"><br>
    Senha: <input type="password" name="senha_login"><br>
    <input type="submit" name="submit_login" value="Login">
</form>

<?php
// Fechar conexão
$conn->close();
?>

</body>
</html>
