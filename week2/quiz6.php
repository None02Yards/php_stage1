

<?php
$numParam = $_GET['number'] ?? '';
$out = '';

if ($numParam !== '') {
    $number = (int)$numParam;

    $out = "<pre>";
    for ($i = 1; $i <= $number; $i++) {
        if ($number % $i == 0) {
            $out .= $i . "\n";   // append divisor
        }
    }
    $out .= "</pre>";
}
?>
<!doctype html>
<html><body>
  <form method="get">
    <input name="number" type="number" min="1" max="10000" placeholder="Enter Number"
           value="<?=((string)$numParam) ?>">
  </form>
  <?= $out ?>
</body></html>
