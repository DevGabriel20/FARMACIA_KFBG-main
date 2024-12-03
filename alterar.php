<?php

$email = trim($_POST['email']);
$new_email = trim($_POST['new_email']);
$new_senha = trim($_POST['new_senha']);

if (empty($email) || empty($new_email) || empty($new_senha)) {
    echo "<script>alert('Preencha todos os campos!');</script>";
    exit;
}

// Verificar se os dados são válidos
if (!filter_var($email, FILTER_VALIDATE_EMAIL) || !filter_var($new_email, FILTER_VALIDATE_EMAIL)) {
    echo "<script>alert('Preencha os campos de e-mail com endereços válidos!');</script>";
    exit;
}

if (strlen($new_senha) < 8) {
    echo "<script>alert('A senha deve ter no mínimo 8 caracteres!');</script>";
    echo "<meta http-equiv=refresh content=2;url=configuracoes.html><meta/>";
    exit;
}

$servidor = "localhost";
$usuario = "root";
$senha = "";
$dbname = "bd_farmacia";

$conn = mysqli_connect($servidor, $usuario, $senha, $dbname);

$alterar_user = "UPDATE clientes SET email = '$new_email', senha = '$new_senha' WHERE email = '$email'";
$alterar_cliente = mysqli_query($conn, $alterar_user);

if ($alterar_cliente) {
    echo "<script>alert('Dados atualizados com sucesso!');</script>";
    echo "<meta http-equiv=refresh content=3;url=configuracoes.html><meta/>";
} else {
    echo "<script>alert('Erro ao atualizar dados: " . mysqli_error($conn) . "');</script>";
}


?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="refresh" content="3;url=configuracoes.html">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Alterando Usuário</title>
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
    <h1><?= $mensagem ?></h1>
    <br>
    <h2>Redirecionando para Configurações...</h2>
</body>

</html>