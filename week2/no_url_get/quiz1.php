<?php
$input = "5";  

$N = (int)$input;

if ($N >= 1 && $N <= 1000) {
    for ($i = 1; $i <= $N; $i++) {
        echo $i . PHP_EOL;
    }
} else {
    echo "N must be between 1 and 1000." . PHP_EOL;
}

?>

<!-- using function -->
<?php
function printFrom1ToN_String(string $numParam): void {
    if ($numParam === '') {
        echo "No input.\n";
        return;
    }

    $n = (int)$numParam;

    if ($n < 1)  $n = 1;
    if ($n > 1000) $n = 1000;

    for ($i = 1; $i <= $n; $i++) {
        echo $i . PHP_EOL;
    }
}

printFrom1ToN_String("7");   
