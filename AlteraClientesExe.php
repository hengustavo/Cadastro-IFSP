<?php
    include('includes/conexao.php');
    $id = $_POST['id'];
    $email = $_POST['email'];
    $nome = $_POST['nome'];
    $senha = $_POST['senha']
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Alterar</title>
</head>
<body>
    <h1>Alteração de Clientes</h1>
    <?php
        echo "<p>ID = $id</p>";
        echo "<p>Nome: $nome</p>";
        echo "<p>Email: $email</p>";
        echo "<p>Senha: $senha</p>";
        $sql = "UPDATE Cliente SET nome = '$nome', email = '$email', senha = '$senha' WHERE id = $id";
        $result = mysqli_query($con, $sql);
        if($result)
            echo "Dados Atualizados!";
        else
            echo "Erro ao atualizar dados!<br>".mysqli_error($con);
    ?>
</body>
</html>