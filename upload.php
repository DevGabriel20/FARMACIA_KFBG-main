<?php

include("conexao.php");

$tipo = $_POST['tipo'];
$nome = trim($_POST['nome']);
$fabricante = trim($_POST['fabricante']);
$descricao = trim($_POST['descricao']);
$data_fabricacao = trim($_POST['data_fabricacao']);
$data_validade = trim($_POST['data_validade']);
$preco = trim($_POST['preco']);
$imagem = "";



if (isset($_FILES["imagem"]) && !empty($_FILES["imagem"]["name"])) {
    $imagem = "./IMG/" . $_FILES["imagem"]["name"];
    move_uploaded_file($_FILES["imagem"]["tmp_name"], $imagem);
}


if ($tipo == 'remedio') {
    $sql = "INSERT INTO remedios (nome, fabricante, descricao, data_fabricacao, data_validade, imagem, preco)
            VALUES ('{$nome}', '{$fabricante}', '{$descricao}', '{$data_fabricacao}', '{$data_validade}', '{$imagem}', '{$preco}')";

    $result = mysqli_query($conn, $sql);


} else if ($tipo == 'produto') {
    $pdr = "INSERT INTO produtos (nome, fabricante, descricao, data_fabricacao, data_validade, imagem, preco)
            VALUES ('{$nome}', '{$fabricante}', '{$descricao}', '{$data_fabricacao}', '{$data_validade}', '{$imagem}', '{$preco}')";

    $result_client = mysqli_query($conn, $pdr);
} else {
    die("Erro: Tipo de item desconhecido.");
}

mysqli_close($conn);

?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="refresh" content="3;http://localhost/FARMACIA_KFBG-main/pagADM.html">
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
        Dados cadastrados com sucesso!
    </h1>
    <br>
</body>

</html>