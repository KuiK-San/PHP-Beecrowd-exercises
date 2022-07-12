<?php

$idade = (int)FGETS(STDIN);

$anos = (int)( $idade / 365);
$mod_anos =(int) ($idade % 365);

$meses = (int) ($mod_anos / 30);
$dias = (int) ($mod_anos % 30);

echo "$anos ano(s)\n";
echo "$meses mes(es)\n";
echo "$dias dia(s)\n"



?>