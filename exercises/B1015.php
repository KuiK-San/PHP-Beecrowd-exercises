<?php

$p1 = explode(" ", fgets(STDIN));
$p2 = explode(" ", fgets(STDIN));

$x1 = (float)$p1[0];
$y1 = (float)$p1[1];
$x2 = (float)$p2[0];
$y2 = (float)$p2[1];

$distancia = sqrt((pow(($x2 - $x1), 2)) + (pow(($y2 - $y1), 2)));

echo number_format($distancia, 4, ".", "");

?>