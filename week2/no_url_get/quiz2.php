<?php
$input = "10";  

$N = (int)$input;

if ($N < 1)  $N = 1;
if ($N > 1000) $N = 1000;

if ($N < 2) {
    echo "-1" . PHP_EOL;
} else {
    for ($i = 2; $i <= $N; $i += 2) {
        echo $i . PHP_EOL;
    }
}
?>
 
 <!-- using function -->

 <?php
function printEvenUpTo_String(string $numParam): void {
    if ($numParam === '') {
        echo "No input." . PHP_EOL;
        return;
    }

    $N = (int)$numParam;
    if ($N < 1)  $N = 1;
    if ($N > 1000) $N = 1000;

    if ($N < 2) {
        echo "-1" . PHP_EOL;
        return;
    }
    $evens = [];
    for ($i = 2; $i <= $N; $i += 2) {
        $evens[] = $i;
    }

    // print output using foreach
    foreach ($evens as $val) {
        echo $val . PHP_EOL;
    }
}


printEvenUpTo_String("10"); //  2 4 6 8 10


?>

<!-- using usable function -->

<?php
function buildEvenArrayUpTo_String(string $numParam): array {
    if ($numParam === '') return [];

    $N = (int)$numParam;
    if ($N < 1)  $N = 1;
    if ($N > 1000) $N = 1000;

    if ($N < 2) return [];

    $evens = [];
    for ($i = 2; $i <= $N; $i += 2) {
        $evens[] = $i;
    }
    return $evens;
}

$evens = buildEvenArrayUpTo_String("10");

if (empty($evens)) {
    echo "-1" . PHP_EOL;
} else {
    foreach ($evens as $val) {
        echo $val . PHP_EOL;
    }
}
