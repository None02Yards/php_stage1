
<?php
$X = 5;
$Y = 10;

if ($X >= 1 && $X <= 100000 && $Y >= 1 && $Y <= 100000) {
    for ($i = 0; $i < 3; $i++) {
        if ($i == 0) {
            $operation = '+'; $res = $X + $Y;
        } elseif ($i == 1) {
            $operation = '*'; $res = $X * $Y;
        } else {
            $operation = '-'; $res = $X - $Y;
        }
        echo "$X $operation $Y = $res\n";
    }
} else {
    echo "Inputs must be between 1 and 100000.\n";
}
