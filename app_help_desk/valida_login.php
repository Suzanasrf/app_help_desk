<?php

session_start();


$usuario_autenticado= false;

$usuarios_app = array(
    array('email' => 'edu@hotmail.com', 'senha' => 123456),
    
    array('email' => 'user@gmail.com', 'senha' => 78945),
    
    array('email' => 'agata@yahoo.com', 'senha' => 987654)
);

// echo '<pre>';
// print_r($usuarios_app);
// echo '</pre>';


foreach($usuarios_app as $user) { 
   

    if($user['email'] == $_POST['email'] && $user['senha'] ==  $_POST['senha'] ) { 
        $usuario_autenticado= true;

    }
   
}

if($usuario_autenticado) { 
    echo 'Usuário autenticado';
    $_SESSION['autenticado']  = 'SIM';

}else{
    $_SESSION['autenticado'] = 'NÃO';

   header('Location: index.php?login=erro');
}


//  print_r($_POST);



?>