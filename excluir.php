<?php

$id = $_POST['id'];
$email = $_POST['email'];


$servidor = "localhost";
$usuario = "root";
$senha = "";
$dbname = "bd_farmacia";

$conn = mysqli_connect($servidor, $usuario, $senha, $dbname);

$apagar = " DELETE FROM clientes WHERE id = '$id' AND email = '$email'";
$delete_cliente = mysqli_query($conn,$apagar);

?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="refresh" content="3;http://localhost/FARMACIA_KFBG/index.html">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exclusão de Conta</title>
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
    <h1>Conta Excluída!</h1>
    <br>
    <h2>Redirecionando para a página principal...</h2>
</body>
</html>