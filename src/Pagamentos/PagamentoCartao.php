<?php

class PagamentoCartao implements MetodoPagamentoInterface
{
    public function processar(float $valor): string {
        
        return "Pagamento de R$ " . number_format($valor, 2, ',', '.') . " aprovado no cartão de crédito.";
    }
}

?>