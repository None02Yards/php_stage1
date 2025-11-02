
<?php
$numberStr = "6";  // try "6", "7", "4"
if ($numberStr === '') { echo "No input\n"; exit; }

$N = (int)$numberStr;
if ($N < 1) $N = 1;
if ($N > 10000) $N = 10000;

$divisors = [];
for ($i = 1; $i <= $N; $i++) {
    if ($N % $i == 0) {
        array_push($divisors, $i);
    }
}

foreach ($divisors as $d) {
    echo $d, PHP_EOL;
}



?>

<!-- using function -->
<?php
$numberStr = "6";

if ($numberStr === '') {
    echo "No input\n";
    exit;
}

$N = (int)$numberStr;
if ($N < 1) $N = 1;
if ($N > 10000) $N = 10000;


$divisors = [];

for ($i = 1; $i * $i <= $N; $i++) {
    if ($N % $i == 0) {
        array_push($divisors, $i);
        $j = intdiv($N, $i);
        if ($j != $i) {
            array_push($divisors, $j);
        }
    }
}

// Ascendin order
sort($divisors);

foreach ($divisors as $d) {
    echo $d, PHP_EOL;
}

?>
<!-- using reusable function -->

<?php
function buildDivisorsAscendingFromString(string $numberStr): array {
    if ($numberStr === '') return [];         

    $N = (int)$numberStr;
    if ($N < 1)      $N = 1;
    if ($N > 10000)  $N = 10000;    
    $divisors = [];
    for ($i = 1; $i * $i <= $N; $i++) {
        if ($N % $i == 0) {
            array_push($divisors, $i);
            $j = intdiv($N, $i);
            if ($j != $i) array_push($divisors, $j);
        }
    }
    sort($divisors); // ascending
    return $divisors;
}
$input = "6"; 
$divs = buildDivisorsAscendingFromString($input);

if (empty($divs)) {
    echo "No input", PHP_EOL;
} else {
    foreach ($divs as $d) {
        echo $d, PHP_EOL;
    }
}
