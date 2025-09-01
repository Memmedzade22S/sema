<?php

$n = (int)readline("Ədəd daxil edin: ");
$str = (string)abs($n);
if ($str === strrev($str)) {
    echo "Palindromdur";
} else {
    echo "Palindrom deyil";
}