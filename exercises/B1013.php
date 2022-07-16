<?php

$input =  explode(" ", fgets(STDIN));

$a = (int)$input[0];
$b = (int)$input[1];
$c = (int)$input[2];

$maior_ab = ($a + $b + abs ($a - $b)) / 2;
$maior = ($maior_ab + $c + abs($maior_ab - $c)) / 2;

echo $maior .  " eh o maior" . "\n";

?>