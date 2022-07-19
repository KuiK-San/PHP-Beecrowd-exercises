<?php

$input =  explode(" ", readline());

$valor1 = $input[0];
$valor2 = $input[1];

if ($valor1 % $valor2 == 0 || $valor2 % $valor1 == 0) {
    echo "Sao Multiplos\n";
}else{
    echo "Nao sao Multiplos\n";
}

?>
