<?php
$N = 39; 

$tens = 0;  
$ones = 0; 

for ($i = $N, $pos = 0; $i > 0 && $pos < 2; $i = (int)($i / 10), $pos++) {
    $d = $i % 10;
   if ($pos == 0) {
    $ones = $d;
} else {
    $tens = $d;
}  
}

if (($ones != 0 && $tens % $ones == 0) || ($tens != 0 && $ones % $tens == 0)) {
    echo "YES\n";
} else {
    echo "NO\n";
}
