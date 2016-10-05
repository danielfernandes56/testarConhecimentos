<!docktype html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Testar Conhecimento</title>
        <link rel="stylesheet" href="bootstrap/dist/css/bootstrap.css"/>
        <link rel="stylesheet" href="bootstrap/dist/css/bootstrap-theme.css"/>
    </head>
    <body>
        <?php
        $nome = isset($_GET["nome"]) ? $_GET["nome"] : "Nao especificado";
        $sobrenome = isset($_GET["sobrenome"]) ? $_GET["sobrenome"] : "Não especificado";
        $numero = isset($_GET["num"]) ? $_GET["num"] : 0;
        $logradouro = isset($_GET["logradouro"]) ? $_GET["logradouro"] : "Não especifcado";


        echo"<p>O seu nome é $nome $sobrenome e mora  $logradouro $numero</p>";
        ?>
        <a  class="btn btn-success" href="javascript:history.go(-1)" value="Voltar">Voltar</a>
    </body>


</html>


