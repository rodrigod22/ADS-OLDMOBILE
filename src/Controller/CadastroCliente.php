<?php


namespace ADS\OldMobile\Controller;
session_start();
use ADS\OldMobile\Infra\EntityManagerCreator;
use ADS\OldMobile\Entity\Cliente;

class CadastroCliente implements InterfaceControladorRequisicao{
    
    private $entityManager;
    
    public function __construct() {
         $this->entityManager = (new EntityManagerCreator())->getEntityManager();        
    }    
    
       public function filtraInput($nomeCampo,$tipo,$filtro){
           
        $resultado = filter_input($tipo, $nomeCampo, $filtro);
        
        $_SESSION[$nomeCampo] = $resultado;       
        
        if($resultado === ""){
           $_SESSION['msg-'.$nomeCampo.''] = "campo obrigatório";          
          header("location:cadastro-cliente#$nomeCampo");
        }else    
        if($resultado === false){
           $_SESSION['msg-'.$nomeCampo.''] = "campo invalido";          
           header("location:cadastro-cliente#$nomeCampo");
        }    
        return $resultado;
    }    
    
    public function processaRequisicao():void{          
       
        $nome = CadastroCliente::filtraInput("nome",INPUT_POST,FILTER_SANITIZE_SPECIAL_CHARS);
        $email = CadastroCliente::filtraInput("email",INPUT_POST,FILTER_VALIDATE_EMAIL);
        $telefone = CadastroCliente::filtraInput("telefone",INPUT_POST,FILTER_SANITIZE_SPECIAL_CHARS);
        $telefone_dig = CadastroCliente::filtraInput("telefone-dig",INPUT_POST,FILTER_SANITIZE_SPECIAL_CHARS);
        $cpf = CadastroCliente::filtraInput("cpf",INPUT_POST,FILTER_SANITIZE_SPECIAL_CHARS);
        
        
        if(strlen($telefone) < 10 || strlen($telefone_dig) < 2){
             $_SESSION['msg-telefone'] = "Preencher no formato xx xxxxx-xxxx";
              header("location:cadastro-cliente#telefone");
        }
        
          
        
        
        //$this->entityManager->merge();
        //$this->entityManager->flush();        
        
    }
    
   
    
}
