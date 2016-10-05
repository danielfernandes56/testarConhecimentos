<!DOCTYPE html>
<!-- -->
<html>
    <head>
        <meta charset="UTF-8">
        <title>Testar Conhecimento</title>
        <link rel="stylesheet" href="bootstrap/dist/css/bootstrap.css"/>
        <link rel="stylesheet" href="bootstrap/dist/css/bootstrap-theme.css"/>
    </head>
    <body>
        <div class="container">
            <form method="get" action="mysql_conect.php">
                <fieldset><legend>Cadastro</legend>
                    <label for="nome">Nome :</label>
                    <input  type="text" name="nome"/><br/>   
                    <label for="sobrenome">Sobrenome :</label>
                    <input  type="text" name="sobrenome"/><br/>
                    <label for="logradouro">Logradouro :</label>
                    <input  type="text" name="logradouro"/><br/>
                    <label for="num">Numero :</label>
                    <input type="number" name="num" min="0" max="1000"/><br/>

                    <input class="btn btn-primary" type="submit" value="Envia"/>
                </fieldset>
            </form>
        </div>      
    </body>
</html>
