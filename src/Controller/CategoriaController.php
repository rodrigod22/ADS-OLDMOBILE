<?php

namespace ADS\OldMobile\Controller;

use \ADS\OldMobile\Entity\Categoria;
use \ADS\OldMobile\Infra\EntityManagerCreator;

class CategoriaController {
  
    
    private $repositorioProdutos;
    
    public function __construct() {
         $entityManager = (new EntityManagerCreator())->getEntityManager();
         $this->repositorioProdutos = $entityManager->getRepository(Categoria::class);
    }   
    
    public function findAll(){        
        $categorias = $this->repositorioProdutos->findAll();
        return $categorias;
    }
    
     public function findById($id){        
        $categorias = $this->repositorioProdutos->find($id);
        return $categorias;
    }
    
    
    
}
