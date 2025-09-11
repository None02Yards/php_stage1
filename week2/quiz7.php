
<!-- using function method one to check and the sec as helper -->
<?php
$range  = $_GET['ab'] ?? '';
$result = '';

function isLucky($num) {
    do {
        $d = $num % 10;
        if ($d != 4 && $d != 7) return false;
        $num = (int)($num / 10);
    } while ($num > 0);
    return true;
}

function parseTwoInts($s) {
    $s = trim($s);
    $parts = explode(' ', $s, 2); // one space
    if (count($parts) !== 2 || $parts[0] === '' || $parts[1] === '') return null;
    return [(int)$parts[0], (int)$parts[1]];
}

if ($range !== '') {
    $ab = parseTwoInts($range);
    if ($ab === null) {
        $result = "<pre>Usage: type \"A B\" (2 numbers)</pre>";
    } else {
        [$a, $b] = $ab;
        if ($a > $b) { $tmp = $a; $a = $b; $b = $tmp; }

        $out = '';
        $printed = false; // for spaces

        for ($num = $a; $num <= $b; $num++) {
            if (isLucky($num)) {
                if ($printed) $out .= ' ';
                $out .= $num;
                $printed = true;
            }
        }

        $result = "<pre>" . ($printed ? $out : "-1") . "</pre>";
    }
}
?>
<!doctype html>
<html><body>
  <form method="get">
    <input style="width:260px" name="ab" placeholder="Type two numbers with space between"
           value="<?= ((string)$range) ?>">
  </form>
  <?= $result ?>
</body></html>

