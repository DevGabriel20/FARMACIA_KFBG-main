<?php

include("conexao.php");

if (isset($_POST['email']) && isset($_POST['senha']) && isset($_POST['tipo_usuario'])) {

    $email = $_POST['email'];
    $senha = $_POST['senha'];
    $tipo_usuario = $_POST['tipo_usuario'];

    if ($tipo_usuario == 'cliente') {
        // Verifica login no banco de dados de clientes
        $sql = "SELECT * FROM clientes WHERE email='$email' AND senha='$senha'";
        $result = $conn->query($sql);

        if ($result->num_rows > 0) {
            echo "<script>alert('Login validado como Cliente');</script>";
            echo "<meta http-equiv='refresh' content='3;url=http://localhost/FARMACIA_KFBG-main/pagina_logado.html'>";
        } else {
            echo "<script>alert('Email ou senha de cliente incorretos. Tente novamente.');</script>";
            echo "<meta http-equiv='refresh' content='0;url=http://localhost/FARMACIA_KFBG-main/login.html'>";
        }
    } elseif ($tipo_usuario == 'administrador') {
        // Verifica login no banco de dados de administradores
        $sql = "SELECT * FROM administradores WHERE email='$email' AND senha='$senha'";
        $result = $conn->query($sql);

        if ($result->num_rows > 0) {
            echo "<script>alert('Login validado como Administrador');</script>";
            echo "<meta http-equiv='refresh' content='3;url=http://localhost/FARMACIA_KFBG-main/pagAdm.html'>";
        } else {
            echo "<script>alert('Email ou senha de administrador incorretos. Tente novamente.');</script>";
            echo "<meta http-equiv='refresh' content='0;url=http://localhost/FARMACIA_KFBG-main/login.html'>";
        }
    } else {
        echo "<script>alert('Tipo de usuário inválido. Tente novamente.');</script>";
        echo "<meta http-equiv='refresh' content='0;url=http://localhost/FARMACIA_KFBG-main/login.html'>";
    }
} else {
    echo "<script>alert('Por favor, preencha todos os campos.');</script>";
    echo "<meta http-equiv='refresh' content='0;url=http://localhost/FARMACIA_KFBG-main/login.html'>";
}


$conn->close();
?>


<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Redirecionando...</title>
</head>

<body>

</body>

</html>