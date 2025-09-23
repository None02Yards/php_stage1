<?php
$A = 1; $B = 2; $C = 3; $D = 4;

$MIN = -100000;
$MAX = 100000;

$test =  ($A >= $MIN && $A <= $MAX); 

for ($i = 0; $i < 4; $i++) {
    switch ($i) {
        case 0: $v = $A; break;
        case 1: $v = $B; break;
        case 2: $v = $C; break;
        default: $v = $D; 
    }
    if ($v < $MIN || $v > $MAX) {
        $test = false;
        break; 
    }
}
if ($test) {
    $X = ($A * $B) - ($C * $D);
    echo "Difference = $X\n";
} else {
    echo "Numbers are not in the range.\n";
}
