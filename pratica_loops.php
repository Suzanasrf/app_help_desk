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

$registros = array(
    array('titulo' => 'Titulo 1', 'conteudo' => 'Conteudo 1'),
    array('titulo' => 'Titulo 2', 'conteudo' => 'Conteudo 2'),
    array('titulo' => 'Titulo 3', 'conteudo' => 'Conteudo 3')

);

echo '<pre>';
print_r($registros);
echo '</pre>';
echo '<br><br>';

$idx = 0;

echo 'O array possui  '   .count($registros) . '  registros';
// while($idx < count($registros)) { 

//    echo '<h1>' . $registros[$idx]['titulo'] . '</h1>';
//    echo '<p>'. $registros[$idx]['conteudo'] .'</p>';

//    $idx++;
// }

for($idx = 0; $idx < count($registros); $idx++){ 
    echo '<h1>' . $registros[$idx]['titulo'] . '</h1>';
  echo '<p>'. $registros[$idx]['conteudo'] .'</p>';

 
}
?>


</body>
</html>