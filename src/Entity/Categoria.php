<?php

namespace ADS\OldMobile\Entity;

/**
 * @Entity
 */
class Categoria 
{  
    /**
     *@Id
     * @GeneratedValue(strategy="IDENTITY")
     * @Column(type="integer")
     */
    private $id;    
    /**
     *
     * @Column(type="string")
     */
    private $nome;    
    /**
     * 
     * @OnetoMany(targetEntity="Produto",mappedBy="categoria")
     */
    private $produto;    
    
    function getId() 
    {
        return $this->id;
    }

    function getNome():String
    {
        return $this->nome;
    }

    function setId($id) {
        $this->id = $id;
    }

    function setNome(String $nome) 
    {
        $this->nome = $nome;
    }
    
    function getProduto():Produto 
    {
        return $this->produto;
    }

    function setProduto(Produto $produto): self
    {
        $this->produto = $produto;
    }
 }
