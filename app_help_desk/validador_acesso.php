<?php
session_start();

if(!isset($_SESSION['autenticado'])||$_SESSION['antenticado'] != "SIM" ){
header('Location: index.php?login=erro2');
}

?>
