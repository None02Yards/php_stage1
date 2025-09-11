<?php
$ndigit = $_GET['num'] ?? '';
$outresult = '';

if ($ndigit !== '') {
    $X = (int)$ndigit;
    if ($X < 1)   $X = 1;
    if ($X > 1000) $X = 1000;

    if ($X < 2) {
        $outresult = "<pre>-1</pre>";
    } else {
        $outresult = "<pre>";
        for ($i = 2; $i <= $X; $i += 2) {
            $outresult .= $i . "\n";   
        }
        $outresult .= "</pre>";
    }
}
?>
<!doctype html>
<html><body>
  <form method="get">
    <input name="num" type="number" min="1" max="1000" placeholder="Enter Num"
           value="<?=((string)$ndigit) ?>">
  </form>
  <?= $outresult ?>
</body></html>
