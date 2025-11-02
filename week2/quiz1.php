<?php
$numParam = $_GET['num'] ?? '';
$output = '';

if ($numParam !== '') {
    $n = (int)$numParam;
    if ($n < 1)  $n = 1;
    if ($n > 1000) $n = 1000;

    $output = "<pre>";
    for ($i = 1; $i <= $n; $i++) {
        $output .= $i . "\n";   
    }
    $output .= "</pre>";
}
?>
<!doctype html>
<html><body>
  <form method="get">
    <input style="width: 200px;" name="num" type="number" min="1" max="1000" placeholder="Enter Number"
           value="<?=((string)$numParam) ?>">
  </form>
  <?= $output ?>
</body></html>
