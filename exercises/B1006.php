<?php

$a = FGETS(STDIN);
$b = FGETS(STDIN);
$c = FGETS(STDIN);

$media = (($a * 2) + ($b * 3) + ($c * 5)) / 10;

echo "MEDIA = " . number_format($media, 1, ".", "") . "\n"

?>