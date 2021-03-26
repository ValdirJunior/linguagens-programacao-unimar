<?php

include 'conexao.php';

if (isset($_REQUEST['btnSalvar'])) {
    
    $erro = 0;

    if (isset($_REQUEST['nome']) && !empty($_REQUEST['nome'])) {
        $nome = $_REQUEST['nome'];
    } else {
        $erro = 1;
    }
    
    if (isset($_REQUEST['email']) && !empty($_REQUEST['email'])) {
        $email = $_REQUEST['email'];
    } else {
        $erro = 1;
    }

    if (isset($_REQUEST['login']) && !empty($_REQUEST['login'])) {
        $login = $_REQUEST['login'];
    } else {
        $erro = 1;
    }

    if (isset($_REQUEST['senha']) && !empty($_REQUEST['senha'])) {
        $senha = sha1($_REQUEST['senha']);
    } else {
        $erro = 1;
    }

    if (!$erro) {
        $sql = "INSERT INTO usuario (nome, email, login, senha) VALUES ('$nome','$email','$login','$senha')";
        
        $result = mysqli_query($connection, $sql);

        if ($result) {
            header("Location: login.php");
        } else {
            echo "Erro ao executar o SQL";
        }
    } else {
        echo "Erro nos dados. Falta algum valor";
    }

}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
</head>
<body>

    <h1>Cadastro de Usuário</h1>

    <form action="cadastro_login.php" method="POST">
        <!-- Campo de nome -->
        <label for="nome">Nome:</label>
        <input type="text" name="nome" id="nome" required>

        <!-- Campo de username -->
        <label for="login">Usuário:</label>
        <input type="text" name="login" id="login" required>
    
        <!-- Campo de senha -->
        <label for="senha">Senha:</label>
        <input type="password" name="senha" id="senha" required>

        <!-- Campo de email -->
        <label for="email">Email:</label>
        <input type="email" name="email" id="email" required>

        <input type="submit" name="btnSalvar" id="btnSalvar" value="Salvar">
    </form>
</body>
</html>