<?php

$n = (int)readline("İkirəqəmli ədəd daxil edin: ");
if ($n < 10 || $n > 99) {
    echo "Xəta: ədəd ikirəqəmli olmalıdır!";
} else {
    $tens = intdiv($n, 10);
    $ones = $n % 10;
    echo $tens . " " . $ones;
}
?>