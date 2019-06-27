<?php

namespace ADS\OldMobile\Entity;


/**
 * @Entity
 */
class Produto 
{   
    /**
     *@Id
     *@GeneratedValue(strategy="IDENTITY")
     * @Column(type="integer")
     */
    private $id;
    
    /**
     *@Column(type="string")
     */    
    private $nome;
    /**
     *@Column(type="string")
     */    
    private $descricao;
    /**
     *@Column(type="string")
     */    
    private $codigo;
    /**
     *@Column(type="integer")
     */    
    private $qtdEstoque;
    
    /**
     *@ManyToOne(targetEntity="Categoria", inversedBy="produto")
     */     
        private $categoria;
    /**
     *@Column(type="integer")
     */  
    private $fornecedor;
    /**
     *@Column(type="string")
     */  
    private $dimensao;
    /**
     *@Column(type="string")
     */  
    private $cor;  
    
    function getDescricao() {
        return $this->descricao;
    }

    function setDescricao($descricao) {
        $this->descricao = $descricao;
    }

        function getId() {
        return $this->id;
    }

    function getNome() {
        return $this->nome;
    }

    function getCodigo() {
        return $this->codigo;
    }

    function getQtdEstoque() {
        return $this->qtdEstoque;
    }

    function getCategoria() {
        return $this->categoria;
    }

    function getFornecedor() {
        return $this->fornecedor;
    }

    function getDimensao() {
        return $this->dimensao;
    }

    function getCor() {
        return $this->cor;
    }

    function setId($id) {
        $this->id = $id;
    }

    function setNome($nome) {
        $this->nome = $nome;
    }

    function setCodigo($codigo) {
        $this->codigo = $codigo;
    }

    function setQtdEstoque($qtdEstoque) {
        $this->qtdEstoque = $qtdEstoque;
    }

    function setCategoria($categoria) {
        $this->categoria = $categoria;
    }

    function setFornecedor($fornecedor) {
        $this->fornecedor = $fornecedor;
    }

    function setDimensao($dimensao) {
        $this->dimensao = $dimensao;
    }

    function setCor($cor) {
        $this->cor = $cor;
    } 
    
    
    
    
}
