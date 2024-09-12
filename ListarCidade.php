<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="listar.css">
</head>
<body>
    <?php
        include('includes/conexao.php');
        $sql = "SELECT * FROM cidade";
        // Executa a consulta
        $result = mysqli_query($con, $sql);
        // Retorna apenas uma linha
        //$row = mysqli_fetch_array($result);
    ?>
    <div class="container">
        <h1>Consulta de Cidades</h1>

        <table>
            <tr>
                <th>Código</th>
                <th>Nome</th>
                <th>Estado</th>
                <th>Alterar</th>
                <th>Deletar</th>
            </tr>
            <?php
                // Coloque aqui o seu código PHP para consultar e exibir os dados da tabela
                while($row = mysqli_fetch_array($result)) {
                    echo "<tr>";
                    echo "<td>".$row['id']."</td>";
                    echo "<td>".$row['nomecidade']."</td>";
                    echo "<td>".$row['estado']."</td>";
                    echo "<td><a href ='alteraCidade.php?id=".$row['id']."'>Alterar</a></td>";
                    echo "<td><a href ='deletaCidade.php?id=".$row['id']."'>Deletar</a></td>";
                    echo "</tr>";
                }
            ?>
        </table>

        <div class="footer">
            <p><a href="index.php">Voltar</a></p>
        </div>
    </div>
</body>
</html>