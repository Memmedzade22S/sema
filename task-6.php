<?php

$n = (int)readline("Ədəd daxil edin: ");
$digits = str_split((string)abs($n));
echo "Ən böyük rəqəm: " . max($digits);