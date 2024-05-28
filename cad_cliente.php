<?php

include("conexao.php");

$nome = $_POST['nome'];
$cpf = $_POST['cpf'];
$email = $_POST['email'];
$senha = $_POST['senha'];

$sql = "INSERT INTO clientes (nome,cpf,email,senha) VALUES ('{$nome}','{$cpf}','{$email}','{$senha}')";

mysqli_query($conn,$sql) or die("Erro ao cadastrar cliente");
mysqli_close($conn);


?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="refresh" content="3;http://localhost/FARMACIA_KFBG/login.html">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="">
    <title>Confirmação de Cadastro</title>
    <style>
        h1{
           
            text-align: center;
            color: #1cd84b;
            font-size: 30px;
        }
        h2{
            
            text-align: center;
            color: #1cd84b;
        }
        
        body{
          background-image: linear-gradient(60deg,#152d54cd,#345d9eca);
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