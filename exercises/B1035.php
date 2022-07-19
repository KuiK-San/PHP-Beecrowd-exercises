<?php

$valores = explode(" ", readline());

$a = $valores[0];
$b = $valores[1];
$c = $valores[2];
$d = $valores[3];

if ($b > $c && $d > $a && ($c + $d) > ($a + $b) && $c > 0 && $d > 0 && $a % 2 == 0) {
    echo "Valores aceitos\n";
}else{
    echo "Valores nao aceitos\n";
}

?>