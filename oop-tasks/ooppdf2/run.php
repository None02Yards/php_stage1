<?php
require_once("Account.php");
require_once("Ball.php");
require_once("Date.php");
require_once("time.php");


echo "<h2> Account info</h2>";

$acc1 = new CustomerAccount("A001", "Yard", 500);
$acc2 = new CustomerAccount("A002", "Sara", 300);

printAccountInfo($acc1);
printAccountInfo($acc2);
$acc1->credit(200);              
$acc1->debit(100);               
$acc1->transferTo($acc2, 250);   
printAccountInfo($acc1);
printAccountInfo($acc2);
echo "<hr>"; 

echo "<h2> way2</h2>";
runAccount();


echo "<h2>Ball Movement</h2>";
testMultipleBalls();

echo"<br>";

// $date = new Date(5, 9, 2025);
// echo $date;

echo "<h2>Date</h2>";
testDate();

echo "<h2>Time</h2>";

$t = new Time(23, 59, 59);
echo "Current: $t <br>";
$t->nextSecond();
echo "Next sec: $t <br>";
$t->previousSecond(); 
echo "Pre sec: $t <br>";
$t->nextSecond()->nextSecond()->nextSecond();
echo "After 3+ secs: $t <br>";