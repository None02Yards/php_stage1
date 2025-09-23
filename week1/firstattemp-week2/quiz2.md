2.2.Given two numbers X and Y. Print the summation and multiplication and
subtraction of these 2numbers.
Input
Only one line containing two separated numbers X, Y (1 ≤ X, Y ≤ 105
).

Output
Print 3 lines that contain the following in the same order:
1. "X + Y = summation result" without quotes.
2. "X * Y = multiplication result" without quotes.
3. "X - Y = subtraction result" without quotes.
Input:

5 10

output
5 + 10 = 15
5 * 10 = 50
5 - 10 = -5



```php
<?php
$x = 5;
$y = 10;

echo $x . " + " . $y . " = " . ($x + $y) . "<br>";
echo $x . " * " . $y . " = " . ($x * $y) . "<br>";
echo $x . " - " . $y . " = " . ($x - $y) . "<br>";
```

### way 2 

```php
<?php
$x = 5; $y = 10;

function printOp($x, $y, $op) {
  switch ($op) {
    case '+': echo "$x + $y = " . ($x + $y) . PHP_EOL; break;
    case '*': echo "$x * $y = " . ($x * $y) . PHP_EOL; break;
    case '-': echo "$x - $y = " . ($x - $y) . PHP_EOL; break;
  }
}

printOp($x, $y, '+');
printOp($x, $y, '*');
printOp($x, $y, '-');
```
