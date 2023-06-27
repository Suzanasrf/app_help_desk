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
   
 
  
  echo date('d/m/Y H:i');


    $data_inicial = '2021-06-14';

    $data_final = date('Y/m/d');

    $data_inicial_convertida = strtotime($data_inicial);
    $data_final_convertida = strtotime($data_final);

    $date_final = $data_final_convertida - $data_inicial_convertida;
     $diferenca_total  = round($date_final / (60 * 60 * 24));

    echo $diferenca_total;
?> 



</body>
</html>