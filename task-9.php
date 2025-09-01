<?php

$n = (int)readline("Ədəd daxil edin: ");
$digits = str_split((string)abs($n));
foreach ($digits as $d) {
    echo $d . " " . ($d % 2 == 0 ? "cütdür" : "təkdir") . PHP_EOL;
}