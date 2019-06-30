<?php


namespace ADS\OldMobile\Entity;

/**
 * @ Entity
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
     * @ManytoOne(targetEntity = "Cliente")
     * @var type 
     */
    private $cliente;
    
    
    
}
