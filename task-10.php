<?php

$n = (int)readline("Ədəd daxil edin: ");
$digits = str_split((string)abs($n));
foreach ($digits as $d) {
    echo $d . "^2 = " . ($d * $d) . PHP_EOL;
}