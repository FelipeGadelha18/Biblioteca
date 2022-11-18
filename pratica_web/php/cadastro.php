<?php

include ("conexao.php");

$nome = $_POST['nome'];
$sobrenome = $_POST['sobrenome'];
$email = $_POST['email'];
$senha = $_POST['senha'];

$sql = "INSERT INTO cadastro(cadastro_id, cadastro_nome, cadastro_sobrenome, cadastro_email, cadastro_senha) VALUES (NULL ,'$nome', '$sobrenome', '$email', '$senha')";

if(mysqli_query($conexao, $sql))
    return('paginaHome.html');
else
    echo "Erro!".mysqli_connect_error($conexao);

mysqli_close($conexao);


?>