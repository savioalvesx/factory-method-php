<?php

class PagamentoBoleto implements MetodoPagamentoInterface
{
    public function processar(float $valor): string {
        
        return "Boleto de R$ " . number_format($valor, 2, ',', '.') . " gerado com sucesso!";
    }
}

?>