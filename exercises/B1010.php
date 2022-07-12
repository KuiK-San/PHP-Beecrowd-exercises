<?php

//vetores
$peca1 = explode(" ", fgets(STDIN));
$peca2 = explode(" ", fgets(STDIN));

$quantidade1 = $peca1[1];
$valor1 = $peca1[2];

$quantidade2 = $peca2[1];
$valor2 = $peca2[2];

$total = ($quantidade1 * $valor1) + ($quantidade2 * $valor2);

echo "VALOR A PAGAR: R$ " . number_format($total, 2, ".", "") . "\n";
?>