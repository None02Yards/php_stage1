.1

 Given four numbers A, B, C and D. Print the result of the following
equation :
X = (A * B) -(C * D).
Input
Only one line containing 4 separated numbers A, B, C and D 
( - 105 ≤ A, B, C, D ≤ 105).
Output Print "Difference = " without quotes followed by the equation
result.
Input:
1 2 3 4
output:
Difference = -10


 ### method 1

```php
<?php
$A = 1;
$B = 2;
$C = 3;
$D = 4;

$MIN = -100000;
$MAX =  100000;

if (
    $A >= $MIN && $A <= $MAX &&
    $B >= $MIN && $B <= $MAX &&
    $C >= $MIN && $C <= $MAX &&
    $D >= $MIN && $D <= $MAX
) {

    $X = ($A * $B) - ($C * $D);
    echo "Difference = $X\n";
} else {
    echo "Values must be between -100000 and 100000\n";
}
```
#### another way2

```php
<?php
$A = 1; $B = 2; $C = 3; $D = 4;

$X = ($A * $B) - ($C * $D);
echo "Difference = $X\n";
```