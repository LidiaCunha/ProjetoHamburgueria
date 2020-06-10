<?php
    echo('<header>
            <!-- MENU DESKTOP   -->
            <div class=" container center">
                <div id="logo">
                     <a href="index.php">
                        <figure id="imagemLogo">
                            <img src="imagens/logo.png" alt="Logo" title="Logo">
                        </figure>
                     </a>
                </div>
                <nav id="menu">
                    <ul id="listaMenu">
                        <li class="itemMenu">
                            <a href="promocoes.php">
                                PROMOÇÕES
                            </a>
                        </li>
                        <li class="itemMenu">
                            <a href="queridinho.php">
                                QUERIDINHO
                            </a>
                        </li>
                        <li class="itemMenu">
                            <a href="lojas.php">
                                LOJAS
                            </a>
                        </li>
                        <li class="itemMenu">
                            <a href="curiosidades.php">
                                CURIOSIDADES
                            </a>
                        </li>
                        <li class="itemMenu">
                            <a href="sobre.php">
                                SOBRE
                            </a>
                        </li>
                        <li class="itemMenu">
                            <a href="contatos.php">
                                CONTATOS
                            </a>
                        </li>
                    </ul>
                </nav>
                <div id ="autenticacaoCms">
                    <form>
                        <div
                        class="containerCms">
                            <span>Usuário</span>
                            <input type="text" name = "txtusuario" id="txtusuario" value="" placeholder="Insira seu nome" required pattern="[a-z A-Z À-ú]*">
                        </div>
                        <div class="containerCms">
                            <span>Senha</span>
                            <input type="password" name = "txtsenha" value="" />   
                        </div>
                        <div id="containerBotao">
                            <input type="submit" value="OK"/>
                        </div>
                    </form>
                </div>
                <nav id="containerMenuMobile">
                    <div id="iconeMenu">
                        
                    </div>
                    <div id="menuMobile">
                        <ul id="listaMenuMobile">
                            <li class="itemMenuMobile">
                                <a href="index.php">
                                    HOME
                                </a>
                            </li>
                            <li class="itemMenuMobile">
                                <a href="promocoes.php">
                                    PROMOÇÕES
                                </a>
                            </li>
                            <li class="itemMenuMobile">
                                <a href="queridinho.php">
                                    QUERIDINHO
                                </a>
                            </li>
                            <li class="itemMenuMobile">
                                <a href="lojas.php">
                                    LOJAS
                                </a>
                            </li>
                            <li class="itemMenuMobile">
                                <a href="curiosidades.php">
                                    CURIOSIDADES
                                </a>
                            </li>
                            <li class="itemMenuMobile">
                                <a href="sobre.php">
                                    SOBRE
                                </a>
                            </li>
                            <li class="itemMenuMobile">
                                <a href="contatos.php">
                                    CONTATOS
                                </a>
                            </li>
                        </ul>
                    </div>
                </nav>
                <div id="logoMobile">
                    <figure id="imagemLogoMobile">
                        <img src="imagens/logo.png" alt="Logo" title="Logo">
                    </figure>
                </div>
            </div>
        </header>')

?>