<?php

//print_r($_REQUEST);
    session_start();

    if(isset($_POST['submit']) && !empty ($_POST['email']) && !empty($_POST['senha']))
    {

        include('conexao.php');
        $email = ($_POST['email']);
        $senha = ($_POST['senha']); 

        //print_r('E-mail : '. $email);
        //print_r('<br>');
        //print_r('Senha: ' . $senha);
        
        
        $sql = "SELECT * FROM bernardo_andrade WHERE email = '$email' AND senha = '$senha'";

        $result = $conexao ->query($sql);

        //print_r($result);
        //print_r($sql);
        print_r("Bem vindo," .$nome);

        if(mysqli_num_rows($result) < 1)
        {
            unset($_SESSION['email']);
            unset($_SESSION['senha']);
            header('Location: login.php');
        }
        else
        {
            $_SESSION['email'] = $email;
            $_SESSION['senha'] = $senha;

            header('Location: home.php');
        }

    }
?>