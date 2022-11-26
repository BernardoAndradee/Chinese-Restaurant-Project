<?php

    include_once('conexao.php');
    
    if(!isset($_POST['update']))
    {
        $id = $_POST['id'];
        $email = $_POST['email'];
        $nome = $_POST['nome'];
        $endereco = $_POST['endereco'];
        $telefone = $_POST['telefone'];
        $senha = $_POST['senha'];
        $id = $_POST['id'];


        $sqlUpdate = "UPDATE bernardo_andrade  SET email ='$email', nome = '$nome', endereco = '$endereco', telefone = '$telefone', senha = '$senha'
        WHERE id ='$id'";

        $result = $conexao->query($sqlUpdate);
    }

    header('location: cadastralistar.php');
?>