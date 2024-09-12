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
        $sql = "SELECT cli.id, cli.nomecliente nomecliente, cli.email, cli.ativo,
                cid.nomecidade nomecidade, cid.estado
                FROM cliente cli
                lEFT JOIN cidade cid on cid.id = cidade_id";
        // Executa a consulta
        $result = mysqli_query($con, $sql);
        // Retorna apenas uma linha
        //$row = mysqli_fetch_array($result);
    ?>
    <div class="container">
    <h1>Consulta de Clientes</h1>
    <table align="center" border="1" width="500">
        <tr>
            <th>Código</th>
            <th>Nome</th>
            <th>Email</th>
            <th>Ativo</th>
            <th>Alterar</th>
            <th>Deletar</th>
        </tr>
        <?php
            while($row = mysqli_fetch_array($result)){
                echo "<tr>";
                echo "<td>".$row['id']."</td>";
                echo "<td>".$row['nomecliente']."</td>";
                echo "<td>".$row['email']."</td>";
                echo "<td>".($row['ativo'] == 1 ? 'Sim': 'Não')."</td>";
                echo "<td><a href ='alteraCliente.php?id=".$row['id']."'>Alterar</a></td>";
                echo "<td><a href ='deletarCliente.php?id=".$row['id']."'>Deletar</a></td>";
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