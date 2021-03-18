<?php

    $nome = $_POST["nome"];

    $listaCidades = [
        1 => "Jandira",
        2 => "Itapevi",
        3 => "Barueri",
        4 => "Osasco",
        5 => "Cotia",
        6 => "Santana de Parnaíba",
        7 => "Carapicuíba",
        8 => "São Paulo"
    ];

    $cidadeSelecionada = $_POST["cidades"];

    echo $cidadeSelecionada;

    echo "Olá " . $nome . ", de " . $listaCidades[$cidadeSelecionada] . ", seja bem-vindo."; 

?>