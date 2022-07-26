<?php
$alcool = 0;
$gasolina = 0;
$diesel = 0;


echo "MUITO OBRIGADO\n";

while ($input != 4) {
    $input = readline();
    switch ($input) {
        case '1':
            $alcool++;
            break;
        
        case '2':
            $gasolina++;
            break;
        case '3':
            $diesel++;
            break;
    }

}
echo "Alcool: " . $alcool . "\n";
echo "Gasolina: " . $gasolina . "\n";
echo "Diesel: " . $diesel . "\n";

?>