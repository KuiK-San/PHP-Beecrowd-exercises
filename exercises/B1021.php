<?php

$valor = readline();
$valor_notas = array(100, 50, 20, 10, 5, 2, 1, 0.50, 0.25, 0.10, 0.05, 0.01);

for($x = 0; $x < 6; $x++){

    $quantidade = $valor / $valor_notas[$x];

    echo (int) $quantidade . " nota(s) de R$ " . $valor_notas[$x] . ",00\n";

    $valor %= $valor_notas[$x];
}

echo "MOEDAS:\n";

for($x = 5; $x < 12; $x++){
    $quantidade = $valor / $valor_notas[$x];

    echo (int) $quantidade . " moeda(s) de R$ " . $valor_notas[$x] . "\n";

    $valor %= $valor_notas[$x];
}

?>