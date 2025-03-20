<?php

$total = $_POST['total'];
$pagamento = $_POST['pagamento'];
$parcelas = $_POST['parcelas'];

if ($pagamento == "avista") {
    $total_final = $total * 0.90; // 10% de desconto
    echo "<h2>Pagamento à Vista</h2>";
    echo "Total com desconto: R$" . $total_final . ",00";
} else {
    if ($parcelas <= 3) {
        $total_final = $total; // Sem juros
    } elseif ($parcelas >= 4 && $parcelas <= 6) {
        $total_final = $total * 1.10; // 10% de juros
    } else {
        $total_final = $total * 1.20; // 20% de juros
    }

    $valor_parcela = $total_final / $parcelas;

    echo "<h2>Pagamento a Prazo</h2>";
    echo "Total com juros: R$" . $total_final . ",00<br>";
    echo "Número de parcelas: " . $parcelas . "<br>";
    echo "Valor de cada parcela: R$" . $valor_parcela . ",00";
}

?>
