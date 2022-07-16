<?php
$valor_notas = array(100, 50, 20, 10, 5, 2, 1);
$valor = readline();

echo $valor . "\n";

for($x = 0; $x < 7; $x++){

    $quantidade = $valor / $valor_notas[$x];

    echo (int) $quantidade . " nota(s) de R$ " . $valor_notas[$x] . ",00\n";

    $valor %= $valor_notas[$x];
}
?>