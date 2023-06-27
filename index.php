<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP</title>
</head>
<body>
  
<!-- PRIMEIROS PASSOS COM PHP -->

<?php
    $nome = 'Suzana';
    $idade = 29;
    $peso = 61.5;
    $fumante = false;
?>

<h1>Ficha cadastral</h1>
<p>Nome: <?= $nome ?></p>

<p>Idade: <?= $idade ?></p>

<p>Peso: <?= $peso ?></p>

<p>Fumante: <?= $fumante ?></p>
</body>
</html>