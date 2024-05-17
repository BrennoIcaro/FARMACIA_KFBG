<?php

include("conexao.php");

if(isset($_POST['username']) && isset($_POST['senha'])) {

    $username = $_POST['username'];
    $senha = $_POST['senha'];

    $sql = "SELECT * FROM clientes WHERE username='$username' AND senha='$senha'";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        echo "<script>alert('Login validado');</script>";
    } else {
        echo "<script>alert('Usuário ou senha incorretos. Tente novamente.');</script>";
        header("Location: ");

    }

}

$conn->close();

?>

