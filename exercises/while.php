<?php
echo "Digite um Valor ";
$valor = readline();

while ($valor != 0) {
    echo "echo o Valor digitado foi $valor\n";
    echo "Digite outro valor: ";
    $valor = readline();
}
?>