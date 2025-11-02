<?php
$numbersParam = $_GET['nums'] ?? '';
$resultHtml   = '';

if ($numbersParam !== '') {
    $parts = preg_split('/\s+/', trim($numbersParam));
    $count = count($parts);

    if ($count > 0) {
        $maxValue = (int)$parts[0];
        $index    = 1;

        if ($count > 1) {
            do {
                $current = (int)$parts[$index];
                if ($current > $maxValue) {
                    $maxValue = $current;
                }
                $index++;
            } while ($index < $count);
        }

        $resultHtml = "<pre>$maxValue</pre>";
    }
}
?>
<!doctype html>
<html><body>
  <form method="get">
    <input name="nums" placeholder=" type num 1 8 5 7 5"
           value="<?= ((string)$numbersParam) ?>">
  </form>
  <?= $resultHtml ?>
</body></html>

