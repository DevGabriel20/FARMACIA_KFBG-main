<?php

include("conexao.php");

$nome = trim($_POST['nome']);
$cpf = trim($_POST['cpf']);
$email = trim($_POST['email']);
$senha = trim($_POST['senha']);

// Verificar se os campos estão vazios
if (empty($nome) || empty($cpf) || empty($email) || empty($senha)) {
    echo "<script>alert('Preencha todos os campos!');</script>";
    exit;
}

// Verificar se o email é válido
if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
    echo "<script>alert('Preencha o campo de e-mail com um endereço válido!');</script>";
    echo "<meta http-equiv=refresh content=2;url=cadastro.html><meta/>";
    exit;
}

// Verificar se a senha tem no mínimo 8 caracteres
if (strlen($senha) < 8) {
    echo "<script>alert('A senha deve ter no mínimo 8 caracteres!');</script>";
    echo "<meta http-equiv=refresh content=2;url=cadastro.html><meta/>";
    exit;
}

// Verificar se o CPF é válido
if (!preg_match('/^[0-9]{3}\.[0-9]{3}\.[0-9]{3}-[0-9]{2}$/', $cpf)) {
    echo "<script>alert('O número de CPF é inválido!');</script>";
    echo "<meta http-equiv=refresh content=2;url=cadastro.html><meta/>";
    exit;
}

$sql = "INSERT INTO clientes (nome,cpf,email,senha) VALUES ('{$nome}','{$cpf}','{$email}','{$senha}')";

mysqli_query($conn, $sql) or die("Erro ao cadastrar cliente");
mysqli_close($conn);


?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="refresh" content="3;http://localhost/FARMACIA_KFBG-main/login.html">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="">
    <title>Confirmação de Cadastro</title>
    <style>
        h1 {

            text-align: center;
            color: #1cd84b;
            font-size: 30px;
        }

        h2 {

            text-align: center;
            color: #1cd84b;
        }

        body {
            background-image: linear-gradient(60deg, #152d54cd, #345d9eca);
        }
    </style>
</head>

<body>
    <h1>
        Cliente Cadastrado com Sucesso!
    </h1>
    <br>
    <h2>
        Redirecionando para Login...
    </h2>

</body>

</html>