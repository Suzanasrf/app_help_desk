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
   $lista_coisas = [];
   $lista_coisas['frutas'] = array('1'=> 'Banana', '2'=> 'Morango', '3'=> 'Uva', );
   $lista_coisas['pessoas'] = ['Suzana' , 'Julia', 'Alice'];

    echo '<pre>';
    print_r($lista_coisas);
    echo '</pre>';
    echo '<hr />';
    // OU

    $lista_itens = ['Short','Blusa','Relógio', ['Notebook','Celular','Televisão'], ['WheyProtein','Creatina','Glutamina']];
    print_r($lista_itens[3][2]);

?>


</body>
</html>