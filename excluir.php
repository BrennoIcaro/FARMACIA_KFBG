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
    <title>Redirecionando...</title>
</head>
<body>
    <h1>Login Excluído!</h1>
</body>
</html>