<?php
$eixos = explode(" ", readline());
$x = $eixos[0];
$y = $eixos[1];

while($x != 0 && $y != 0){
    if ( $x > 0 && $y > 0) {
        echo "primeiro\n";
    }else if($x < 0 && $y > 0){
        echo "segundo\n";
    }else if($x < 0 && $y < 0){
        echo "terceiro\n";
    }
    else if($x >0 && $y < 0){
        echo "quarto\n";
    }
    $eixos = explode(" ", readline());
    $x = $eixos[0];
    $y = $eixos[1];
}
?>