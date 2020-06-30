<?php
require_once('bd/conexao.php');

//Abre a conexão com o BD
$conex = conexaoMysql();

//Valida se o formulário foi submetido pelo usuário
if(isset($_POST['btnSalvar']))
{
    //Resgatando os dados fornecidos pelo usuário, utilizando o metodo POST
    $nome = $_POST['txtNome'];
    $telefone = $_POST['txtTelefone'];
    $celular = $_POST['txtCelular'];
    $email = $_POST['txtEmail'];
    $profissao = $_POST['txtProfissao'];
    $sexo = $_POST['rdoSexo'];
    $homePage = $_POST['txtHomePage'];
    $link = $_POST['txtLink'];
    $classificacaoMensagem = $_POST['sltClassificacaoMensagem'];
    $mensagem = $_POST['txtMensagem'];
    
    $sql = "insert into tblContatosSite
    
            (
                   nome, telefone, celular, email, profissao, sexo, homepage, link,
                   mensagem, idClassificacaoMensagem

            )
            values 
            (      
                '".$nome."', '".$telefone."', '".$celular."', '".$email."', '".$profissao."', '".$sexo."', '".$homePage."', '".$link."', '".$mensagem."', '".$classificacaoMensagem."'
            )";

    
 
    if(mysqli_query($conex, $sql))
        echo("<script>alert('Registro inserido com sucesso!')</script>");
    else
        echo("<script>alert('Erro ao escutar o script!')</script>");
}

?>


<!Doctype html>


<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <title>Honker Burguer</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" type="text/css" href="css/reset.css">
        <link rel="stylesheet" type="text/css" href="css/globais.css">
        <link rel="stylesheet" type="text/css" href="css/contatos.css">
        <script src="js/jquery-1.11.3.min.js"></script>
        <script src="js/menuMobile.js"></script>
    </head>
    <body>
<!--======= CABEÇALHO ======-->
        <?php
            include_once("MODULOS/header.php");
        ?>
<!--===== CONTATOS ======-->
        <form name="formContato" action="contatos.php" method="post" id="contato" class="center heightAuto">
            <div class="content center heightAuto">
                <h1>ENTRE EM CONTATO CONOSCO</h1>  
<!--===== NOME =======-->
                <div class="larguraTotal">
                    <span>Nome:</span>
                    <input type="text" name="txtNome" value="" placeholder="Insira seu nome" required pattern="[a-z A-Z À-ú]*">
                </div>
<!--====== TELEFONE ======-->
                 <div class="larguraParcial larguraTotalMobile">
                    <span>Telefone:</span>
                    <input type="text" id="telefone" name="txtTelefone" pattern="[0-9]{4}-[0-9]{4}" required placeholder="Formato exigido 9999-9999">
                </div>
<!--===== CELULAR =======-->
                 <div class="larguraParcial larguraTotalMobile">
                    <span>Celular:</span>
                    <input type="text" id="celular" name="txtCelular" pattern="[0-9]{2} [0-9]{5}-[0-9]{4}" required placeholder="Formato exigido 99 99999-9999">
                </div>
<!--====== EMAIL ======-->
                 <div class="larguraTotal">
                    <span>Email:</span>
                    <input type="email" name="txtEmail" placeholder="Insira seu email">
                </div>
<!--====== PROFISSÃO =======-->
                 <div class="larguraParcial larguraTotalMobile">
                    <span>Profissão:</span>
                    <input type="text" name="txtProfissao" required pattern="[a-z A-Z]*" placeholder="Insira sua profissão">
                </div>
<!--===== SEXO =======-->
                <div class="larguraParcial larguraTotalMobile">
                    <div class="nomeInformacao">
                        <span>Sexo:</span>
                    </div>
                    <input type="radio" name="rdoSexo" value="F" required><span>Feminino</span>
                    <input type="radio" name="rdoSexo" value="M" required><span>Masculino</span>
                </div>
<!--====== HOME PAGE ======-->
                 <div class="larguraTotal">
                    <span>Home Page:</span>
                    <input type="url" name="txtHomePage">
                </div>
<!--===== LINK DO FACEBOOK  ======-->
                 <div class="larguraTotal">
                    <span>Link do Facebook:</span>
                    <input type="url" name="txtLink">
                </div>
<!--====== OPÇÃO PARA MENSAGEM =======-->
                <div class="larguraTotal">
                    <div class="nomeInformacao">
                        <span>Classificação de mensagem</span>
                    </div>
                    <select name="sltClassificacaoMensagem">
                        <?php
                            // Comando para o banco 
                            $sql = "select * from tblClassificacaoMensagem";

                            // Abrindo conexão com o banco
                            $selectClassificacaoMensagem = mysqli_query($conex, $sql);

                            while ($rsClassificacaoMensagem = mysqli_fetch_assoc($selectClassificacaoMensagem)){
                        ?>
                            <option value="<?=$rsClassificacaoMensagem['idClassificacaoMensagem']?>"><?=$rsClassificacaoMensagem['nomeClassificacao']?></option>
                        <?php } ?>
                    </select>
                </div>
<!--====== MENSAGEM ======-->
                <div id="caixaTexto">
                    <span>Mensagem:</span>
                    <textarea name="txtMensagem" maxlength="300" rows="5" cols="5" placeholder="Insira sua profissão" required></textarea>
                </div>
<!--====== BOTÃO =======-->
                <div id="botaoContato">
                    <input type="submit" name="btnSalvar" value="SALVAR"/>
                </div>
            </div>
        </form>
<!--===== RODAPÉ ======-->
        <?php
            include_once("MODULOS/footer.php"); 
        ?>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.mask/1.14.16/jquery.mask.min.js"></script>
        <script src="js/mascaras.js"></script>
    </body>
</html>
        
    