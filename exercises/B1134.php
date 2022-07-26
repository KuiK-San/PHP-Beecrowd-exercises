<?php
$alcool = 0;
$gasolina = 0;
$diesel = 0;


echo "MUITO OBRIGADO";

while ($input != 4) {
    $input = readline();
    if($input == 1){
        $alcool++;
    }else if($input == 2){
        $gasolina++;
    }else if($input == 3){
        $diesel++;
    }

}
echo "Alcool: " . $alcool . "\n";
echo "Gasolina: " . $gasolina . "\n";
echo "Diesel: " . $diesel . "\n";

?>