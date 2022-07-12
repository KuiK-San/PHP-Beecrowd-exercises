<?php
//numero do funcionario
(int)$n_fun = FGETS(STDIN);

//horas trabalhadas
(int)$horas = FGETS(STDIN);

//valor da hora
(float)$valor_hora = FGETS(STDIN);

$salario = $horas * $valor_hora;

echo 'NUMBER = ' . $n_fun ;
echo "SALARY = U$ " . number_format($salario, "2", ".", "") . "\n";

?>