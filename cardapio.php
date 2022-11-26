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

        $pedido = $_POST['pedido'];
        $quantidade = $_POST['quantidade'];
        $pagamento = $_POST['pagamento'];
        $nome = $_POST['nome'];
        $entrega = $_POST['entrega'];
    
        $result = mysqli_query($conexao, "INSERT INTO bernardo_produto(pedido, quantidade, pagamento, nome, entrega) VALUES ('$pedido','$quantidade','$pagamento','$nome','$entrega')");

        if($result > 0)
        {
            echo "<h4>Pedido efetuado com sucesso! Fique atento que ele chegará em sua casa dentro de 50 minutos!!!</h4>";
        }
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Restaurante Hào chī: Cardápio</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8" crossorigin="anonymous"></script>
 
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
            font-size: 40pt;
            font-style: italic;
            padding-left: 20px;
            margin-left: 20px;
            color: red;
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
        <img src="img/dragon.png" width="750" height="290" align="">

        <h1>Restaurante Hào chī</h1>
        <h2> Culinária Chinesa (中 国 菜)</h2>
            <nav class="menu-navegacao" style="background-color: lightpink;">
                <ul>  
                   <li><a style="color: black;" href="home.php">Home</a></li> &nbsp;&nbsp;&nbsp; 
                   <li><a style="color: black;" href="cardapio.php">Cardápio</a></li> &nbsp;&nbsp;&nbsp; 
                   <li><a style="color: black;" href="suporte.php">Suporte</a></li> &nbsp;&nbsp;&nbsp;
                     &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;       
                   &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; <li><a href ="cardapiolista.php" style ="color: black;">Pedidos</a></li>&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; <li><a style="color: black;" href="sair.php">Logout</a></li> &nbsp;&nbsp;&nbsp; 
                </ul>
            </nav>
            <p>Restaurante tradicional chinês com grande variedade de pratos típicos da região de Cantão.
            Aproveite e prove nossas sobremesas!!!</p>
    </header>
    <span style="text-align:center">
        <h5>Entradas: R$15,00 reais ( serve 1 pessoa )</h5>  
        <img src="img/hargow.jpg" class="rounded-circle"style="margin: 30px" width="280" height="200">Har Gow (1)
        <img src="img/shumai.jpg" class="rounded-circle"style="margin: 30px" width="280" height="200">Shumai (2)
        <img src="img/guioza.jpg" class="rounded-circle"style="margin: 30px"width="280" height="200">Guioza (3)
        <img src="img/xiaolongbao.jpg" class="rounded-circle"style="margin: 30px" width="280" height="200">Xiao Long Bao (4)
        <img src="img/dragon.png" align="right" width="750" height="270">

        <p>Entradinhas únicas e com aquele precinho que cabe no bolso!!!</p>

        
    </span>
    <span style="text-align:center">
        <h5>Prato principal: R$22,00 reais ( Serve 1 pessoa )</h5>
        <img src="img/yakissoba.jpg" class="rounded-circle"style="margin: 30px" width="280" height="200"> Yakissoba (5)
        <img src="img/tofu.jpg" class="rounded-circle"style="margin: 30px" width="280" height="200">Tofu Refogado (6)
        <img src="img/chashao.jpg" class="rounded-circle"style="margin: 30px" width="280" height="200">ChaShao (7) 
        <img src="img/frangoxadrez.jpg" class="rounded-circle"style="margin: 30px" width="280" height="200">Frango Xadrez (8)
        <img src="img/Liang-Pi.jpg" class="rounded-circle"style="margin: 30px" width="280" height="210">LiangPi (10) 
        <img src="img/beijing duck.jpg" class="rounded-circle"style="margin: 30px"width="280" height="200">Pato de pequim (9) 
        <img src="img/yakimeshi.jpg" class="rounded-circle"style="margin: 30px" width="280" height="200">Yakimeshi (11)
        <img src="img/zhajianmian.jpg" class="rounded-circle" style="margin: 30px" width="280" height="200">Zha JiaMian (12) 
        <img src="img/wontonsoup.jpg" class="rounded-circle" style="margin: 30px" width="280" height="200">Sopa Wonton (13)
        <p>Diversidade de pratos exclusivos da culinária chinesa!!!</p>
    </span>

    <span style="text-align:center">
        <h5>Sobremesas: R$5,50 reais ( Serve 1 pessoa )</h5>
        <img src="img/mooncake.jpeg" class="rounded-circle" style="margin: 30px" width="280" height="200">Bolo de Lua (14)
        <img src="img/soupball.jpg" class="rounded-circle" style="margin: 30px" width="280" height="200">Sopinha doce (15)
        <img src="img/sasemeballs.jpg" class="rounded-circle" style="margin: 30px" width="280" height="200">Bolinho frito (16)
        <img src="img/springrolls.jpg" class="rounded-circle" style="margin: 30px;" width="280" height="200">Rolinho Primavera (17)
        <img src="img/dragon.png" align="right" width="750" height="270">

        <p>Sobremesas delicionas, não deixe de provar!!!</p>
    </span>   
    
    <span style="text-align:center">
        <h5>Bebidas: </h5>
        <img src="img/milkteaa.png"  style="margin: 30px" width="260" height="220">Milk Tea R$7 (18)
        <img src="img/soymilkkcut.jpg"  style="margin: 30px" width="170" height="250">Leite de soja R$5 (19)
        <img src="img/wanzai.jpg"  style="margin: 30px" width="280" height="200">Wan Zai R$3 (20)
        <img src="img/cocacolar.png" style="margin: 30px" width="200" height="299">Coca-Cola R$ 8 (21)
        <img src="img/guaranacut.png" style="margin: 30px" width="150" height="230">Guaraná R$ 6 (22)
        <img src="img/dragon.png" align="right" width="750" height="270">
    </span> 
    
    <div class="box">            
                    <form action="cardapio.php" method="POST">
                        <fieldset>
                            <legend><h3>Faça seu pedido aqui!</h3></legend>
                            <br>
                        <div class="textfield">
                            <label for="pedido">Nome do(s) pedido(s):</label>
                            <input style="width: 1000px;" type="text" name="pedido" placeholder="Digite o(s) nome do pedido separando-os por vírgula">
                        </div>
               
                        <div class="textfield">
                            <label for="quantidade">Quantidade do(s) pedido(s):</label>
                            <input style="width: 1000px;" type="text" name="quantidade" placeholder="Digite a quantidade de cada pedido conforme seguido o padrão acima separando os apenas por vírgula, por favor!" >
                        </div>
                        
                        <div class="textfield">
                            <label for="pagamento">Forma de pagamento:</label>
                            <input style="width: 1000px;"type="text" name="pagamento" placeholder="Dinheiro? Especifique o troco, por favor!" >
                        </div>

                        <div class="textfield">
                            <label for="nome">Nome:</label>
                            <input style="width: 1000px;"type="text" name="nome" placeholder="Nome" >
                        </div>

                        <div class="textfield">
                            <label for="entrega">Endereço de entrega:</label>
                            <input style="width: 1000px;"type="text" name="entrega" placeholder="Endereço de entrega" >
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