<?php

$entrada = explode(" ", readline());

$id = $entrada[0];
$quant = $entrada[1];

switch ($id){
    case 1:
        $total = $quant * 4.00;
        break;
    
    case 2:
        $total = $quant * 4.50;
        break;
    
    case 3:
        $total = $quant * 5.00;
        break;
    
    case 4:
        $total = $quant * 2.00;
        break;
    
    case 5:
        $total = $quant * 1.50;
        break;
    default:
        $total = 0; //quando o cod não existe
        break;
}

echo "Total: R$ " . number_format($total, 2, ".","") . "\n";


?>