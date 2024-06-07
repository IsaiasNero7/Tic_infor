<?php
session_start(); // Inicia a sessão

// Definir variáveis de erro e sucesso se existirem na sessão
$erro = isset($_SESSION['erro']) ? $_SESSION['erro'] : null;
$sucesso = isset($_SESSION['sucesso']) ? $_SESSION['sucesso'] : null;

// Limpar mensagens da sessão
unset($_SESSION['erro']);
unset($_SESSION['sucesso']);
?>
<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>

    <!-- Materialize CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500&display=swap" rel="stylesheet">

    <!-- Custom CSS -->
    <style>
        body {
            font-family: 'Roboto', sans-serif;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
            background-color: #f5f5f5;
        }

        .card {
            width: 100%;
            max-width: 400px;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            text-align: center;
            background-color: #fff;
        }

        .card-title {
            font-size: 24px;
            font-weight: 500;
            margin-bottom: 20px;
            color: #333;
        }

        .input-field label {
            color: #666;
        }

        .input-field input[type=email]:focus + label,
        .input-field input[type=password]:focus + label {
            color: #1976d2 !important;
        }

        .input-field input[type=email]:focus,
        .input-field input[type=password]:focus {
            border-bottom: 1px solid #1976d2 !important;
            box-shadow: 0 1px 0 0 #1976d2 !important;
        }

        .btn {
            background-color: #fff; /* Cor inicial */
            color: #1976d2; /* Cor do texto */
            border: 1px solid #1976d2; /* Borda */
            border-radius: 4px;
            padding: 0 16px;
            height: 36px;
            line-height: 36px;
            text-transform: uppercase;
            letter-spacing: 0.5px;
            font-size: 14px;
            font-weight: 500;
            cursor: pointer;
            transition: background-color 0.2s ease, color 0.2s ease; /* Transições */
        }

        .btn:hover {
            background-color: #1976d2; /* Cor ao passar o mouse */
            color: #fff; /* Cor do texto ao passar o mouse */
        }

        .btn-back {
            display: block;
            margin-top: 20px;
            color: #1976d2;
            font-weight: 500;
            text-decoration: none;
            transition: color 0.2s ease;
        }

        .btn-back:hover {
            color: #1565c0;
        }
    </style>
</head>

<body>
    <div class="card">
        <span class="card-title">Login</span>
        <form action="processr login.php" method="POST">
            <div class="input-field">
                <input type="email" id="email" name="email" class="validate" required>
                <label for="email">Email</label>
            </div>
            <div class="input-field">
                <input type="password" id="senha" name="senha" class="validate" required>
                <label for="senha">Senha</label>
            </div>
            <div>
                <p>
                    <label>
                        <input name="tipo_usuario" type="radio" value="admin" required />
                        <span class="blue-text text-darken-1">Administrador</span>
                    </label>
                </p>
                <p>
                    <label>
                        <input name="tipo_usuario" type="radio" value="aluno" required />
                        <span class="purple-text text-darken-1">aluno</span>
                    </label>
                </p>
            </div>
            <button type="submit" id="btn-entrar" class="btn">Entrar</button>
        </form>
        <a href="cad.php" class="btn-back">Não é cadastrado? Cadastre-se aqui</a>
    </div>

    <!-- Materialize JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>

    <!-- Custom JS -->
    <script>
        document.addEventListener('DOMContentLoaded', function () {
            var elems = document.querySelectorAll('select');
            var instances = M.FormSelect.init(elems, {});

            // Adiciona um ouvinte de evento para alterar a cor do botão "Entrar"
            var radios = document.querySelectorAll('input[name="tipo_usuario"]');
            radios.forEach(function (radio) {
                radio.addEventListener('change', function () {
                    var btnEntrar = document.getElementById('btn-entrar');
                    if (this.value === 'admin') {
                        btnEntrar.style.backgroundColor = '#2196F3'; // Azul para admin
                        btnEntrar.style.borderColor = '#2196F3';
                        btnEntrar.style.color = '#fff'; // Texto branco
                    } else if (this.value === 'paciente') {
                        btnEntrar.style.backgroundColor = '#9c27b0'; // Roxo para paciente
                        btnEntrar.style.borderColor = '#9c27b0';
                        btnEntrar.style.color = '#fff'; // Texto branco
                    } else {
                        btnEntrar.style.backgroundColor = '#fff'; // Cor inicial
                        btnEntrar.style.borderColor = '#1976d2';
                        btnEntrar.style.color = '#1976d2'; // Cor do texto
                    }
                });
            });
        });
    </script>
</body>

</html> 