<?php


    if(!empty($_GET['id']))
    {
  
        include_once('conexao.php');

        $id = $_GET['id'];

        $sqlSelect = "SELECT * FROM bernardo_emprego WHERE id=$id";

        $result = $conexao->query($sqlSelect);

        if($result->num_rows > 0)
        {
            while($user_data = mysqli_fetch_assoc($result))
            {
                $nome = $user_data['nome'];
                $email = $user_data['email'];
                $telefone = $user_data['telefone'];
                $vaga = $user_data['vaga'];
                $descri = $user_data['descri'];
            }  
        }
        else
        {
            header('location: contratalista.php');
        }
    }
   

?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Restaurante Hào chī: editar candidatura</title>
    <style>
            h1,h2
            {
                font-size: 15pt;
                font-style: italic;
                padding-left: 15px;
                margin-left: 15px;
                color: red;
                text-shadow: 2px 2px 2px  rgb(100, 9, 9);
            }
            h3
            {
                font-size: 25pt;
                font-style: italic;
                padding-left: 50px;
                color: red;
                float: left;
                
                text-shadow: 2px 2px 2px  rgb(100, 9, 9);
            }             
             h5
            {
                font-size: 20pt;
                font-style: italic ;
                padding-left: 25px;
                margin-left: 25px;
                color: rgb(0, 0, 0);
                text-shadow: 2px 2px 2px  rgb(0, 0, 0);
            }
            p
            {
                font-size: 17pt;
                font-family: cursive;
                padding-left: 20px;
                margin-left: 20px;
                float: center;    
            }                   
            div
            {
                background-color: lightpink;
                margin: 30px 30px 30px;
                border-radius: 25px;
            }  
            article
            {
                font-size: 25pt;
                font-style: italic;
                padding-left: 15px;
                margin-left: 15px;
                float:right;
            }
             button
            {
                font-size: 17pt;
                font-style: italic;
                padding-left: 15px;
                margin-left: 15px;
                float:center;
                border-radius: 15px;
                color:black;
                background-color: black;
                
            }
            .box
            {
                position: absolute;
                top: 50%;
                left: 50%;
                transform: translate(-50%, -50%);
                background-color: rgba(0, 0, 0, o.8);
                padding: 15px;
                width: 20%;
                border-color: black;
            }
            fieldset
            {
                border: 3px solid darksalmon;
            }
    </style>
</head>
<body>
<header>
            <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
            <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css">
            <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8" crossorigin="anonymous"></script>
 
        <img src="img/logogrande.png" width="210" height="230"/>

        <h1>Restaurante Hào chī</h1>
        <h2> Culinária Chinesa (中 国 菜)</h2>
        <img src="img/dragon.png" width="1250" height="590" align="top">

 </header>
<div class="main_login">
        <div class="center_login">
            <div class="box">            
                    <form action="contratasaveedit.php" method="POST">
                        <fieldset>
                            <legend><h3> Edite sua candidatura</h3></legend>
                      
                                <div class="textfield">
                                    <label for="nome">Nome:</label>
                                    <input type="text" name="nome" placeholder="Nome" value="<?php echo $nome ?>">
                                </div>
                    
                                <div class="textfield">
                                    <label for="email">E-mail:</label>
                                    <input type="text" name="email" placeholder="E-mail" value="<?php echo $email ?>">
                                </div>
                                   
                                <div class="textfield">
                                    <label for="telefone">Telefone:</label>
                                    <input type="text" name="telefone" placeholder="Telefone/Celular" value="<?php echo $telefone ?>">
                                </div>

                                <div class="textfield">
                                    <label for="vaga">Vaga:</label>
                                    <input type="text" name="vaga" placeholder="Vaga desejada" value="<?php echo $vaga ?>">
                                </div>

                                <div class="textfield">
                                    <label for="descri">Nos conte sobre você:</label>
                                    <input type="text" name="descri" placeholder="Descreva suas experiências e formação caso seja relevante a vaga" value="<?php echo $descri ?>">
                                </div>

                                <input type="hidden"name="id" value="<?php echo $id?>">
                                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type ="submit" name ="submit" id ="submit" style ="background-color: indianred; font-size: 15pt;" class ="inputSubmit">
                                <br></br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href ="contratalista.php" style ="color: black; font-size: 10pt;">Voltar</a>                        </fieldset>                     
                    </form>           
            </div>
        </div>
    </div>
</body>
</html>
<?php
require("footer.php");
?>