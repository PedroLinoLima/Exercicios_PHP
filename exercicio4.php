<?php
$listaDeNomes = array(
    1 => "Pedro",
    2 => "Natally",
    3 => "Isabela",
    4 => "Nathalia",
);

$nomes = "Pedro";

function apaga_vetor($listaNomes, $nomes)
{
    foreach ($listaNomes as $key => $nomeLista) {
        if ($nomeLista == $nomes) {
            echo "Encontrado <br>";
            unset($listaNomes[$key]);
            print_r($listaNomes);
            return $listaNomes;
        } else {
            echo "False";
            return $listaNomes;
        }
    }
}

apaga_vetor($listaNomes, $nomes);