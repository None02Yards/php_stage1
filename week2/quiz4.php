<?php

$numberdigi = $_GET['x'] ?? '';
$result = '';

if ($numberdigi !== '') {
    $x = (int)$numberdigi;

    $isPrime = true;
    if ($x < 2) {
        $isPrime = false;                 
    } elseif ($x == 2) {
        $isPrime = true;                
    } elseif ($x % 2 == 0) {
        $isPrime = false;                 
    } else {
        $i = 3;
        while ($i * $i <= $x) {           
            if ($x % $i == 0) { $isPrime = false; break; }
            $i += 2;
        }
    }

    $result = "<pre>" . ($isPrime ? "YES" : "NO") . "</pre>";
}
?>
<!doctype html>
<html><body>
  <form method="get">
    <input name="x" type="number" placeholder="Enter a number"
           value="<?=((string)$numberdigi) ?>">
  </form>
  <?= $result ?>
</body></html>

