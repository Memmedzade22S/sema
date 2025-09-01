<?php
$p = 6754;
$sum = 0;
$reqemler = str_split((string)$p);
foreach ($reqemler as $reqem) {
    $sum += (int)$reqem;
}
echo "Cem = $sum\n";
?>