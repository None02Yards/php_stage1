<?php

$digitnum = $_GET['number'] ?? '';
$output = '';

if ($digitnum !== '') {
    $n = (int)$digitnum;                 
    if ($n < 1) $n = 1;
    if ($n > 99) $n = 99;

    $output = "<pre>";
    $row = 1;
    do {                             
        $line = '';
        $col = 1;
        do {                           
            $line .= '*';
            $col++;
        } while ($col <= $row);

        $out .= $line . "\n";          
        $row++;
    } while ($row <= $n);
    $output .= "</pre>";
}
?>
<!doctype html>
<html><body>
  <form method="get">
    <input style="width: 200px;" name="number" type="number" min="1" max="99" placeholder="Enter Number to get its triangle"
           value="<?=((string)$digitnum) ?>">
  </form>
  <?= $out ?>
</body></html>
