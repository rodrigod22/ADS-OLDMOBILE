<?php

namespace ADS\OldMobile\Controller;

class FormularioCliente implements InterfaceControladorRequisicao{   
    
    public function processaRequisicao(): void {
        
        require __DIR__ . '/../../public/view/produto/cadastro-cliente.php';
    }

}
