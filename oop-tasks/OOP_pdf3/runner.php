<?php

require_once('./person.php');
require_once('./shape.php');

$student = new Student0("Yard", "Cairo", "CS", 2, 4500);
$staff = new Staff0("Sara", "Alexandria", "Math Dept", 18000);

echo $student . "<br>";
echo $staff . "<br>";

echo "<hr>";

$shapes = [
    new Circle(2.5, "blue", true),
    new Rectangle(3.0, 4.0, "green", false),
    new Square(5.0, "purple", true)
];

foreach ($shapes as $shape) {
    echo $shape . "<br>";
    echo "Area: " . $shape->getArea() . "<br>";
    echo "Perimeter: " . $shape->getPerimeter() . "<br><br>";
}



