<?php
session_start(); // Inicia a sessão

// Função para conectar ao banco de dados
function conectarBanco() {
    // Dados para conexão com o banco de dados
    $hostname = 'localhost'; // Hostname
    $username = 'root'; // Nome de usuário do banco de dados
    $password = ''; // Senha do banco de dados
    $database = 'academia'; // Nome do banco de dados

    // Criar conexão
    $conexao = new mysqli($hostname, $username, $password, $database);

    // Verificar conexão
    if ($conexao->connect_error) {
        die("Erro de conexão: " . $conexao->connect_error);
    }

    // Configurar charset para UTF-8
    $conexao->set_charset("utf8");

    return $conexao;
}

// Verificar se os campos foram enviados pelo formulário
if(isset($_POST['email']) && isset($_POST['senha']) && isset($_POST['tipo_usuario'])) {
    // Restringir o tipo de usuário para admin e paciente
    $tipos_permitidos = array('admin', 'aluno');
    if(!in_array($_POST['tipo_usuario'], $tipos_permitidos)) {
        $_SESSION['erro'] = "Tipo de usuário inválido.";
        header("Location: login.php");
        exit;
    } else {
        $email = $_POST['email'];
        $senha = $_POST['senha'];
        $tipo_usuario = $_POST['tipo_usuario'];

        // Conectar ao banco de dados
        $conexao = conectarBanco();

        // Escapar os valores para evitar injeção de SQL
        $email = mysqli_real_escape_string($conexao, $email);

        // Verificar o tipo de usuário
        if($tipo_usuario === 'admin') {
            // Consulta SQL para verificar se o email fornecido corresponde a um administrador
            $sql = "SELECT id, senha FROM cadastro WHERE email = '$email'";
        } elseif($tipo_usuario === 'aluno') {
            // Consulta SQL para verificar se o email fornecido corresponde a um paciente
            $sql = "SELECT id, senha FROM cadastroaluno WHERE email = '$email'";
        }

        // Executar a consulta SQL
        $resultado = mysqli_query($conexao, $sql);
        
        // Verificar se a consulta retornou algum resultado
        if(mysqli_num_rows($resultado) === 1) {
            $row = mysqli_fetch_assoc($resultado);
            $senha_hash = $row['senha'];
            // Verificar se a senha fornecida corresponde à hash armazenada no banco de dados
            if(password_verify($senha, $senha_hash)) {
                // Senha correta, iniciar a sessão e redirecionar o usuário com base no tipo de usuário
                $_SESSION['usuario_id'] = $row['id'];
                $_SESSION['tipo_usuario'] = $tipo_usuario;
                if($tipo_usuario === 'admin') {
                    header("Location: admin.html??id=" . $row['id']);
                } else {
                    header("Location: aluno.html?id=" . $row['id']);
                }
                exit;
            } else {
                // Senha incorreta
                $_SESSION['erro'] = "Email ou senha incorretos.";
                header("Location: login.php");
                exit;
            }
        } else {
            // Usuário não encontrado
            $_SESSION['erro'] = "Usuário não encontrado";
            header("Location: login.php");
            exit;
        }

        // Fechar a conexão
        mysqli_close($conexao);
    }
} else {
    // Se os campos não foram enviados corretamente, exibir uma mensagem de erro
    $_SESSION['erro'] = "Por favor, preencha todos os campos.";
    header("Location: login.php");
    exit;
}
?>
