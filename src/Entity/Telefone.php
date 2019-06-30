<?php

namespace ADS\OldMobile\Entity;

/**
 * @Entity
 */
class Telefone {
    
    /**
     * @Id
     * @GeneratedValue
     * @Column(type="integer")
     */
    private $id;
    /**
     * @Column(type="string")
     */
    private $numero;
    
    /**
     * @ManytoOne(targetEntity="Cliente")
     */
    private $cliente;
    
    function getId() {
        return $this->id;
    }

    function getNumero() {
        return $this->numero;
    }

    function getCliente() {
        return $this->cliente;
    }

    function setId($id) {
        $this->id = $id;
    }

    function setNumero($numero) {
        $this->numero = $numero;
    }

    function setCliente($cliente) {
        $this->cliente = $cliente;
    }


    
}
