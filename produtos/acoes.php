<?php

function validarCampos(){
    if (!isset($_POST["descricao"]) && !$_POST["descricao"] == ""){
        

    }
}

require("../database/conexao.php");

$descricao = $_POST["descricao"];
$peso = $_POST ["peso"];

$sqlInsert = "INSERT INTO  tbl_produto (descricao, peso) VALUES ($descricao, $peso)";

$resultado = mysqli_query($conexao, $sqlInsert) or die (mysqli_error($conexao));

if ($resultado) {
    $mensagem = "Produto inserido com sucesso!";
}else {
    $mensagem = "Erro ao inserir produto!";
}
header("location: index.php");
