<?php

$numberdigi = "29";  
$result = '';

if ($numberdigi !== '') {
    $x = (int)$numberdigi;

    $isPrime = true;

    if ($x < 2) {
        $isPrime = false;              //2 < any number isn't even numbers 
    } elseif ($x == 2) {
        $isPrime = true;             
    } elseif ($x % 2 == 0) {
        $isPrime = false;           
    } else {
        // divide inly odd numbers 
        $i = 3;
        while ($i * $i <= $x) {
            if ($x % $i == 0) {        
                $isPrime = false;
                break;
            }
            $i += 2;                 
        }
    }

    $result = $isPrime ? "YES" : "NO";
}

echo $result, PHP_EOL;

?>

<!-- using function -->

<?php
function isPrime_String_usingArray(string $numStr): void {
    if ($numStr === '') { echo "No input\n"; return; }

    $x = (int)$numStr;
    if ($x < 2) { echo "NO\n"; return; }
    if ($x == 2) { echo "YES\n"; return; }

    if ($x % 2 == 0) { echo "NO\n"; return; }
  
    $divisors = [];

    $i = 3;
    while ($i * $i <= $x) {
        if ($x % $i == 0) {
            array_push($divisors, $i); 
            break; 
        }
        $i += 2;
    }

    echo empty($divisors) ? "YES\n" : "NO\n";
}


isPrime_String_usingArray("29"); // YES
isPrime_String_usingArray("10"); // NO
isPrime_String_usingArray("1");  // NO
