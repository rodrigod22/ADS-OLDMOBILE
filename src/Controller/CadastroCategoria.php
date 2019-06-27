<?php


namespace ADS\OldMobile\Controller;

use ADS\OldMobile\Infra\EntityManagerCreator;

class CadastroCategoria implements InterfaceControladorRequisicao{
    
     private $entityManager;
     
     
    public function __construct() {
         $this->entityManager = (new EntityManagerCreator())->getEntityManager();        
    }   
   
    public function processaRequisicao(): void {
        
      
    }
    
    

}
