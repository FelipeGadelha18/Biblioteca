<?php
    session_start();


   if(isset($_POST['submit']) && !empty($_POST['nome']) && !empty($_POST['pass']))
   {
        
        include_once('config.php');

        $email = $_POST['nome'];
        $senha = $_POST['pass'];


        $sql = "SELECT *FROM cadastro Where nome = '$nome' and pass = '$senha'";
        $result = $conexao->query($sql);


        if(mysqli_num_rows($result) < 1){

            unset($_SESSION['nome']);
            unset($_SESSION['pass']);
            header('Location: paginaHome.html');

        }else{
            $_SESSION['nome'] = $nome;
            $_SESSION['pass'] = $senha;
            header('Location: cadastro.php');

        }

   }else{
        header('Location: login.php');
   }


?>