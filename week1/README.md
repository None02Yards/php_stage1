- another solution for - [**quiz4.php**](./fullweek2/quiz4.php)  
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

# Week 2 – PHP Quizzes

This folder contains 7 small PHP quiz programs, each solving one problem from **Week 2 Tasks**.

---

## Quiz List

- [**quiz1.php**](./fullweek2/quiz1.php)  
  ➝ *Problem 1*: Print `"Hello, (name)"` given a name.

- [**quiz2.php**](./fullweek2/quiz2.php)  
  ➝ *Problem 2*: Given two numbers `X` and `Y`, print their summation, multiplication, and subtraction.

- [**quiz3.php**](./fullweek2/quiz3.php)  
  ➝ *Problem 3*: Given four numbers `A, B, C, D`, calculate  
  `X = (A * B) - (C * D)` and print `"Difference = X"`.

- [**quiz4.php**](./fullweek2/quiz4.php)  
  ➝ *Problem 4*: Given two numbers `N` and `M`, print the summation of their last digits.

- [**quiz5.php**](./fullweek2/quiz5.php)  
  ➝ *Problem 5*: Given a 4-digit number `X`, print `"EVEN"` if its first digit is even, otherwise `"ODD"`.

- [**quiz6.php**](./fullweek2/quiz6.php)  
  ➝ *Problem 6*: *Memo and Momo game* — decide the winner based on divisibility rules with `k`.

- [**quiz7.php**](./fullweek2/quiz7.php)  
  ➝ *Problem 7*: Given a two-digit number `N`, print `"YES"` if one digit is divisible by the other, otherwise `"NO"`.

---

## Usage

Each quiz file can be run with PHP CLI:

```bash
php fullweek2/quiz1.php
php fullweek2/quiz2.php
...
php fullweek2/quiz7.php
