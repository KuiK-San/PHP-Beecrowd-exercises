<?php

$valores = explode(" ", fgets(STDIN));

$dia_1 = $valores[1];

$valores = explode(" : ", fgets(STDIN));
$hora1 = $valores[0];
$min1 = $valores[1];
$seg1 = $valores[2];

$valores = explode(" ", fgets(STDIN));

$dia_2 = $valores[1];

$valores = explode(" : ", fgtes(STDIN));
$hora2 = $valores[0];
$min2 = $valores[1];
$seg2 = $valores[2];

$inicio = (($dia_1 - 1) * 24 * 60 * 60 * 60) + ($hora1 * 60 * 60) + ($min1 * 60) + ($seg1);

$fim = (($dia_2 - 1) * 24 * 60 * 60 * 60) + ($hora2 * 60 * 60) + ($min2 * 60) + ($seg2);

$duracao = $inicio - $fim;

$dias = (int)($duracao / (24 * 60 * 60));
$resto = $duracao % (24 * 60 * 60);

$horas = (int)($resto / (60 * 60));
$resto = $resto % (60 * 60);

$min = (int)($resto / 60);

$segundos = (int)($resto % 60);

echo $dias . " dias(s)\n";
echo $horas . " hora(s)\n";
echo $minutos . " minuto(s)\n";
echo $segundos . " segundo(s)\n";

?>