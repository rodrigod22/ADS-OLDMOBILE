<?php


namespace ADS\OldMobile\Entity;

use Doctrine\Common\Collections\Collection;
use Doctrine\Common\Collections\ArrayCollection;

/**
 * @Entity
 */
class Cliente {     
    /**
     * @Id
     * @GeneratedValue
     * @Column(type="integer")
     */
    private  $id;
    /**
     * @Column(type="string")
     */
    private  $nome;
    /**
     * @Column(type="string")
     */
    private  $email;
    /**
     * @Column(type="string")
     */
    private  $cpf;
    /**
     * @OnetoMany(targetEntity="Telefone", mappedBy="cliente")
     */
    private  $telefone;
     /**
     * @OnetoMany(targetEntity="Endereco", mappedBy="cliente")
     */ 
    private  $endereco;

    public function __construct() 
    {
        $this->telefone = new ArrayCollection();
        $this->endereco = new ArrayCollection();
    }  
    
    function getId() 
    {
        return $this->id;
    }

    function getNome() 
    {
        return $this->nome;
    }

    function getEmail() 
    {
        return $this->email;
    }

    function getCpf() 
    {
        return $this->cpf;
    }   

    function setId($id) 
    {
        $this->id = $id;
    }

    function setNome($nome) 
    {
        $this->nome = $nome;
    }

    function setEmail($email) 
    {
        $this->email = $email;
    }

    function setCpf($cpf) 
    {
        $this->cpf = $cpf;
    }       
    
    public function addTelefone(Telefone $telefone)
    {        
        $this->telefone->add($telefone);
        $telefone->setCliente($this);
        return $this;        
    }
    
    public function getTelefone():Collection
    {
        return $this->telefone;
    }
    
     public function addEndereco(Endereco $endereco)
    {        
        $this->endereco->add($endereco);
        return $this;        
    }
    
    public function getEndereco():Collection
    {
        return $this->endereco;
    }
    
}
