<!Doctype html>

<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Honker Burguer</title>
        <link rel="stylesheet" type="text/css" href="css/reset.css">
        <link rel="stylesheet" type="text/css" href="css/globais.css">
        <link rel="stylesheet" type="text/css" href="css/queridinho.css">
        <script src="js/jquery-1.11.3.min.js"></script>
        <script src="js/menuMobile.js"></script>
    </head>
    <body>
<!--==== CABEÇALHO =======-->
        <?php
            include_once("MODULOS/header.php");
        ?>
<!--====== PRODUTO DO MÊS =====-->
        <div id="produtoMes" class="center heightAuto">
            <div class="content center heightAuto">
                <div id="titulo">
                    <div id="imagemTitulo">
                        <figure id="placaImagem">
                            <img src="imagens/tituloQueridinho.png" alt="Placa do queridinho" title="Placa do queridinho">
                        </figure>
                    </div>
                </div>
                <div class="produto heightAuto center">
                    <div class="burguer center">
                        <figure class="produtoMes">
                            <img src="imagens/produtoMes.png" alt="Produto do mês" title="Produto do mês">
                        </figure>
                    </div>
                    <div class="nome center">
                        DUPLA CARNE
                    </div>
                    <div class="informacoes heightAuto">
                         <div class="nome center">
                            INGREDIENTES
                        </div>
                        <ul id="ingredientesLista" class="heightAuto center">
                            <li class="ingredientesItem">Duas Carnes</li>
                            <li class="ingredientesItem">Queijo Cheddar</li>
                            <li class="ingredientesItem">Queijo Prata</li>
                            <li class="ingredientesItem">Alface</li><li class="ingredientesItem">Tomate</li><li class="ingredientesItem">Cebola Roxa</li>
                            <li class="ingredientesItem">Molho Barbecue</li>
                        </ul>
                    </div>  
                    <div class="informacoes heightAuto">
                         <div class="nome center">
                            MÉDIA VENDIDA
                        </div>
                        <p>Nosso destaque Dupla Carne foi vendido por todo o período do mês em todas as lojas, chegando em 420 burguers em média todos os dias.</p>
                    </div>  
                    <div class="informacoes heightAuto">
                         <div class="nome center">
                           CRIAÇÃO
                        </div>
                        <p>Nosso destaque foi criado no ano passado com a idéia de ser um burguer simples e nutritivo, composto por ingredientes que os clientes constumam comer.</p>
                    </div>
                </div>
            </div>
        </div>
<!--===== RODAPÉ ======-->
        <?php
            include_once("MODULOS/footer.php");  
        ?>
    </body>
</html>