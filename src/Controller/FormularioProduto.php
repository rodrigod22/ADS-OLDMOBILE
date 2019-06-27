<?php

namespace ADS\OldMobile\Controller;

class FormularioProduto implements InterfaceControladorRequisicao{   
    
    public function processaRequisicao(): void {
        
        require __DIR__ . '/../../public/view/produto/cadastro-produto.php';
    }

}
