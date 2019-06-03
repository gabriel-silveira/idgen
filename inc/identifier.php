<?php
class Identificador extends \Database\MySQL {
    function __construct() {
        parent::__construct();
        $this->id = $this->gerar_id();
    }

    public function gerar_id() {
        return dechex(time());
    }
}