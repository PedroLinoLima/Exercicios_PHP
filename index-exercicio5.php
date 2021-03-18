<?php

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

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CIDADE</title>
    <link rel="stylesheet" href="../styles-global.css">
</head>
<body>
    <form method="POST" action="exercicio5.php">
        <h1>CIDADE</h1>
        <div class="input-group">
            <label for="nome">Nome:</label>
            <input type="text" id="nome" name="nome" required/>
        </div>
        <div class="input-group">
            <label>Cidade:</label>
            <select id="cidades" autofocus name="cidades" required>
                <option value="">SELECIONE</option>
                <?php
                foreach($listaCidades as $chave => $cidades) {
                ?>
                <option value="<?= $chave ?>"><?= $cidades ?></option>
                <?php
                }
                ?>
            </select>
        </div>
        <button>ENVIAR</button>
    </form>
</body>
</html>