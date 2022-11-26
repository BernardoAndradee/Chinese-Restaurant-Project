<?php
    include_once('conexao.php');

    if(!empty($_GET['id']))
    { 
        $id = $_GET['id']; 
        $sqlSelect = "SELECT * FROM bernardo_reclamacao WHERE id=$id";
        $result = $conexao->query($sqlSelect);
        
        if($result->num_rows > 0)
        {
            $sqlDelete = "DELETE FROM bernardo_reclamacao WHERE id='$id'";
            $resultDelete = $conexao->query($sqlDelete);
        }          
    }
    header("location: suportelista.php");
?>  