<?php

$email = $_POST['email'];
$new_email = $_POST['new_email'];
$new_senha = $_POST['new_senha'];


$servidor = "localhost";
$usuario = "root";
$senha = "";
$dbname = "bd_farmacia";

$conn = mysqli_connect($servidor, $usuario, $senha, $dbname);

$alterar_user = "UPDATE clientes SET email = '$new_email', senha = '$new_senha' WHERE email = '$email'";
$alterar_cliente = mysqli_query($conn, $alterar_user);


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="refresh" content="3;http://localhost/FARMACIA_KFBG/configuracoes.html">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Alterando Usuário</title>
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
    <h1>Email e Senha Alterados com Sucesso!</h1>
    <br>
    <h2>Redirecionando para configuracoes...</h2>
</body>
</html>