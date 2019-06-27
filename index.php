<?php

require_once 'vendor/autoload.php';

//$caminho = $_SERVER['PATH_INFO'];
$caminho = $_SERVER['QUERY_STRING'];

$rotas = require __DIR__ . '/config/routes/routes.php';

if ($caminho == "") {
  $homeController = new ADS\OldMobile\Controller\HomeController();
  $home = $homeController->processaRequisicao();
    
}else
if(!array_key_exists($caminho, $rotas)){
    http_response_code(404);
    exit();
}else{
    
$classeControladora = $rotas[$caminho];
$controlador = new $classeControladora();
$controlador->processaRequisicao();
}






