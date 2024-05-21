<?php

include("conexao.php");

if(isset($_POST['email']) && isset($_POST['senha'])) {

    $email = $_POST['email'];
    $senha = $_POST['senha'];

    $sql = "SELECT * FROM clientes WHERE email='$email' AND senha='$senha'";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        echo "<script>alert('Login validado');</script>";
    } else {
        echo "<script>alert('Email ou senha incorretos. Tente novamente.');</script>";
        header("Location: ");

    }

}

$conn->close();

?>

