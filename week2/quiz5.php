
<?php
$num = $_GET['num'] ?? '';
$out = '';

if ($num !== '') {
    $num = (int)$num;
    $orig = $num;
    $rev  = 0;
    $t    = $num;
    while ($t > 0) {
        $rev = $rev * 10 + ($t % 10);
        $t   = (int)($t / 10);
    }
    $out = "<pre>" . $rev . "\n" . ($rev === $orig ? "YES" : "NO") . "</pre>";
}
?>
<!doctype html>
<html><body>
  <form method="get">
    <input name="num" type="number" placeholder="Enter N" value="<?=((string)$num) ?>">
  </form>
  <?= $out ?>
</body></html>

<!--  -->