- another solution for quiz4.php

```php 

<?php
$x = 13;
$y = 12;

$sum_last_digits = 0;

for ($i = 0; $i < 2; $i++) {
    if ($i == 0) {
        $num = $x;
    } else {
        $num = $y;
    }

    if ($num >= 10) {
        $last_digit = $num % 10;
    } else {
        $last_digit = $num;
    }

    $sum_last_digits += $last_digit;
}

echo $sum_last_digits . "\n";  
?> 
```