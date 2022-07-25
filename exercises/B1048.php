<?php
$valor_atual = (float)readline();

if($valor_atual >= 0 && $valor_atual <= 400){
    $valor_final = $valor_atual + ($valor_atual * (15/100));
    $reajuste = $valor_atual * (15/100);
    $porcentagem = 15;
}else if($valor_atual >= 400.01 && $valor_atual <= 800){
    $valor_final = $valor_atual + ($valor_atual * (12/100));
    $reajuste = $valor_atual * (12/100);
    $porcentagem = 12;
}else if($valor_atual >= 800.01 && $valor_atual <= 1200){
    $valor_final = $valor_atual + ($valor_atual * (10/100));
    $reajuste = $valor_atual * (10/100);
    $porcentagem = 10;
}else if($valor_atual >= 1200.01 && $valor_atual <= 2000){
    $valor_final = $valor_atual + ($valor_atual * (7/100));
    $reajuste = $valor_atual * (7/100);
    $porcentagem = 7;
}else{
    $valor_final = $valor_atual + ($valor_atual * (4/100));
    $reajuste = $valor_atual * (4/100);
    $porcentagem = 4;
}
echo "Novo salario: " . number_format($valor_final, 2, ".", "") . "\n";
echo "Reajuste ganho: " . number_format($reajuste, 2, ".", "") . "\n";
echo "Em percentual: $porcentagem %\n"
?>