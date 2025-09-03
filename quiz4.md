4. Given two numbers N and M. Print the summation of their last digits.

Input
Only one line containing two numbers N, M
(0 ≤ N, M ≤ 1018).
Output
Print the answer of the problem.
Input:

13 12
output
5
Note
First Example :
last digit in the first number is 3 and last digit in the second
number is 2.So the answer is: (3 + 2 = 5)



```php
<?php
$N = 13;
$M = 12;

echo ($N % 10) + ($M % 10) . "\n";  

```
### Another way .2 using if..else

```php 

<?php
$x = 13;
$y = 12;

if ($x >= 10) { 
  $lx = $x % 10; 
} else { 
  $lx = $x; 
}

if ($y >= 10) { 
  $ly = $y % 10; 
} else { 
  $ly = $y; 
}
echo ($lx + $ly) . "\n";  // -> 5
```
