<?php

$digitnum = "5";   // "5", "10", "99"

if ($digitnum !== '') {
    $n = (int)$digitnum;
    if ($n < 1)  $n = 1;
    if ($n > 99) $n = 99;

    $out = '';
    $row = 1;
    do { 
        $line = '';
        $col = 1;
        do { 
            $line .= '*';
            $col++;
        } while ($col <= $row);

        $out .= $line . PHP_EOL; 
        $row++;
    } while ($row <= $n);

    echo $out;
} else {
    echo "No input" . PHP_EOL;
}

?>

<!-- using array -->

<?php
$digitnum = "5";  

if ($digitnum === '') {
    echo "No input\n";
    exit;
}
$n = (int)$digitnum;
if ($n < 1)  $n = 1;
if ($n > 99) $n = 99;

$lines = [];
$row = 1;

do {
    $line = '';
    $col = 1;
    do {
        $line .= '*';
        $col++;
    } while ($col <= $row);

    array_push($lines, $line);  
    $row++;
} while ($row <= $n);


echo implode(PHP_EOL, $lines) . PHP_EOL;
