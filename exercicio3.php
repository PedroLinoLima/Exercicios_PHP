<?php

function vetorInvertido(array $vetor){

    $vetorInverso = [];

    for($i = (count($vetor) - 1); $i >= 0; $i--){
        $vetorInverso[] = $vetor[$i];
    }

    return $vetorInverso;

}

$vetorNomes = ["Pedro", "Natally", "Isabela", "Nathalia"];

$vetorInverso = vetorInvertido($vetorNomes);

print_r($vetorInverso);

?>