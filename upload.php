<?php

include("conexao.php");

$tipo = $_POST['tipo'];
$nome = $_POST['nome'];
$fabricante = $_POST['fabricante'];
$descricao = $_POST['descricao'];
$data_fabricacao = $_POST['data_fabricacao'];
$data_validade = $_POST['data_validade'];
$preco = $_POST['preco'];
$imagem = ""; 


if (isset($_FILES["imagem"]) && !empty($_FILES["imagem"]["name"])) {
    $imagem = "./IMG/" . $_FILES["imagem"]["name"];
    move_uploaded_file($_FILES["imagem"]["tmp_name"], $imagem);
}


if ($tipo == 'remedio') {
    $sql = "INSERT INTO remedios (nome, fabricante, descricao, data_fabricacao, data_validade, imagem, preco)
            VALUES ('{$nome}', '{$fabricante}', '{$descricao}', '{$data_fabricacao}', '{$data_validade}', '{$imagem}', '{$preco}')";

     $result = mysqli_query($conn, $sql);
    

} elseif ($tipo == 'produto') {
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
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="">
    <title>Confirmação de Cadastro</title>
</head>
<body>
    <h1>
        Dados cadastrados com sucesso!
    </h1>
    <br>
</body>
</html>
