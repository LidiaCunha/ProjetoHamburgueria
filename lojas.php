<!Doctype html>

<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title> Honker Burguer </title>
        <link rel="stylesheet" type="text/css" href="css/reset.css">
        <link rel="stylesheet" type="text/css" href="css/globais.css">
        <link rel="stylesheet" type="text/css" href="css/lojas.css">
        <script src="js/jquery-1.11.3.min.js"></script>
        <script src="js/menuMobile.js"></script>
    </head>
    <body>
<!--====== CABEÇALHO =====-->
        <?php
            include_once("MODULOS/header.php");
        ?>
<!--===== LOJAS FISICAS GIRATÓRIO =======-->
        <div id="containerLojas" class="center heightAuto">
            <div id="contentLoja" class="center heightAuto">
                <h1>LOJAS FIXAS</h1>
                <div class="flipper">
                    <div class="inner">
                         <div class="frente">
                            <figure class="flipperImagem">
                                <img src="imagens/lojaItaquera.jpg" alt="Loja de Itaquera" title="Loja de Itaquera">
                            </figure>
                        </div>
                        <div class="verso">
                           <p>No segundo ano da nossa filial na cidade de Itaquera atinguimos nossa meta de 100.000 hambúrgues 
                           no ano e criamos o evento semestral de "Burguer e Cerveja" localizado nesta unidade.</p>
                        </div>
                    </div>
                </div>
                <div class="flipper">
                    <div class="inner">
                        <div class="frente">
                            <figure class="flipperImagem">
                                <img src="imagens/lojaBibi.jpg" alt="Loja de Itaim Bibi" title="Loja de Itaim Bibi">
                            </figure>
                        </div>
                        <div class="verso">
                            <p>Hoje, nossa matriz em Itaim Bibi comporta cerca de 80% do estoque total das hamburguerias Honker Burguer 
                            e é lá que realizamos a bancada de degustação dos lançamentos e sugestões.</p>
                        </div>
                    </div>
                </div>
                <div class="flipper">
                    <div class="inner">
                        <div class="frente">
                            <figure class="flipperImagem">
                            <img src="imagens/lojaMooca.jpg" alt="Loja da Mooca" title="Loja da Mooca">
                            </figure>
                        </div>
                        <div class="verso">
                            <p>A primeira filial da Hunker Burguer encontra-se na região da Mooca, onde atende mais de 980 clientes
                            por dia e emprega cerca de 30 pessoas ao mês, participando do núcleo econômico da região.</p>
                        </div>
                    </div>
                </div>
            </div>
         </div>
<!--====== CONTAINER LOGRADOURO ====-->
        <div id="containerLogradouro" class="center heightAuto">
            <div class="content center heightAuto">
                <div class="esquerdo" class="heightAuto">
                   <p> Av. Luis Carlos Berrini, 666 - Itaim Bibi, São Paulo - SP, 04571-060<br> 
                   Telefone: (11) 2597-8410</p> 
                </div>
                <div class="direito" class="heightAuto">
                    <p> R. Dr. João Batista de Lacerda, 753 - Parque da Mooca, São Paulo - SP, 03177-010<br>
                    Telefone: (11) 2076-8811</p>
                </div>
                <div class="esquerdo" class="heightAuto">
                    <p> R. Fontoura Xavier, 1090 - Itaquera, São Paulo - SP, 08295-300<br>
                    Telefone: (11) 2076-8811</p>
                </div>
                <div class="direito" class="heightAuto">
                    <p> Tatuapé, São Paulo - SP, 03081-012<br>
                    Telefone: (11) 1125-8240</p>
                </div>
            </div>
        </div>
<!--===== CONTAINER FILIAL PRINCIPAL ======--> 
        <div id="containerFilialPrincipal" class="center heightAuto"> 
            <div class="content center heightAuto">
                <div id="textoPrincipal" class="heightAuto">
                    <p>Se você quiser novidade, Tatuapé é a cidade que atualmente temos nossa maior filial, conhecida pelo nosso hambúrguer especial "Exagerado"
                    originalidade da marca hamburgueria Hunker Burguer.<br>
                    Caso o local não seja o mais acessível procure os estabelecimentos mais próximos a sua residência e fique atento aos lançamentos que ocorrem nas lojas.
                    </p>
                </div>
                <div id="principal">
                    <a href="https://www.google.com/maps/search/hamburgueria+tatuape/@-23.5550064,-46.9555413,9z">
                         <figure id="principalImagem">
                            <img src="imagens/mapa.PNG" alt="Tatuapé" title="Tatuapé">
                        </figure>
                    </a>
                </div>
            </div>
        </div>
<!--===== PAINEL FOODTRUCK =====-->
        <div id="painelFoodTruck" class="center">
            <figure id="foodTruckImagem">
                <img src="imagens/foodtruck.PNG" alt="FoodTuck" title="FoodTruck">
            </figure>
        </div>
<!--===== TEXTO FOODTRUCK ======-->
        <div id="textoFoodTruck" class="center heightAuto">
            <div class="content center heightAuto">
                <h2>LOJA MÓVEL</h2>
                <div id="textoConteudo" class="center heightAuto">
                    <p>O lançamento do nosso food truck foi realizado em 2019 com o objetivo de atender outras regiões além da Zona-Sul, onde 
                    está localizada nossa matriz. Em seu compartimento levamos todos os lanches que estão em nossas lojas fixas mas semanalmente reabastecemos nosso carro com o lanche mais pedido da região e realizamos promoções que encontram-se apenas em nossa loja móvel.
                    Estar todos os dias rodando pelas ruas de São Paulo em contato direto com os clientes nos dá um feedback positivo da aceitação dos burgers, oportunidade de melhorar o atendimento e o sabor de nossos lanches.</p>
                </div>
            </div>
        </div>
<!--===== RODAPÉ =====-->
        <?php
            include_once("MODULOS/footer.php");
        ?>
    </body>
</html>