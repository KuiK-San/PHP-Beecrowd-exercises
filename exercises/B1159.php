<?php

$x = readline();

while ($x != 0){
    if($x % 2 == 0){
        $x1 = $x;
        $x2 = $x + 2;
        $x3 = $x + 4;
        $x4 = $x + 6;
        $x5 = $x + 8;

        $soma = $x1 + $x2 + $x3 + $x4 + $x5;
        echo "$soma\n";
    }else{
        $x1 = $x + 1;
        $x2 = $x1 + 2;
        $x3 = $x1 + 4;
        $x4 = $x1 + 6;
        $x5 = $x1 + 8;

        $soma = $x1 + $x2 + $x3 + $x4 + $x5;
        echo "$soma\n";
    }
    $x = readline();    
}

?>