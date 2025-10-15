<?php
require_once("circle.php");

$c1 = new Circle() . "<br>";
$c2 = new Circle(2.5);
$c3 = new Circle(color: 'blue');
$c4 = new Circle(3, color: 'pink');

echo " C1: $c1 . <br>";
echo " C2: $c2 . <br>";
echo "C3: $c3 . <br>";
echo "C4: $c4<br>";

echo "C4 area: " . $c4->getArea() . "<br>";

?>

<?php
require_once("circle.php");

$c1 = Circle2::createDefault();
$c2 = Circle2::createWithRadius(2.5);    
$c3 = Circle2::createWithColor("yellow");    

$c3->setRadius(3.2);
$c2->setRadius(5.2);
$c1->setColor("blue");
$c2->setColor("pink");

printCircleInfo($c1);
printCircleInfo($c2);
printCircleInfo($c3);



?>

<?php
require_once("employee.php");



$emp = new Employee(101, "Yard", "Fouad", 12000);

echo $emp .  "<br>";                                  
echo "Monthly: " . $emp->getSalary() . "<br>";       
echo "Annual: "  . $emp->getAnnualSalary() .  "<br>";
$emp->raiseSalary(10); 
echo "After raise: " . $emp->getSalary() .  "<br>";   
echo $emp . "<br>";      

?>

<?php

require_once("employee.php");

$e = Employee1::create(402, "Sara", "Fouad", 9000);
printEmployeeInfo($e);

 ?>

<?php 

require_once("rectangle.php");
$r = new Rectangle(3, 2);
printShapeInfo($r);