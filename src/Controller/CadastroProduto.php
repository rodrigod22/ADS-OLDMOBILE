<?php

namespace ADS\OldMobile\Controller;

use ADS\OldMobile\Infra\EntityManagerCreator;
use ADS\OldMobile\Entity\Produto;

class CadastroProduto implements InterfaceControladorRequisicao{
    
    private $entityManager;
    
    public function __construct() {
         $this->entityManager = (new EntityManagerCreator())->getEntityManager();        
    }    
    
       public function filtraInput($nomeCampo,$tipo){
        $result = filter_input($tipo, $nomeCampo, FILTER_SANITIZE_SPECIAL_CHARS);
        $resultado = filter_var($result);  
        return $resultado;
    }    
    
    public function processaRequisicao():void{      
        
        $categoria = CadastroProduto::filtraInput("categoria",INPUT_POST);        
        $categoriaManager = new \ADS\OldMobile\Controller\CategoriaController();
        $categoriaId = $categoriaManager->findById($categoria);   
       
        $nome = CadastroProduto::filtraInput("nome",INPUT_POST);
        $descricao = CadastroProduto::filtraInput("descricao",INPUT_POST);
        $qtdEstoque = CadastroProduto::filtraInput('qtd', INPUT_POST);
    
        $codigo = CadastroProduto::filtraInput('codigo', INPUT_POST);
        $cor = CadastroProduto::filtraInput('cor', INPUT_POST);
        $dimensao = CadastroProduto::filtraInput('dimensao', INPUT_POST);
        $fornecedor = CadastroProduto::filtraInput('fornecedor', INPUT_POST);       
        
        $produto = new Produto();
        $produto->setCategoria($categoriaId);
        $produto->setDescricao($descricao);       
        $produto->setNome($nome);
        $produto->setCodigo($codigo);
        $produto->setCor($cor);
        $produto->setDimensao($dimensao);
        $produto->setQtdEstoque($qtdEstoque);
        $produto->setFornecedor($fornecedor);        
        $this->entityManager->merge($produto);
        $this->entityManager->flush();        
        
    }
    
   
    
}
