<?php


$rotas = [
    
    '/lista-produto' => \ADS\OldMobile\Controller\ListarProduto::class ,
    '/cadastro-produto' => \ADS\OldMobile\Controller\FormularioProduto::class,
    '/salva-produto' => \ADS\OldMobile\Controller\CadastroProduto::class ,
    '/index' => \ADS\OldMobile\Controller\HomeController::class
];

return $rotas;