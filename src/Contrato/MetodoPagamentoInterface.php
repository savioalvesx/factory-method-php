<?php

interface MetodoPagamentoInterface {
    
    public function processar(float $valor): string;
}

?>