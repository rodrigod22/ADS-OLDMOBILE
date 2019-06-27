<?php

namespace Rpa\Ordemaq;

use PDO;

require_once __DIR__ . '/config.php';

class Conexao
{  
    public static function conectaDB(){        
        $pdo = new PDO(DRIVER. ":host=". HOST .";dbname=". DBNAME , USER, PASSWORD);
        return $pdo;        
    }    
}
