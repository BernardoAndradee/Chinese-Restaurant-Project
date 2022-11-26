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
        $vaga = $_POST['vaga'];
        $descri = $_POST['descri'];
    
        $result = mysqli_query($conexao, "INSERT INTO bernardo_emprego(nome, email, telefone, vaga, descri) VALUES ('$nome','$email','$telefone','$vaga','$descri')");

        if($result > 0)
        {
            echo "<h4>Formulário preenchido com sucesso! Fique atento(a) ao seu e-mail!</h4>";
        }
    }
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contratação</title>
    <style>  
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
            font-size: 100pt;
            font-style: italic;
            padding-left: 20px;
            margin-left: 20px;
            color: red;
            text-shadow: 2px   rgb(0, 0, 0);

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

<body>
<header>
            <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
            <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css">
            <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8" crossorigin="anonymous"></script>
 
        <img src="img/logogrande.png" width="210" height="230"/>

        <h1>Restaurante Hào chī</h1>
        <h2> Culinária Chinesa (中 国 菜)</h2>

 </header>

 <div class="main_login">

    <div class="center_login">   
        <div class="box">     
            <form action="contrata.php" method="POST">
                <fieldset>
                    <legend><h3>Deixei suas informações aqui!!!</h3></legend>
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
                            <label for="vaga">Vaga que deseja:</label>
                            <input style="width: 1000px;"type="text" name="vaga" placeholder="Nome da vaga">
                        </div>

                        <div class="textfield">
                            <label for="descri">Nos conte sobre você:</label>
                            <input style="width: 1000px;"type="text" name="descri" placeholder="Descreva sua experiência (e formação caso tenha alguma relevante a vaga)" >
                        </div>

                            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type ="submit" name ="submit" id ="submit" style ="background-color: indianred; font-size: 15pt;" class ="inputSubmit">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href ="home.php" style ="color: black; font-size: 10pt;">Voltar</a>
                    </fieldset>                     
                </form>  
            </div>             
        </div>
        </div>      
</body>
</html>
<?php
require("footer.php");
?>