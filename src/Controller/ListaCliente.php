<?php

namespace ADS\OldMobile\Controller;

use ADS\OldMobile\Infra\EntityManagerCreator;
use ADS\OldMobile\Entity\Cliente;


class ListaCliente{   
    
    private $repositorioCliente;
    
    public function __construct() {
         $entityManager = (new EntityManagerCreator())->getEntityManager();
         $this->repositorioCliente = $entityManager->getRepository(Cliente::class);
    }   
    
    public function processaRequisicao(){      
        $clientes = $this->repositorioCliente->findAll();      
        require __DIR__ . '/../../public/view/produto/lista-cliente.php';       
    }    
}
