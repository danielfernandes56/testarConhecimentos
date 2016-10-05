<?php

$servidor = 'localhost';
$banco = 'conhecimento';
$usuario = 'root';
$senha = '';
$link = mysqli_connect($servidor, $usuario, $senha);
$db = mysqli_select_db($link, $banco);
if (!$link) {
    echo"Erro ao conectar ao Banco de dados ";
    exit();
}
$nome = isset($_GET["nome"]) ? $_GET["nome"] : "Nao especificado";
$sobrenome = isset($_GET["sobrenome"]) ? $_GET["sobrenome"] : "N�o especificado";
$numero = isset($_GET["num"]) ? $_GET["num"] : 0;
$logradouro = isset($_GET["logradouro"]) ? $_GET["logradouro"] : "N�o especifcado";

$sql = "insert into pessoa (nome,sobrenome,logradouro,numero) values ('$nome','$sobrenome','$logradouro','$numero')";
if (mysqli_query($link, $sql)) {

    echo "New record creted sucess";
} else {
    die(mysqli_error($link));
    echo"deu erro nessa porra";
}
?>