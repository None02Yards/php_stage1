

<?php
$N = 13;
$M = 12;

// i'm using this for a test range it's just an opitional
$MIN = 0;
$MAX = 1000000000000000000;

if ($N < $MIN || $N > $MAX || $M < $MIN || $M > $MAX) {
    echo "Input values are out of range.\n";
    exit;
}

$sum = 0;
for ($i = 0; $i < 2; $i++) {
    $num = ($i == 0) ? $N : $M;
    $sum += $num % 10;  // last digit we need!
}
echo $sum . "\n";

