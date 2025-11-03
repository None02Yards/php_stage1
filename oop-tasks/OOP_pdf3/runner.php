<?php

require_once('./person.php');
require_once('./shape.php');
require_once('./animal.php');

require_once('./Abs-shape.php');

echo "<h3>Student</h3>";

$student = new Student0("Yard", "Cairo", "CS", 2, 4500);
$staff = new Staff0("Sara", "rome", "Math Dept", 18000);

echo $student . "<br>";
echo $staff . "<br>";

echo "<hr>";

echo "<h3>Shapes</h3>";

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

echo "<hr>";


echo "<h3>Animal</h3>";
$catObj = new Cat("Mittens");
$dogAlpha = new Dog("Bolt");
$dogBeta = new Dog("Max");

echo $catObj . "<br>";      
$catObj->makeSound();       

echo $dogAlpha . "<br>";     
$dogAlpha->makeSound();   

$dogAlpha->greetOtherDog($dogBeta); 

echo "<hr>";


echo "<h3>big-Shape</h3>";

$bubble = new Bubble(4.5, "blue", false);
echo $bubble . "<br>";
echo "Area: " . $bubble->getArea() . ", Perimeter: " . $bubble->getPerimeter() . "<br>";

$panel = new Panel(5, 10);
echo $panel . "<br>";
echo "Area: " . $panel->getArea() . ", Perimeter: " . $panel->getPerimeter() . "<br>";


$tile = new Tile(7);
echo $tile . "<br>";
echo "Area: " . $tile->getArea() . ", Perimeter: " . $tile->getPerimeter() . "<br>";
