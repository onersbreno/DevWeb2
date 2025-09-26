<?php 
include_once("persistencia.php");
$bandas = buscarDados("bandas.json");

$id = $_GET['id'];

$idExcluir = -1;
foreach($bandas as $idx =>$l){
    if($id == $l['id']){
        $idExcluir = $idx;
        break;
    }
}
array_splice($bandas, $idExcluir, 1);
salvarDados($bandas, "bandas.json");

header("location: index.php");

?>