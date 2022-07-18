<?php

$valor = (float)fgets(STDIN);

echo "NOTAS:\n";

//nota 100

$nota_100 = $valor/100;
$resto = $valor % 100;
echo (int)$nota_100 . " nota(s) de R$ 100.00\n";

//nota 50 
$nota_50 = $resto / 50;
$resto = $resto % 50;
echo (int)$nota_50 . " nota(s) de R$ 50.00\n";

//nota 20 
$nota_20 = $resto / 20;
$resto = $resto % 20;
echo (int)$nota_20 . " nota(s) de R$ 20.00\n";

//nota 10 
$nota_10 = $resto / 10;
$resto = $resto % 10;
echo (int)$nota_10 . " nota(s) de R$ 10.00\n";

//nota 5
$nota_5 = $resto / 5;
$resto = $resto % 5;
echo (int)$nota_5 . " nota(s) de R$ 5.00\n";

//nota 2
$nota_2 = $resto / 2;
$resto = $resto % 2;
echo (int)$nota_2 . " nota(s) de R$ 2.00\n";

echo "MOEDAS:\n";

//moeda 1
echo (int)$resto . " moeda(s) de R$ 1.00\n";

//pegar valores em centavos e faz a verificação se é numero inteiro
$valor_moeda = explode(".", $valor);
$quantidade_array = count($valor_moeda);
//se for menor que 1 ent significa que não tem casas decimais
if($quantidade_array <= 1){
    echo "0 moeda(s) de R$ 1.00\n0 moeda(s) de R$ 0.50\n0 moeda(s) de R$ 0.25\n0 moeda(s) de R$ 0.10\n0 moeda(s) de R$ 0.05\n0 moeda(s) de R$ 0.01\n";

}else{
    $moeda = $valor_moeda[1];
/*     echo $moeda; */

    //moeda 0.50
    $moeda_50 = $moeda / 50;
    $resto_moeda =  $moeda % 50;
    echo (int)$moeda_50 . " moeda(s) de R$ 0.50\n";

    //moeda 0.25
    $moeda_25 = $resto_moeda / 25;
    $resto_moeda = $resto_moeda % 25;
    echo (int)$moeda_25 . " moeda(s) de R$ 0.25\n";

    //moeda 0.10
    $moeda_10 = $resto_moeda / 10;
    $resto_moeda = $resto_moeda % 10;
    echo (int)$moeda_10 . " moeda(s) de R$ 0.10\n";

    //moeda 0.05
    $moeda_05 = $resto_moeda / 05;
    $resto_moeda = $resto_moeda % 05;
    echo (int)$moeda_05 . " moeda(s) de R$ 0.05\n";

    //moeda 0.01
    echo $resto_moeda . " moeda(s) de R$ 0.01\n";

}
?>