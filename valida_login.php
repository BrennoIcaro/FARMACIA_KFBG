<?php

include("conexao.php");

if(isset($_POST['email']) && isset($_POST['senha'])) {

    $email = $_POST['email'];
    $senha = $_POST['senha'];

    $sql = "SELECT * FROM clientes WHERE email='$email' AND senha='$senha'";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        echo "<script>alert('Login validado');</script>";
        echo "<meta http-equiv='refresh' content='3;url=http://localhost/FARMACIA_KFBG/pagina_logado.html'>";
    } else {
        echo "<script>alert('Email ou senha incorretos. Tente novamente.');</script>";
        echo "<meta http-equiv='refresh' content='0;url=http://localhost/FARMACIA_KFBG/login.html'>";

    }

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

