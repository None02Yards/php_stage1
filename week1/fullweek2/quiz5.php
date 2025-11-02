<?php
$X = 4569; 

$division = 1;
for ($i = 0; $i < 4; $i++) {
    switch ($i) {
        case 0: $division = 1; break;
        case 1: $division = 10; break;
        case 2: $division = 100; break;
        default: $division = 1000; break;
    }
    if ($X / $division < 10) break;
}

$first = (int)($X / $division);
echo ($first % 2 == 0) ? "EVEN\n" : "ODD\n";
