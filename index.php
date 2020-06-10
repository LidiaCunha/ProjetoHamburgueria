<!Doctype html>

<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <title>Honker Burguer</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" type="text/css" href="css/reset.css">
        <link rel="stylesheet" type="text/css" href="css/globais.css">
        <link rel="stylesheet" type="text/css" href="css/index.css">
        <script src="js/jquery-1.11.3.min.js"></script>
        <script src="js/menuMobile.js"></script>
        <script src="js/menuMobileBurguers.js"></script>
    </head>
    <body>
<!--====== CABEÇALHO ======-->
        <?php
            include_once("MODULOS/header.php");
        ?>
<!--===== SLIDER ======-->
        <div id="containerSlider" class="center">
            <div id="caixaSlider">
<!--========= IMAGEM MOBILE ========-->
                <div id="sliderMobile">
                    <figure id="sliderMobileImagem">
                        <img  src="imagens/local.PNG" alt="Loja" title="Loja Hunker">
                    </figure>
                </div>
<!--======== SLIDER =========-->
                <div class="nav" id="anterior">&laquo;</div>

                <ul id="slider">
                    <li class="itensSlider">
                        <figure class="imagemSlider">
                            <img src="imagens/uberEats.PNG" alt="Uber Eats" title="Uber Eats">
                        </figure>
                    </li>
                    <li class="itensSlider">
                        <figure class="imagemSlider">
                            <img src="imagens/local.PNG" alt="Loja Hunker" title="Loja Honker">
                        </figure>
                    </li>
                    <li class="itensSlider">
                        <figure class="imagemSlider">
                            <img src="imagens/ifood.PNG" alt="Ifood" title="Ifood">
                        </figure>
                    </li>
                    <li class="itensSlider">
                        <figure class="imagemSlider">
                            <img src="imagens/cerveja.PNG" alt="Evento Hunker" title="Evento Hunker">
                        </figure>
                    </li>
                </ul>

                <div class="nav" id="posterior">&raquo;</div>
            </div>
        </div>
<!--====== PRODUTOS ======-->
        <div id="containerProdutos" class="heightAuto center">
<!--====== NOME PRODUTOS ======-->
            <div id="menuMobileBurguers" class="center">
            
            </div>
            <div id="containerItens">
                <ul id="listaItens">
                    <li class="itens">
                        <span>Burguer Egg </span>
                    </li>
                    <li class="itens">
                        <span>Burguer Exagerado</span>
                    </li>
                    <li class="itens">
                        <span>Burguer Cheddar</span>
                    </li>
                </ul>
            </div>
<!--====== BURGUES =======-->
            <div id="containerBurgues">
                <div class="burgues">
                    <figure class="produtoImagem center">
                        <img src="imagens/burguer1.png" title="Buguer Cheddar" alt="Burguer Cheddar">
                    </figure>
                    <div class="produtoDescricao">
                        <p>Nome:</p>
                        <p>Descrição:</p>
                        <p>Preço:</p>
                    </div>
                    <div class="botaoDetalhes">
                        <span>Detalhes</span>
                    </div>
                </div>
                <div class="burgues">
                    <figure class="produtoImagem center">
                        <img src="imagens/burguer2.png" alt="Buguer CheddarBuguer" title="Buguer Cheddar">
                    </figure>
                    <div class="produtoDescricao">
                        <p>Nome:</p>
                        <p>Descrição:</p>
                        <p>Preço:</p>
                    </div>
                    <div class="botaoDetalhes">
                       <span>Detalhes</span>
                    </div>
                </div>
                <div class="burgues">
                    <figure class="produtoImagem center">
                        <img src="imagens/burguer3.png" alt="Buguer Cheddar" title="Buguer Cheddar">
                    </figure>
                    <div class="produtoDescricao">
                        <p>Nome:</p>
                        <p>Descrição:</p>
                        <p>Preço:</p>
                    </div>
                    <div class="botaoDetalhes">
                        <span>Detalhes</span>
                    </div>
                </div>
                <div class="burgues">
                    <figure class="produtoImagem center">
                        <img src="imagens/burguer4.png" alt="Buguer Cheddar" title="Buguer Cheddar">
                    </figure>
                    <div class="produtoDescricao">
                        <p>Nome:</p>
                        <p>Descrição:</p>
                        <p>Preço:</p>
                    </div>
                    <div class="botaoDetalhes">
                        <span>Detalhes</span>
                    </div>
                </div>
                <div class="burgues">
                    <figure class="produtoImagem center">
                        <img src="imagens/burguer5.png" alt="Buguer Cheddar" title="Buguer Cheddar">
                    </figure>
                    <div class="produtoDescricao">
                        <p>Nome:</p>
                        <p>Descrição:</p>
                        <p>Preço:</p>
                    </div>
                    <div class="botaoDetalhes">
                        <span>Detalhes</span>
                    </div>
                </div>
                <div class="burgues">
                    <figure class="produtoImagem center">
                        <img src="imagens/burguer6.png" alt="Buguer Cheddar" title="Buguer Cheddar">
                    </figure>
                    <div class="produtoDescricao">
                        <p>Nome:</p>
                        <p>Descrição:</p>
                        <p>Preço:</p>
                    </div>
                    <div class="botaoDetalhes">
                        <span>Detalhes</span>
                    </div>
                </div>
            </div>
<!--===== REDES SOCIAIS ======-->
            <div id="redesSociaisHome">
                <figure class="redesHomeImagem">
                    <a href="https://pt-br.facebook.com/">
                         <img src="imagens/facebook.png" alt="Facebook" title="Facebook">
                    </a>
                </figure>
                <figure class="redesHomeImagem">
                    <a href="https://www.instagram.com/?hl=pt-br">
                        <img src="imagens/instagram.png" alt="Instagram" title="Instagram">
                    </a>
                </figure>
                <figure class="redesHomeImagem">
                    <a href="https://twitter.com/login?lang=pt">
                         <img src="imagens/twitter.png" alt="Twitter" title="Twitter">
                     </a>
                </figure>
            </div>   
        </div>
<!--===== RODAPÉ ======-->
        <?php
            include_once("MODULOS/footer.php");
        ?>
        <script src="js/slider.js"></script>
    </body>
</html>