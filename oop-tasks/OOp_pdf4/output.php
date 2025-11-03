<?php

require_once 'Author.php';
require_once 'Book.php';
require_once 'cylinder.php';

$writer = new Writer("Nora Elwy", "nora@mail.com", "f");
$booklet = new Publication("Mastering PHP OOP", $writer, 39.99, 25);

echo $booklet . "<br>";

echo "Title: " . $booklet->fetchTitle() . "<br>";
echo "Writer email: " . $booklet->fetchAuthor()->getContactEmail() . "<br>";
echo "Cost: $" . $booklet->fetchValue() . "<br>";

echo '<hr>';

$a1 = new Author("Sarah L.", "sarah@example.com", "f");
$a2 = new Author("James T.", "james@example.com", "m");

$book = new Book("Advanced PHP", [$a1, $a2], 59.95, 10);

echo $book . "<br>";

echo $book->getAuthorName(); 

echo  "<hr>";

$writer = new Author0("Tan Ah Teck", "ahteck@somewhere.com");
$book1 = new Book0("978-1234567890", "Learning PHP", $writer, 45.00, 5);

echo $book1 . "<br>";

echo $book1->getAuthorNames(); 


echo '<hr>';

$c = new Cylinder(2.5, 5.0, "blue");
echo $c . '<br>';
echo "Area: " . $c->getArea() . '<br>';
echo "Volume: " . $c->getVolume();
