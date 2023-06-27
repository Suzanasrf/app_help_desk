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
   $frutas = ['Banana','Uva','Abacaxi'];
//    if(in_array('mamao', $frutas)) { 
//     echo 'A fruta Uva existe na array';
//    }else{
//     echo 'A fruta mamao não existe na array';
//    }

$existe =array_search(' ',$frutas);

if($existe != null) { 
    echo 'Existe';
}else{
    echo 'Não existe';
}
?>


</body>
</html>