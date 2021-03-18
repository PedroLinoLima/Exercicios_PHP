<?php

function Nome(array $nome, $nomeEspecifico){

    foreach($nome as $vetor){

        if($vetor == $nomeEspecifico){
            return true;
        }else{
            return false;
        }

    }

}

$nomes = ["Pedro", "Natally", "Isabela", "Nathalia"];

$resultadoNomes = Nome($nomes, "Pedro");

print_r($resultadoNomes);


?>