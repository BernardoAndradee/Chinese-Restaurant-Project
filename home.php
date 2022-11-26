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


    //$sql = "SELECT * FROM cliente ORDER BY id DESC";

    //$result = $conexao->query($sql);

    //print_r($result);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=, initial-scale=1.0">
    <title>Restaurante Hào chī: Home</title>

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
             h5
            {
                font-size: 45pt;
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
            h3
            {
                font-size: 17pt;
                font-family: cursive;
                padding-left: 15px;
                margin-left: 15px;
                float: center;  
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
            div
            {
                background-color: lightpink;
                margin: 20px 20px 20px;
                border-radius: 25px;
                color: black;
                border-radius: 80px;

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
            article{
                width: 30%;
                padding-left: 30px;
                margin-left: 30px;
                float: left;
                font-size: 15pt;
                font-family: cursive;
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
                   &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; <li><a style="color: black;" href="contrata.php">Estamos contratando! (Garçom e Cozinheiro)</a></li>&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; <li><a style="color: black;" href="sair.php">Logout</a></li> &nbsp;&nbsp;&nbsp; 
                </ul>
            </nav>
            <p>Restaurante tradicional chinês com grande variedade de pratos típicos da região de Cantão.
            Aproveite e prove nossas sobremesas!!!</p>
    </header>
</body>
</html>
    
    <aside>Venha experimentar a excepcional culinária chinesa e conhecer seus incriveis sabores. A região de Cantão é uma das mais populosas da China, chegando à aproximadamente 104.300.000 de habitantes. Para alimentar toda essa massa de pessoas, seus locais desenvolveram uma culinária rica em uma grande variedade de comida, destacando o seu sabor original.  </aside>
    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<img src="img/ifood banner.png" style="border-radius:80px;"class="" width="800" height="270">
    <br></br>

    <h3>Conheça alguns de nossos pratos mais pedidos:</h3>
    <article><img src="img/muralha.png"  width="290" height="500"></article>


    <div >
        <p>Guioza (饺子)&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Xiao Long Bao (小籠包)</p>
        <img src="img/guioza.jpg"  class="rounded-circle" width="280" height="200">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <img src="img/xiaolongbao.jpg" class="rounded-circle" width="280" height="200" alt=""><br>
        <p>Yakissoba (炒面)&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Tofu refogado (红烧豆腐)</p>
        <img src="img/yakissoba.jpg" class="rounded-circle" width="280" height="200">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <img src="img/tofu.jpg" class="rounded-circle" width="280" height="200" alt="">
        <br><br><br>
        <li><a href ="cadastralistar.php" style ="color: black;">Cadastros</a></li>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<li><a style="color: black;" href="contratalista.php">Listar candidaturas</a></li>
    </div>

</body>
</html>

<?php 
require("footer.php");
?>