<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login de Usuário</title>
    <link rel="stylesheet" href="login.css">
</head>
<body>
    <h2>Login de Usuário</h2>
    <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
        <label for="email">Email:</label><br>
        <input type="email" id="email" name="email"><br>
        <label for="senha">Senha:</label><br>
        <input type="password" id="senha" name="senha"><br><br>
        <a href="index.html">  <input type="submit" value="Login" name="login"></a>
      
    </form>

    <?php
    // Incluir o arquivo de conexão
    include 'conexao.php';

    // Verifica se o formulário de login foi submetido
    if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['login'])) {
        // Dados do formulário de login
        $email = $_POST['email'];
        $senha = $_POST['senha'];

        // Consulta SQL para verificar se o login é válido
        $sql = "SELECT * FROM login WHERE email = '$email' AND senha = '$senha'";
        $resultado = $conexao->query($sql);

        // Verifica se a consulta retornou algum resultado
        if ($resultado->num_rows > 0) {
            echo "<p>Login bem-sucedido!</p>";
            
        } else {
            echo "<p>Login falhou. Verifique suas credenciais.</p>";
        }
    }
    ?>
</body>
</html>
