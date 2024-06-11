<?php
session_start(); 


function conectarBanco() {
    $hostname = 'localhost'; 
    $username = 'root';
    $password = ''; 
    $database = 'academia';

    $conexao = new mysqli($hostname, $username, $password, $database);

  
    if ($conexao->connect_error) {
        die("Erro de conexão: " . $conexao->connect_error);
    }

    $conexao->set_charset("utf8");

    return $conexao;
}

if(isset($_POST['email']) && isset($_POST['senha']) && isset($_POST['tipo_usuario'])) {
    $tipos_permitidos = array('admin', 'aluno');
    if(!in_array($_POST['tipo_usuario'], $tipos_permitidos)) {
        $_SESSION['erro'] = "Tipo de usuário inválido.";
        header("Location: login.php");
        exit;
    } else {
        $email = $_POST['email'];
        $senha = $_POST['senha'];
        $tipo_usuario = $_POST['tipo_usuario'];

        $conexao = conectarBanco();

        $email = mysqli_real_escape_string($conexao, $email);

       
        if($tipo_usuario === 'admin') {
          
            $sql = "SELECT id, senha FROM cadastro WHERE email = '$email'";
        } elseif($tipo_usuario === 'aluno') {
           
            $sql = "SELECT id, senha FROM cadastroaluno WHERE email = '$email'";
        }

        
        $resultado = mysqli_query($conexao, $sql);
        
       
        if(mysqli_num_rows($resultado) === 1) {
            $row = mysqli_fetch_assoc($resultado);
            $senha_hash = $row['senha'];
            
            if(password_verify($senha, $senha_hash)) {
               
                $_SESSION['usuario_id'] = $row['id'];
                $_SESSION['tipo_usuario'] = $tipo_usuario;
                if($tipo_usuario === 'admin') {
                    header("Location: admin.html??id=" . $row['id']);
                } else {
                    header("Location: aluno.html?id=" . $row['id']);
                }
                exit;
            } else {
               
                $_SESSION['erro'] = "Email ou senha incorretos.";
                header("Location: login.php");
                exit;
            }
        } else {
        
            $_SESSION['erro'] = "Usuário não encontrado";
            header("Location: login.php");
            exit;
        }

       
        mysqli_close($conexao);
    }
} else {
   
    $_SESSION['erro'] = "Por favor, preencha todos os campos.";
    header("Location: login.php");
    exit;
}

function logout(){
    session_start();
    session_unset();
    session_destroy();
    header("location: login.php");
}

?>
