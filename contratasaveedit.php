<?php

    include_once('conexao.php');
    
    if(!isset($_POST['update']))
    {
        $id = $_POST['id'];
        $nome = $_POST['nome'];
        $email = $_POST['email'];
        $telefone = $_POST['telefone'];
        $vaga = $_POST['vaga'];
        $descri = $_POST['descri'];


        $sqlUpdate = "UPDATE bernardo_emprego  SET nome ='$nome', email = '$email', telefone = '$telefone', vaga = '$vaga', descri = '$descri'
        WHERE id ='$id'";

        $result = $conexao->query($sqlUpdate);
    }

    header('location: contratalista.php');
?>