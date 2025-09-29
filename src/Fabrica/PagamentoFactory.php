<?php

class PagamentoFactory
{
    public static function criar(string $tipo): MetodoPagamentoInterface
    {
        switch ($tipo) {
            case 'boleto':
                return new PagamentoBoleto();
            case 'pix':
                return new PagamentoPix();
            case 'cartao':
                return new PagamentoCartao();
            default:
                throw new Exception("Tipo de pagamento inválido.");
        }
    }
}