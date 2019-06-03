<?php
class Identificador extends \Database\MySQL {
    
    private $id;

    function __construct() {
        parent::__construct();
    }

    public function gerar() {
        $this->id = $this->gerar_verificar();
    }

    public function gerar_verificar() {
        // ...algoritmo para gerar ID
        $temp_id = mt_rand(0, 9);

        // verifica se o ID gerado já existe
        if($this->exists($temp_id)) {
            return $this->gerar_verificar();
        } else {
            $this->insert(
                "INSERT INTO identifiers (identifier) VALUES (:id)", 
                [':id'=>$temp_id]
            );
            return $temp_id;
        }
    }

    public function exists($id) {
        $exists = $this->fetch_array("
        SELECT count(*) as total
        FROM identifiers
        WHERE identifier = '$id'
        ");
        return $exists[0]['total'];
    }
    
    public function obter_id() {
        return $this->id;
    }
}