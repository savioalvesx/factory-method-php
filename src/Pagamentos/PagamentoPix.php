<?php

class PagamentoPix implements MetodoPagamentoInterface
{
    public function processar(float $valor): string {
        // Gerar um qr code fake
        return "QR Code PIX para pagamento de R$ " . number_format($valor, 2, ',', '.') . " criado!";
    }
}
?>