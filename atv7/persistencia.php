<?php
define("DIR_BANCO", "banco_dados"); 

function salvarDados ($array, $arquivo){

    $json = json_encode($array, JSON_PRETTY_PRINT); //transforma o array em json
    file_put_contents(DIR_BANCO . "/" . $arquivo, $json); //salva o json
}

function buscarDados($arquivo) : array { //funcao com return tipado para array
    $bandas = array();

    $nomeArquivo = DIR_BANCO . "/" . $arquivo;     //Buscar os dados do arquivo
    
    if(file_exists($nomeArquivo)) { //se existir um arquivo
        $json = file_get_contents($nomeArquivo); //retorna o conteudo do arquivo.
        $bandas = json_decode($json, true); //converte o json para array associativo
    }

    return $bandas;
}


?>