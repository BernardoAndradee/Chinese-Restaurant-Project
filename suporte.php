<?php 

    session_start();
    include("conexao.php");
    //print_r($_SESSION);
    if((!isset($_SESSION['email']) == true) and (!isset($_SESSION['senha']) == true))
    {

        
        unset($_SESSION['email']);
        unset($_SESSION['senha']);
        header('Location: login.php');
    }
    $logado = $_SESSION['email'];

    if(isset($_POST['submit']))
    {
        include_once('conexao.php');

        $nome = $_POST['nome'];
        $email = $_POST['email'];
        $telefone = $_POST['telefone'];
        $dia = $_POST['dia'];
        $reclamacao = $_POST['reclamacao'];
    
        $result = mysqli_query($conexao, "INSERT INTO bernardo_reclamacao(nome, email, telefone, dia, reclamacao) VALUES ('$nome','$email','$telefone','$dia','$reclamacao')");

        if($result > 0)
        {
            echo "<h4>Reclamação efetuada com sucesso! Fique atento ao seu telefone/e-mail porque iremos retornar através deles!</h4>";
        }
    }

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Restaurante Hào chī: Suporte</title>
    
        <style>  
            h1 
                {
                    font-size: 40pt;
                    font-style: italic;
                    padding-left: 15px;
                    margin-left: 15px;
                    color: red;
                    text-shadow: 2px 2px 2px  rgb(100, 9, 9);
                }
            h2  
                {
                    font-size: 30pt;
                    font-style: italic;
                    padding-left: 15px;
                    margin-left: 15px;
                    color: red;
                    text-shadow: 2px 2px 2px rgb(100, 9, 9);
                }  
            li  
                {
                    font-size: 17pt;
                    color: black;
                    padding-left: 15px;
                    margin-left: 15px;
                }       
            ul 
                {
                    display:flex;
                    list-style-type: none;
                    padding-left: 15px;
                    margin-left: 15px;
                    color: black;
                }  
            span
                {
                    font-size: 20px;
                    font-family: cursive;
                    border-radius: 25px;  

    
                }
            aside 
                {
                
                    width: 30%;
                    padding-left: 30px;
                    margin-left: 30px;
                    float: left;  
                    font-size: 15pt;
                    font-family: cursive;
                    border-radius: 20px;
                    background-color: palevioletred;
                    color: white;
                } 
            div
                {
                    background-color: white;
                    margin: 20px 20px 20px;
                    border-radius: 25px;  

                } 
            p
                {
                    font-size: 17pt;
                    font-family: cursive;
                    padding-left: 15px;
                    margin-left: 15px;
                }               
                 
            h5  {
                    background-color: lightpink;
                    font-size: 20px;
                    font-family: cursive;
                    text-align: left;
                    padding-left: 10px;
                    margin-left: 10px;
                    color: black;
                }       
                strong
                {
                    font-size: 17pt;
                }
        article{
            font-size: 20pt;
            text-align: left;
            padding-left: 10px;
            margin-left: 10px;
        }
        h1{
            font-size: 40pt;
            font-style: italic;
            padding-left: 15px;
            margin-left: 15px;
            color: red;
            text-shadow: 2px 2px 2px  rgb(100, 9, 9);
         }
        h2{
            font-size: 30pt;
            font-style: italic;
            padding-left: 15px;
            margin-left: 15px;
            color: red;
            text-shadow: 2px 2px 2px rgb(100, 9, 9);
        }     
        p
         {
            font-size: 17pt;
            font-family: cursive;
            padding-left: 15px;
            margin-left: 15px;
        }         
        h3{
            font-size: 30pt;
                font-style: italic;
                padding-left: 15px;
                margin-left: 15px;
                color: red;
                text-shadow: 2px 2px 2px rgb(100, 9, 9);
        } 
      
        li{
            font-size: 17pt;
            color: black;
            padding-left: 15px;
            margin-left: 15px;
        }       
        ul{
            display:flex;
            list-style-type: none;
            padding-left: 15px;
            margin-left: 15px;
            color: black;
        } 
        footer{
            text-align: left;
            font-size: 15pt;
            background-color: whitesmoke;
        } 
        h4
        {
            font-size: 60pt;
            font-style: italic;
            padding-left: 20px;
            margin-left: 20px;
            color: red;
            text-shadow: 2px  rgb(100, 9, 9);

        }  
        h5, h6 {
            background-color: lightpink;
            font-size: 20px;
            text-align: left;
            padding-left: 10px;
            margin-left: 10px;
        }  
        span{
            font-size: 20px;
            font-family: cursive;
            background-color: lightpink;
            border-radius: 25px;

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
                
                background-color: rgba(0, 0, 0, o.8);
                padding: 15px;
                width: 80%;
                border-color: black;
            }
            fieldset
            {
                border: 3px solid darksalmon;
            }                   

                              
    </style>
</head>
<bod>  

<!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title></title>
    </head>
<body>
    <header>
            <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
            <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css">
            <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8" crossorigin="anonymous"></script>
 
        <img src="img/logogrande.png" width="210" height="230"/>
        <img src="img/dragon.png" width="750" height="290" align="">

        <h1>Restaurante Hào chī</h1>
        <h2> Culinária Chinesa (中 国 菜)</h2>
            <nav class="menu-navegacao" style="background-color: lightpink;">
                <ul>  
                   <li><a style="color: black;" href="home.php">Home</a></li> &nbsp;&nbsp;&nbsp; 
                   <li><a style="color: black;" href="cardapio.php">Cardápio</a></li> &nbsp;&nbsp;&nbsp; 
                   <li><a style="color: black;" href="suporte.php">Suporte</a></li> &nbsp;&nbsp;&nbsp;
                     &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;       
                   &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;  &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; <li><a style="color: black;" href="suportelista.php">Comentários</a></li>&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; <li><a style="color: black;" href="sair.php">Logout</a></li> &nbsp;&nbsp;&nbsp; 
                </ul>
            </nav>
            <p>Restaurante tradicional chinês com grande variedade de pratos típicos da região de Cantão.
            Aproveite e prove nossas sobremesas!!!</p>
    </header>
</body>
</html>
    <div style="text-align:center">
        <aside><strong>COMO FAÇO MEU PEDIDO SEM SER PELO SITE, HÀO CHI ?!</strong>
Anote o número das delícias que você irá pedir para facilidar na hora de fazer o pedido,
            disque nosso número e aguarde, ou mande um zap zap que já iremos atender você.</strong>
            Horário de Funcionamento: Segunda à sexta das 9h às 22h
            Sábados e Domingos das 9h às 19h (Não abrimos em dia de feriado).</aside>
                <img src="img/ifood banner.png" width="800" height="270">           
    </div>
        <h5>Estamos apenas a 5 minutos da estação Estudantes, localizados na R. Barão de Jaceguai, 1261, no centro de Mogi das Cruzes</h5>
        <img src="img/MAPARES2.png" border-radius="20px" width="650" height="350"> 
        <img src="img/dragon.png" width="750" height="270" >

        <div class="box">            
        <form action="suporte.php" method="POST">
            <fieldset>
                <legend><h3>Faça sua reclamação aqui!</h3></legend>
                <br>
                    <div class="textfield">
                        <label for="nome">Nome:</label>
                        <input style="width: 1000px;" type="text" name="nome" placeholder="Seu nome">
                    </div>
               
                    <div class="textfield">
                        <label for="email">Email:</label>
                        <input style="width: 1000px;" type="text" name="email" placeholder="Seu e-mail">
                    </div>
                        
                    <div class="textfield">
                        <label for="telefone">Telefone:</label>
                        <input style="width: 1000px;"type="text" name="telefone" placeholder="Seu telefone">
                    </div>

                    <div class="textfield">
                        <label for="dia">Dia:</label>
                        <input style="width: 1000px;"type="text" name="dia" placeholder="Dia do ocorrido">
                    </div>

                    <div class="textfield">
                        <label for="reclamacao">O que aconteceu:</label>
                        <input style="width: 1000px;"type="text" name="reclamacao" placeholder="Descreva com detalhes o que aconteceu" >
                    </div>

                        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type ="submit" name ="submit" id ="submit" style ="background-color: indianred; font-size: 15pt;" class ="inputSubmit">
            </fieldset>                     
        </form>           
    </div>
</body>
</html>
<?php
require("footer.php");
?>