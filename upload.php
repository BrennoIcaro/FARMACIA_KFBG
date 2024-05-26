<?php

include("conexao.php");

$nome = $_POST['nome'];
$fabricante = $_POST['fabricante'];
$descricao = $_POST['descricao'];
$data_fabricacao = $_POST['data_fabricacao'];
$data_validade = $_POST['data_validade'];


if(isset($_FILES["imagem"]) && !empty($_FILES["imagem"])){
    $imagem = "./IMG/".$_FILES["imagem"]["name"];
    move_uploaded_file($_FILES["imagem"]["tmp_name"], $imagem );
  
}else{
    echo "";
}

$sql = "INSERT INTO remedios (nome,fabricante,descricao,data_fabricacao,data_validade,imagem)
 VALUES ('{$nome}','{$fabricante}','{$descricao}','{$data_fabricacao}','{$data_validade}','{$imagem}')";

mysqli_query($conn,$sql) or die("Erro ao inserir remedio!");
mysqli_close($conn);

?>


<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="refresh" content="3;http://localhost/FARMACIA_KFBG/upload.html">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="">
    <title>Confirmação de Cadastro</title>
</head>
<body>
    <h1>
        Remédio cadastrado com Sucesso!
    </h1>   
    <br>
    
</body>
</html>