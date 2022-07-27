<?php

$n1 = readline();
$n2 = readline();

if ($n1 > $n2){
    $maior = $n1;
    $menor = $n2;
}else{
    $maior = $n2;
    $menor = $n2;

}
$somaImpar = 0;

for ($i=$menor + 1; $i < $maior; $i++) { 
    if ($i % 2 != 0) {
        $somaImpar += $i;
    }

}
echo "$somaImpar\n";

?>