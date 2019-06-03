<?php
require('inc/inc.php');

$ident = new Identificador();
$ident->gerar();
print($ident->obter_id());
