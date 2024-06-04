<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro de Usuário</title>
</head>
<body>
    <h2>Cadastro de Usuário</h2>
    <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
        <label for="nome">Nome:</label><br>
        <input type="text" id="nome" name="nome"><br>
        <label for="email">Email:</label><br>
        <input type="email" id="email" name="email"><br>
        <label for="senha">Senha:</label><br>
        <input type="password" id="senha" name="senha"><br><br>
        <input type="submit" value="Cadastrar" name="cadastrar">
    </form>

    <?php
    // Incluir o arquivo de conexão
    include 'conexao.php';

    // Verifica se o formulário de cadastro foi submetido
    if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['cadastrar'])) {
        // Dados do formulário de cadastro
        $nome = $_POST['nome'];
        $email = $_POST['email'];
        $senha = $_POST['senha'];

        // Consulta SQL para inserir os dados na tabela "usuarios"
        $sql = "INSERT INTO cadastro (nome, email, senha) VALUES ('$nome', '$email', '$senha')";

        // Executar a consulta
        if ($conexao->query($sql) === TRUE) {
            echo "<p>Cadastro realizado com sucesso!</p>";
        } else {
            echo "Erro ao cadastrar: " . $conexao->error;
        }
    }
    ?>
</body>
</html>
