<?php
function reversePalindrome_String_usingArray(string $numStr): void {
    if ($numStr === '') { echo "No input\n"; return; }
    $n = (int)$numStr;
    if ($n < 1) $n = 1;
    if ($n > 10000000) $n = 10000000;

    $orig = $n;

    $digits = [];
    $t = $n;
    while ($t > 0) {
        $d = $t % 10;
        array_push($digits, $d);  
        $t = intdiv($t, 10);
    }
    $rev = 0;
    foreach ($digits as $d) {
        $rev = $rev * 10 + $d;
    }
    
    echo $rev . PHP_EOL;
    echo ($rev === $orig ? "YES" : "NO") . PHP_EOL;
}


reversePalindrome_String_usingArray("12121"); 
reversePalindrome_String_usingArray("160");  
