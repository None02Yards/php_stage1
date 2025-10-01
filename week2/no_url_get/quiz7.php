<?php
function printLuckyRange_void(string $input): void {
    if ($input === '') { echo "No input\n"; return; }
    $parts = explode(' ', $input, 2);
    if (count($parts) !== 2 || $parts[0] === '' || $parts[1] === '') {
        echo "Usage: type \"A B\" (2 numbers)\n";
        return;
    }
    $a = (int)$parts[0];
    $b = (int)$parts[1];
    if ($a > $b) { $t = $a; $a = $b; $b = $t; }

    $out = [];
    for ($n = $a; $n <= $b; $n++) {
   
        if ($n == 0) continue;
        $t = $n; $ok = true;
        do {
            $d = $t % 10;
            if ($d != 4 && $d != 7) { $ok = false; break; }
            $t = intdiv($t, 10);
        } while ($t > 0);

        if ($ok) { $out[] = $n; }
    }

    echo empty($out) ? "-1\n" : (implode(' ', $out) . "\n");
}

printLuckyRange_void("1 100");   // 4 7 44 47 74 77


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
