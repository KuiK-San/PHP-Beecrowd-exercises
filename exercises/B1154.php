<?php
$qnt_idade = 0;
$soma = 0;
$input = readline();
while($input >= 0){
    $soma = $input + $soma;
    $qnt_idade++;
    $input = readline();
}

$media = $soma / $qnt_idade;
echo number_format($media, 2, ".", "") . "\n";

?>