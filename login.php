<?php
include('conexao.php');
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Restaurante Hào chī: Login</title>
    <style>
            h1,h2
            {
                font-size: 10pt;
                font-style: italic;
                padding-left: 15px;
                margin-left: 15px;
                color: red;
                text-shadow: 2px 2px 2px  rgb(100, 9, 9);
            } h3
            {
                font-size: 15pt;
                font-style: italic;
                padding-left: 15px;
                margin-left: 15px;
                color: red;
                float: center;
                
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
            a, button
            {
                font-size: 17pt;
                font-style: italic;
                padding-left: 15px;
                margin-left: 15px;
                float:center;
                border-radius: 15px;
                color:red;
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
                border-radius: 80px;
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
        <div class="left_login">


            <div class="box">            
                    <form action="testlogin.php" method="POST">
                        <fieldset>
                            <legend><h3>Login</h3></legend>
                            <div class="textfield">
                                <label for="email">E-mail:</label>
                                <input type="text" name="email" placeholder="E-mail">
                            </div>
               
                            <div class="textfield">
                                <label for="senha">Senha :</label>
                                <input type="password" name="senha" placeholder="Senha" >
                            </div>
                            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type ="submit" name ="submit" value ="Enviar" style ="background-color: indianred; font-size: 15pt; " class ="inputSubmit">         <a href ="cadastra.php" style ="color: black; font-size: 10pt;">cadastre-se</a>

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