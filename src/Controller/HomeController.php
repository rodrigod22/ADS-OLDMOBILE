<?php

namespace ADS\OldMobile\Controller;

class HomeController implements InterfaceControladorRequisicao{
  
    public function processaRequisicao(): void {
        
        require __DIR__ . '/../../public/view/home.php';
    }

}
