<?php
include_once("Connection.php");

//1- capturar o ID que o veio no parâmetro
$id = 0;
if(isset($_GET["id"]))
    $id = $_GET["id"];

//2- validar o ID (numero maior que 0)
if($id <= 0) {
    echo "ID para exclusão é inválido.";
    exit;
}
//3- Executar o SQL para excluir
$conn = Connection::getConnection();

$sql = "DELETE FROM times WHERE  id = ?";
$stm = $conn->prepare($sql);
$stm->execute([$id]);

//4- Redirecionar para a listagem 
header("location: time_listar.php");