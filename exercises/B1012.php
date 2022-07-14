<?php
$input = explode(" ", fgets(STDIN));

$a = $input[0];
$b = $input[1];
$c = $input[2];

$area_triangulo = ($a * $c)/2;
$area_circulo = (3.14159 * pow($c, 2));
$area_trapezio = (($a + $b) * $c) / 2;
$area_quadrado = ($b * $b);
$area_retangulo = ($a * $b);

echo "TRIANGULO: " . number_format($area_triangulo, 3, ".", "") . "\n";
echo "CIRCULO: " . number_format($area_circulo, 3, ".", "") . "\n";
echo "TRAPEZIO: " . number_format($area_trapezio, 3, ".", "") . "\n";
echo "QUADRADO: " . number_format($area_quadrado, 3, ".", "") . "\n";
echo "RETANGULO: " . number_format($area_retangulo, 3, ".", "") . "\n";

?>