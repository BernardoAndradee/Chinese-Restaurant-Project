<?php

    include_once('conexao.php');
    
    if(!isset($_POST['update']))
    {
        $id = $_POST['id'];
        $nome = $_POST['nome'];
        $email = $_POST['email'];
        $telefone = $_POST['telefone'];
        $dia = $_POST['dia'];
        $reclamacao = $_POST['reclamacao'];


        $sqlUpdate = "UPDATE bernardo_reclamacao  SET nome ='$nome', email = '$email', telefone = '$telefone', dia = '$dia', reclamacao = '$reclamacao'
        WHERE id ='$id'";

        $result = $conexao->query($sqlUpdate);
    }

    header('location: suportelista.php');
?>