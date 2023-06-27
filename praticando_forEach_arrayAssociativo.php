<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP</title>
</head>
<body>
  


<?php

// $funcionarios = ['João', 'Maria', 'Julia'];

// echo '<pre>';
// print_r($funcionarios);
// echo '</pre>';


// foreach($funcionarios as $indice => $nome_Funcionario){ 
// echo "Indice  ".$indice . '  Nome do funcionário:' . $nome_Funcionario .'<br />';
// }

$funcionarios = array(
    array('Nome' => 'João' , 'Salário' => 2500),
    
    array('Nome' => 'Marcos' , 'Salário' => 6200),
    
    array('Nome' => 'Suzana' , 'Salário' => 7800)
);

echo '<pre>';
print_r($funcionarios);
echo '</pre>';

foreach($funcionarios as $indice => $funcionario) { 
    print_r($funcionario);

    foreach($funcionario as $indice_2 => $valor){
        echo "$indice_2 - $valor";
    }
    echo '<hr />';
}

?>


</body>
</html>