<?php

    include_once('conexao.php');
    
    if(!isset($_POST['update']))
    {
        $id = $_POST['id'];
        $pedido = $_POST['pedido'];
        $quantidade = $_POST['quantidade'];
        $pagamento = $_POST['pagamento'];
        $nome = $_POST['nome'];
        $entrega = $_POST['entrega'];


        $sqlUpdate = "UPDATE bernardo_produto  SET pedido ='$pedido', quantidade = '$quantidade', pagamento = '$pagamento', nome = '$nome', entrega = '$entrega'
        WHERE id ='$id'";

        $result = $conexao->query($sqlUpdate);
    }

    header('location: cardapiolista.php');
?>