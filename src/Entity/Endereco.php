<?php


namespace ADS\OldMobile\Entity;

/**
 * @Entity
 */
class Endereco {  
     /**
     * @Id
     * @GeneratedValue
     * @Column(type="integer")
     */
    private $id;
    /**
     * @Column(type="string")
     */
    private $rua;
    /**
     * @Column(type="string")
     */
    private $numero;
    /**
     * @Column(type="string")
     */
    private $complemento;
    private $bairro;
    /**
     * @Column(type="string")
     */
    private $cidade;
    /**
     * @Column(type="string")
     */
    private $uf;
    /**
     * @ManyToOne(targetEntity = "Cliente")
     */
    private $cliente;
    
    function getId() {
        return $this->id;
    }

    function getRua() {
        return $this->rua;
    }

    function getNumero() {
        return $this->numero;
    }

    function getComplemento() {
        return $this->complemento;
    }

    function getBairro() {
        return $this->bairro;
    }

    function getCidade() {
        return $this->cidade;
    }

    function getUf() {
        return $this->uf;
    }

    function getCliente() {
        return $this->cliente;
    }

    function setId($id) {
        $this->id = $id;
    }

    function setRua($rua) {
        $this->rua = $rua;
    }

    function setNumero($numero) {
        $this->numero = $numero;
    }

    function setComplemento($complemento) {
        $this->complemento = $complemento;
    }

    function setBairro($bairro) {
        $this->bairro = $bairro;
    }

    function setCidade($cidade) {
        $this->cidade = $cidade;
    }

    function setUf($uf) {
        $this->uf = $uf;
    }

    function setCliente($cliente) {
        $this->cliente = $cliente;
    }


    
    
    
}
