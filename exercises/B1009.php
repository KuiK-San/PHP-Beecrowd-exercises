<?php

$nome = (string) fgets(STDIN);
$fixed_sal = (float) fgets(STDIN);
$vendas = (float) fgets(STDIN);

$valor = $fixed_sal + $vendas * 0.15;

echo "TOTAL = " . number_format($valor, 2, ".", "") . "\n";
?>