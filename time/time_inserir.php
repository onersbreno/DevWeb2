<?php

include_once("Connection.php");

//validação dos parâmetros
if(!isset($_GET['nome']) || !isset($_GET['cidade'])){
    echo "Informe os parâmetros [nome] e [cidade]!";
    exit;
}

//receber o nome e a cidade do time por parâmetro GET
$nome = $_GET['nome'];
$cidade = $_GET['cidade'];

//Inserir o time no banco de dados
$conn = Connection::getConnection();
$sql = "INSERT INTO times (nome, cidade)
            VALUES (?, ?)";

$stm = $conn->prepare($sql);
$stm->execute(array($nome, $cidade));

//voltar para a listagem
header("location: time_listar.php");