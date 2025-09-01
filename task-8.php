<?php

$n = (int)readline("Ədəd daxil edin: ");
$digits = str_split((string)abs($n));
sort($digits);
echo "Artan sıra: " . implode('', $digits);
?>