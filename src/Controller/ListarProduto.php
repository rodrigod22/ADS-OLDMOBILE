<?php

namespace ADS\OldMobile\Controller;

use ADS\OldMobile\Infra\EntityManagerCreator;
use ADS\OldMobile\Entity\Produto;


class ListarProduto {   
    
    private $repositorioProdutos;
    
    public function __construct() {
         $entityManager = (new EntityManagerCreator())->getEntityManager();
         $this->repositorioProdutos = $entityManager->getRepository(Produto::class);
    }   
    
    public function processaRequisicao(){      
        $produtos = $this->repositorioProdutos->findAll();      
        require __DIR__ . '/../../public/view/produto/listar-produto.php';       
    }    
}
