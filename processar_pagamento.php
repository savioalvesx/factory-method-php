<?php

require_once __DIR__ . '/src/Contrato/MetodoPagamentoInterface.php';
require_once __DIR__ . '/src/Pagamentos/PagamentoBoleto.php';
require_once __DIR__ . '/src/Pagamentos/PagamentoPix.php';
require_once __DIR__ . '/src/Pagamentos/PagamentoCartao.php';
require_once __DIR__ . '/src/Fabrica/PagamentoFactory.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {

    $tipo = $_POST['metodo'] ?? '';
    $valor = (float)($_POST['valor'] ?? 0);

    try {
        // Usa a factory para obter o objeto de pagamento, não precisa saber qual classe será usada
        $metodoPagamento = PagamentoFactory::criar($tipo);

        $resultado = $metodoPagamento->processar($valor);

        // Resultado
        echo "<h1>Status do Pagamento</h1>";
        echo "<p style='color: green; font-size: 18px;'>" . htmlspecialchars($resultado) . "</p>";

    } catch (Exception $erro) {
        echo "<h1>Erro</h1>";
        echo "<p style='color: red;'>" . $erro->getMessage() . "</p>";
    }

    echo '<br><a href="index.html">Fazer outro pagamento</a>';

} else {
    header('Location: index.html');
    exit;
}

?>