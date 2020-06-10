<!Doctype html>

<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Honker Burguer</title>
        <link rel="stylesheet" type="text/css" href="css/reset.css">
        <link rel="stylesheet" type="text/css" href="css/globais.css">
        <link rel="stylesheet" type="text/css" href="css/curiosidades.css">
        <script src="js/jquery-1.11.3.min.js"></script>
        <script src="js/menuMobile.js"></script>
    </head>
    <body>
<!--====== CABEÇALHO ======-->
        <?php
            include_once("MODULOS/header.php");
        ?>
<!--===== TEMPERO =====-->
        <div id="containerTempero" class="center heightAuto">
            <div class="content center heightAuto">
                <h1>TEMPEROS HUNKER</h1>
                <div id="textoTempero">
                    <p>E se você pudesse saber o toque especial do seu lanche favorito? A Hunker te ajuda!<br> Nossa equipe selecionou três ingredientes essênciais da cozinha para você usar em casa.</p>
                </div>
                <div class="caixaTempero">
                    <div class="temperoImagem">
                        <figure class="tempero">
                            <img src="imagens/pimenta.png" alt="Pimenta Negra" title="Pimenta Negra">
                        </figure>
                     </div>
                    <div class="descricaoTempero">
                        <span>PIMENTA NEGRA</span>
                        <p>Possui um sabor forte normalmente utilizado em carnes e molhos para carnes.</p>
                    </div>
                </div>
                <div class="caixaTempero">
                    <div class="temperoImagem">
                        <figure class="tempero">
                            <img src="imagens/comino.png" alt="Cominho" title="Cominho">
                        </figure>
                     </div>
                    <div class="descricaoTempero">
                        <span>COMINHO</span>
                        <p>Pode ser usado em queijos, e carnes. Sendo uma erva muito aromática, ela combina até com conservas e até com compotas doces!</p>
                    </div>
                </div>
                <div class="caixaTempero">
                    <div class="temperoImagem">
                        <figure class="tempero">
                            <img src="imagens/oregano.png" alt="Oregano" title="Oregano">
                        </figure>
                    </div>
                    <div class="descricaoTempero">
                        <span>OREGANO</span>
                        <p>Além de dar mais sabor aos alimentos, a erva oferece uma série de benefícios à saúde.
                        </p>
                    </div>
                </div>             
            </div>
        </div>
<!--==== TRATAMENTO DE CARNES =======-->
      <div id="containerCarne" class="center heightAuto">
          <div class="content center heightAuto">
              <h2>COMO SÃO TRATADAS NOSSAS CARNES</h2>
              <div id="textoCarne" class="heightAuto">
                    <p>
                      Todas as carnes são selecionadas primeiramente pensando-se na qualidade e tempo 
                      entre a compra e o servir pois todo nosso estoque é renovado semana a semana, oferecendo ingredientes
                      frescos. Após, armazenamos tudo em uma temperatura inferior a 5° C negativos no freezer, com um ambiente 
                      limpo fora de contaminação.
                      Na hora do preparo, cortamos a carne em cubos e escolhemos o blend desejado - combinação de carnes
                      e cortes diferentes para a confecção do hambúrguer, moemos duas vezes para garantir a mistura e textura ideal 
                      e colocamos no aro em uma quantidade entre 180g e 200g e temperamos no momento da grelha com um tempo levando
                      em consideração o ponto da carne, mal passado, ao ponto e bem passado.
                    </p>
              </div>
          </div>
      </div>
<!--==== PAINEL CARNES ======-->
      <div id="painelCarne" class="center">
          <figure id="carneImagem">
              <img src="imagens/carnes.PNG" alt="Carne na brasa" title="Carne na brasa">
          </figure>
      </div>
<!--===== CONTAINER INGREDIENTES =====-->
        <div id="containerIngredientes" class="center heightAuto">
            <div class="content center heightAuto">
                <h2>INGREDIENTES BÁSICOS</h2>
                <div id="burguerIngredientes">
                    <figure id="burguerImagem">
                        <img src="imagens/burguerCuriosidades.png" alt="Burguer da Casa" title="Burguer da Casa">
                    </figure>
                    <span>BURGUER DA CASA</span>
                </div>
                <div id="caixaIngredientes" class="heightAuto">
                    <div class="ingrediente heightAuto">
                        <div class="imagemIngredientes">
                             <figure class="ingredientesImagem">
                                 <img src="imagens/alface.png" alt="Ingredientes" title="Ingredientes">
                            </figure>
                        </div>
                        <div class="descricaoIngrediente heightAuto">
                            <span>ALFACE</span>
                            <p>O Burguer da Casa não dispensa um alface, ele deixa o lanche mais leve.</p>
                        </div>
                    </div>
                    <div class="ingrediente heightAuto">
                        <div class="imagemIngredientes">
                             <figure class="ingredientesImagem">
                                 <img src="imagens/tomate.png" alt="Ingredientes" title="Ingredientes">
                            </figure>
                        </div>
                        <div class="descricaoIngrediente heightAuto">
                            <span>TOMATE</span>
                            <p>O tomate acompanha o alface do lanche e garante a umidade.</p>
                        </div>
                    </div>
                    <div class="ingrediente heightAuto">
                        <div class="imagemIngredientes">
                             <figure class="ingredientesImagem">
                                 <img src="imagens/cheddar.png" alt="Ingredientes" title="Ingredientes">
                            </figure>
                        </div>
                        <div class="descricaoIngrediente heightAuto">
                            <span>CHEDDAR</span>
                            <p>Os queijos encontrados na casa Hunker são vários incluindo o cheddar.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
<!--===== AULAS E RECRUTAMENTO =====-->
        <div id="containerAulas" class="center heightAuto">
            <div class="content heightAuto center">
                <h2>A HUNKER QUER FAZER DE VOCÊ UM CHAPEIRO</h2>
                <div class="textoAulas heightAuto">
                    <p>Você já se imaginou trabalhando no ramo alimenticío? E com hamburguer ainda? Então isso é pra você!<br>
                    Nossa hamburgueria esta ensinando chapeiros e auxiliares a trabalhar com lanches e carnes especializadas. </p>
                </div>

                <div class="textoAulas heightAuto">
                    <p>Para entrar nessa equipe de profissionais não é necessário trabalhar na área, apenas se cadastrar em nossa site.  </p>
                </div>
                <div id="botaoCadastro">
                   <a href="contatos.php"> 
                       <span>CADASTRE-SE</span>
                   </a>
                </div>
                <div id="aulas" class="heightAuto">
                    <div class="estudo">
                        <figure class="aulasImagem">
                            <img src="imagens/auxiliar.jpg" alt="Auxiliar" title="Auxiliar">
                        </figure>
                    </div>
                    <div class="estudo">
                        <figure class="aulasImagem">
                        <img src="imagens/professor.jpg" alt="Professor" title="Professor">
                        </figure>
                    </div>
                    <div class="estudo">
                        <figure class="aulasImagem">
                            <img src="imagens/aluno.jpg" alt="Aluno" title="Aluno">
                        </figure>
                    </div>
                </div> 
            </div>
        </div>
<!--===== RODAPÉ =======-->
        <?php
            include_once("MODULOS/footer.php");
        ?>
    </body>
</html>