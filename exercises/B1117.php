<?php
$soma = 0;
$notas = 0;

while ($notas < 2) {
    $nota = (float) readline();

    if($nota >=0 && $nota <= 10){
        $soma = $soma + $nota;
        $notas++;
    }else{
        echo "nota invalida\n";
    }
}
$media = $soma / 2;
echo "media = " . number_format($media, 2, ".", "") . "\n";

?>