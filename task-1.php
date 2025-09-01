<?php
$n = 56; 
if ($n < 10 || $n > 99) {
    echo "Xeta: eded ikireqemli olmalidir!\n";
} else {
    $onluq = intdiv($n, 10);
    $teklik = $n % 10;
    echo "$onluq $teklik\n";
}
?>