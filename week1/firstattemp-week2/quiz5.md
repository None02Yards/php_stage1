5. Memo and Momo are playing a game. Memo will choose a positive number a, and
Momo will choose a positive number b.
Your task is to tell them who will win according to the following rules:
• If both a
and b are divisible by k
, both of them win and you should print "Both".
If a is divisible by k but b
isn't, Memo wins and you should print "Memo".
If b is divisible by k but a
isn't, Momo wins and you should print "Momo".
If both a and b are not divisible by k
• , no one wins and you should print "No One".
Input
Only one line containing three positive numbers a, b and k (1≤a,b,k≤1018).
Output
Print the answer as described in the statement.
Examples
Input
15 7 3
Output
Memo
Input
22 10 2
Output
Both

```php

<?php
$a = "15";
$b = "7";
$k = "3";

if (is_numeric($a) && is_numeric($b) && is_numeric($k)) {
    $a = (int)$a; 
    $b = (int)$b; 
    $k = (int)$k;

    if ($a % $k == 0 && $b % $k == 0) {
        echo "Both\n";
    } elseif ($a % $k == 0) {
        echo "Memo\n";
    } elseif ($b % $k == 0) {
        echo "Momo\n";
    } else {
        echo "No One\n";
    }
} else {
    echo "Please enter numbers only\n";
}

```
### using browser prompet 

```php

<?php $n = isset($_GET['n']) ? (int)$_GET['n'] : null; ?>
`
<form method="get">
  <input type="number" name="n" min="10" max="99" required placeholder="10..99">
  <button>Check</button>
</form>
`
<?php
if ($n !== null) {
  $t = intdiv($n, 10); $u = $n % 10;
  echo (($u != 0 && $t % $u == 0) || ($t != 0 && $u % $t == 0)) ? "YES" : "NO";
}
```