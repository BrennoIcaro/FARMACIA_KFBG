<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pesquisar Remedios</title>
    <style>
        table {
            width: 100%;
            border-collapse: collapse;
        
        }
        th, td {
            border: 1px solid black;
            padding: 8px;
            text-align: left;
        }
        th {
            background-color: #f2f2f2;
        }
    </style>
</head>
<body>
    <table>
        <thead>
        <tr>
            <th>Nome</th>
            <th>Fabricante</th>
            <th>Descrição</th>
            <th>Data de Fabricação</th>
            <th>Data de Validade</th>
            <th>Imagem</th>
            <th>Preço</th>
        </tr>
        </thead>
        <tbody>

            <?php

             include("conexao.php");

             $pesquisa = mysqli_real_escape_string($conn, $_POST['pesquisa']);
             $tipo = $_POST['tipo'];

             if ($tipo == 'remedio') {
                 $resultado = "SELECT nome, fabricante, descricao, data_fabricacao, data_validade, imagem, preco 
                           FROM remedios WHERE nome LIKE '%$pesquisa%'";

             } else if ($tipo == 'produto') {
                 $resultado = "SELECT nome AS nome, fabricante, descricao, data_fabricacao, data_validade, imagem, preco 
                           FROM produtos WHERE nome LIKE '%$pesquisa%'";
             } else {
                 echo "Erro: Tipo de item desconhecido.";
                 exit;
             }

             $result = mysqli_query($conn, $resultado);

             if ($result) {
                 while ($linhas = mysqli_fetch_assoc($result)) {
                    echo "<tr>";
                    echo "<td>".$linhas['nome']. "</td>";
                    echo "<td>".$linhas['fabricante']. "</td>";
                    echo "<td>".$linhas['descricao']. "</td>";
                    echo "<td>".$linhas['data_fabricacao']. "</td>";
                    echo "<td>".$linhas['data_validade']. "</td>";
                    echo "<td><img src='".$linhas['imagem']."' width='75' height='75'></td>";
                    echo "<td>".$linhas['preco']. "</td>";
                    echo "</tr>";
                 }
             } else {
                 echo "Erro ao realizar a consulta: " . mysqli_error($conn);
             }

             mysqli_close($conn);

                ?>       

        </tbody>
        
    </table>

    <a href="pagina_logado.html">Voltar</a>

</body>
</html>