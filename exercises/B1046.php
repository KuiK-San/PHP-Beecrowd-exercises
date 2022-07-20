<?php

$input = explode(" ", readline());


$hora_inicial = $input[0];
$hora_final = $input[1];

if($hora_inicial < $hora_final){
    $duracao = $hora_inicial - $hora_final;
    echo "O JOGO DUROU " . abs($duracao)  . " HORA(S)\n";
}else if($hora_inicial > $hora_final){
    $duracao = (24 - $hora_inicial) + $hora_final;
    echo "O JOGO DUROU " . $duracao  . " HORA(S)\n";
}else if($hora_final == $hora_final){
    echo "O JOGO DUROU 24 HORA(S)\n";
}

?>
