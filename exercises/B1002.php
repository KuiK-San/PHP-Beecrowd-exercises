<?php

$n = 3.14159;

$raio = FGETS(STDIN);

$area = $n * pow($raio, 2);

echo "A=" . number_format($area, 4, ".", "") . "\n";

?>