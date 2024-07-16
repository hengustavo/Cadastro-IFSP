<?php
    include('includes/conexao.php');
    $nome = $_POST['nome'];
    $email = $_POST['email'];
    // INSERT INTO Cidade (nome, estado)
        // VALUES ('$nome, $estado')
        $sql = "INSERT INTO usuário (nome, email)";
        $sql .= "VALUES('".$nome."', '".$email."')";
        echo $sql;
        // executa comando no banco de dados 
        $result = mysqli_query($con,$sql);
        if($result)
        {
            echo "<h2>Dados cadastrados com sucesso!</h2>";
        }
        else
        {
            echo "<h2>Erro ao cadastrar!</h2>";
            echo mysqli_error($con);
        }
    ?>
    <a href="index.html" ><INPUt type="button" value="voltar"></INPUt></a>
?>