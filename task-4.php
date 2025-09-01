<?php
$n = (int)readline("Ədəd daxil edin: ");
$digits = str_split((string)abs($n));
echo "Cəm: " . array_sum($digits);
