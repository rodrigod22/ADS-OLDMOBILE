<?php

namespace ADS\OldMobile\Controller;
session_start();

use ADS\OldMobile\Infra\EntityManagerCreator;
use ADS\OldMobile\Entity\Cliente;
use ADS\OldMobile\Entity\Telefone;
use ADS\OldMobile\Entity\Endereco;

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
        $tel = CadastroCliente::filtraInput("telefone",INPUT_POST,FILTER_SANITIZE_SPECIAL_CHARS);
        $telefone_dig = CadastroCliente::filtraInput("telefone-dig",INPUT_POST,FILTER_SANITIZE_SPECIAL_CHARS);
        $cpf = CadastroCliente::filtraInput("cpf",INPUT_POST,FILTER_SANITIZE_SPECIAL_CHARS);
        $rua = CadastroCliente::filtraInput("rua",INPUT_POST,FILTER_SANITIZE_SPECIAL_CHARS);
        $numero = CadastroCliente::filtraInput("numero",INPUT_POST,FILTER_SANITIZE_SPECIAL_CHARS);
        $complemento = CadastroCliente::filtraInput("complemento",INPUT_POST,FILTER_SANITIZE_SPECIAL_CHARS); 
        $cidade = CadastroCliente::filtraInput("cidade",INPUT_POST,FILTER_SANITIZE_SPECIAL_CHARS);
        $bairro = CadastroCliente::filtraInput("bairro",INPUT_POST,FILTER_SANITIZE_SPECIAL_CHARS);
        $uf = CadastroCliente::filtraInput("uf",INPUT_POST,FILTER_SANITIZE_SPECIAL_CHARS); 
        
        if(strlen($tel) < 10 || strlen($telefone_dig) < 2){
             $_SESSION['msg-telefone'] = "Preencher no formato xx xxxxx-xxxx";
             header("location:cadastro-cliente#telefone");
        }         
        
        
        $cliente = new Cliente();
        $telefone = new Telefone();
        $endereco = new Endereco();
        
        $telefone->setNumero($telefone_dig.".".$tel);
        $endereco->setRua($rua);
        $endereco->setNumero($numero);
        $endereco->setComplemento($complemento);
        $endereco->setBairro($bairro);
        $endereco->setCidade($cidade);
        $endereco->setUf($uf);        
                
        $cliente->setNome($nome);
        $cliente->setEmail($email);
        $cliente->setCpf($cpf);
        $cliente->addTelefone($telefone);
        $cliente->addEndereco($endereco);          
        
        try{
             $this->entityManager->persist($cliente);
             $this->entityManager->flush();    
        } catch (Exception $ex) {
             $_SESSION['crud'] = "Erro no cadastro".$ex; 
             header("location:cadastro-cliente");            
        }        
        
        unset($_SESSION['nome']);
        unset($_SESSION['email']);
        unset($_SESSION['cpf']);
        unset($_SESSION['rua']);
        unset($_SESSION['complemento']);
        unset($_SESSION['numero']);
        unset($_SESSION['bairro']);
        unset($_SESSION['cidade']);
        unset($_SESSION['uf']);
        $_SESSION['crud'] = "Usuario cadastrado com sucesso"; 
        header("location:cadastro-cliente");
    }    
}
