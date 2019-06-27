<?php

//require_once 'global.php';
require_once '../../vendor/autoload.php';


use Rpa\Ordemaq\Conexao;

$conexao = new Conexao();
$conexao->conectaDB();
var_dump($conexao);
//
//if($conexao->conectaDB()){
//    echo "conexao realizada com sucesso";    
//}
//
//$produto = new Produto();
//
