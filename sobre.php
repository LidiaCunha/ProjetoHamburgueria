<!Doctype html>

<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <title>Honker Burguer</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" type="text/css" href="css/reset.css">
        <link rel="stylesheet" type="text/css" href="css/globais.css">
        <link rel="stylesheet" type="text/css" href="css/sobre.css">
        <script src="js/jquery-1.11.3.min.js"></script>
        <script src="js/menuMobile.js"></script>
    </head>
    <body>

<!--====== CABEÇALHO =====-->
        <?php
            include_once("MODULOS/header.php");
        ?>
<!--====== HISTORIA ========-->
        <div id="historia" class="center heightAuto">
            <div class="content center heightAuto">
               <h1>HISTORIA</h1>
               <div id="historiaConteudo" class="center heightAuto"> 
                    <p>A Hunker Burguer surgiu de um sonho e de uma necessidade em comer bem e com carnes suculentas. Nós começamos nossa história
                    na Zona-Sul de São Paulo, em uma pequena lanchonete que atendia alguns bairros próximos, mas não tinhamos todos os recursos
                    para colocar nosso sonho a diante, por isso a Hunker foi atrás de especialização. 
                    Em 2017 nos tornamos a maior hamburgueria artesanal da região ganhando o prêmio gastronômico de melhor hamburguer eleito pelo 
                    "Prêmio Bom Gourmet" com o burguer Ignorante. 
                    Desse passo as nossas filiais foram 3 anos, selecionando os melhores produtos e servindo uma variedade de carnes com um 
                    tempero único preparado por nós.
                    Hoje, temos orgulho de afirmar que somos uma casa especializada em hambúrguer e principalmente em proporcionar momentos 
                    inesquecíveis pensando em cada detalhe.</p>
               </div>                
            </div>
        </div>
<!--===== PAINEL ILUSTRATIVO ======-->
        <div id="painel" class="center">
            <figure id="painelImagem">
                <img src="imagens/sobrePainel.PNG" alt="Painel Ilustrativo" title="Painel Ilustrativo">
            </figure>
        </div>
<!--===== MISSÃO E VISÃO ======-->
        <div id="containerMissaoVisao" class="center heightAuto">
            <div class="content center heightAuto">
                <div class="missaoVisao heightAuto">
                    <h2>MISSÃO</h2>
                    <p>Oferecer as pessoas o prazer inconfundível dos maiores e extraordinários hambúrgueres, satisfazendo toda a fome e 
                    marcando na lembrança um happy hour com os melhores amigos.  </p>
                </div>
                <div class="missaoVisao heightAuto">
                    <h2>VISÃO</h2>
                    <p>Ser a maior e melhor hamburgueria artesanal nacional, levando o tempero a todas as regiões com responsabilidade 
                    no uso de produtos de qualidade e um tratamento especializado com carnes nobres, maestria de quem sabe do assunto.</p>
                </div>
            </div>
        </div>
<!--====== VALORES =======-->
        <div id="valores" class="center heightAuto">
            <div class="content center heightAuto">
                <div id="valor">
                    <span>NOSSOS VALORES</span> 
                </div>
                <div id="inovacao">
                    <span>INOVAÇÃO</span>
                </div>
                <div id="qualidade">
                    <span>QUALIDADE</span>
                </div>
                <div id="paixao">
                    <span>PAIXÃO</span>
                </div>
                <div id="responsabilidade">
                    <span>RESPONSABILIDADE</span>
                </div>
            </div>
        </div>
<!--==== RODAPÉ ======-->
        <?php
            include_once("MODULOS/footer.php");  
        ?>
    </body>
</html>