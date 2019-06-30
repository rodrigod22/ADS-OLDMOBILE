<?php


$rotas = [
    
    '/lista-produto' => \ADS\OldMobile\Controller\ListarProduto::class ,
    '/cadastro-produto' => \ADS\OldMobile\Controller\FormularioProduto::class,
    '/cadastro-cliente' => \ADS\OldMobile\Controller\FormularioCliente::class,
    '/salva-produto' => \ADS\OldMobile\Controller\CadastroProduto::class,
    '/index' => \ADS\OldMobile\Controller\HomeController::class,
    '/salva-cliente' => \ADS\OldMobile\Controller\CadastroCliente::class,
];

return $rotas;