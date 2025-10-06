<?php
function printLuckyRange(int $a, int $b): void {
     
    if ($a > $b) { $t = $a; $a = $b; $b = $t; }
    if ($b < 1) { echo "-1\n"; return; }
    if ($a < 1) $a = 1;

    $printed = false;
    for ($n = $a; $n <= $b; $n++) {
        
        $t = $n; $ok = true;
        do {
            $d = $t % 10;
            if ($d !== 4 && $d !== 7) { $ok = false; break; }
            $t = intdiv($t, 10);
        } while ($t > 0);

       
        if ($ok) {
            if ($printed) echo ' ';
            echo $n;
            $printed = true;
        }
    }
    echo $printed ? PHP_EOL : "-1\n";
}
printLuckyRange(4, 20); // 4 7


?>

<!-- another way using helpers and drivers -->

<?php

function generateLuckyUpTo(int $limit): array {
    $res = [];
    $q = [4, 7];
    while (!empty($q)) {
        $v = array_shift($q);
        if ($v > $limit) continue;
        $res[] = $v;
        $q[] = $v * 10 + 4;
        $q[] = $v * 10 + 7;
    }
    sort($res);
    return $res;
}

// 2) Helper parse A B
function parseTwoInts_simple(string $s): ?array {
    $t1 = strtok($s, " ");
    $t2 = strtok(" ");
    if ($t1 === false || $t2 === false) return null;
    return [(int)$t1, (int)$t2];
}

// Driver 
$input = "1 100"; 
if ($input === '') { echo "No input\n"; exit; }
$ab = parseTwoInts_simple($input);
if ($ab === null) { echo "Usage: type \"A B\" (2 numbers)\n"; exit; }

[$a, $b] = $ab;
if ($a > $b) { $tmp = $a; $a = $b; $b = $tmp; }

$luckiesAll = generateLuckyUpTo($b);

$luckies = [];
foreach ($luckiesAll as $v) {
    if ($v < $a) continue;
    if ($v > $b) break;
    $luckies[] = $v;
}

echo empty($luckies) ? "-1\n" : (implode(' ', $luckies) . "\n");
