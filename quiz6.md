6. A number of two digits is lucky if one of its digits is divisible by the other.
For example, 39, 82, and 55 are lucky, while 79 and 43 are not.
Given a number between 10 and 99, determine whether it is lucky or not.
Input
Only one line containing a single number N
(10≤N≤99)
.
Output
Print "YES" if the given number is lucky, otherwise print "NO".
Examples
Input
39
Output
YES
Input
64
Output
NO


## method  1
```php
<?php
$N = 39;                 

$first = (int)($N / 10); 
$last  = $N % 10;       

if (($last != 0 && $first % $last == 0) || ($first != 0 && $last % $first == 0)) {
    echo "YES\n";
} else {
    echo "NO\n";
}
```

### method 2


```php

<?php
$N = (int)$argv[1];

$first = (int)($N / 10);
$last  = $N % 10;

if (($last != 0 && $first % $last == 0) || ($first != 0 && $last % $first == 0)) {
    echo "YES\n";
} else {
    echo "NO\n";
}

```
### CLI version Run :

```bash
 php quiz6.php 39
```

