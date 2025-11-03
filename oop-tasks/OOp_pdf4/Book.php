<?php

require_once 'Author.php';

class Publication {
    private string $title;
    private Writer $creator;
    private float $value;
    private int $inStock;

    public function __construct(string $title, Writer $creator, float $value, int $inStock = 0) {
        $this->title = $title;
        $this->creator = $creator;
        $this->value = $value;
        $this->inStock = $inStock;
    }

    public function fetchTitle(): string {
        return $this->title;
    }

    public function fetchAuthor(): Writer {
        return $this->creator;
    }

    public function fetchValue(): float {
        return $this->value;
    }

    public function updateValue(float $newValue): void {
        $this->value = $newValue;
    }

    public function fetchStock(): int {
        return $this->inStock;
    }

    public function updateStock(int $units): void {
        $this->inStock = $units;
    }

    public function __toString(): string {
        return "Publication[title={$this->title},{$this->creator},value={$this->value},stock={$this->inStock}]";
    }
}
?>

<?php


class Book {
    private string $name;
   
    private array $authors;
    private float $price;
    private int $qty = 0;

    public function __construct(string $name, array $authors, float $price, int $qty = 0) {
        $this->name = $name;
        $this->authors = $authors;
        $this->price = $price;
        $this->qty = $qty;
    }

    public function getName(): string {
        return $this->name;
    }

    
    public function getAuthors(): array {
        return $this->authors;
    }

    public function getPrice(): float {
        return $this->price;
    }

    public function setPrice(float $price): void {
        $this->price = $price;
    }

    public function getQty(): int {
        return $this->qty;
    }

    public function setQty(int $qty): void {
        $this->qty = $qty;
    }

    public function getAuthorName(): string {
        $names = array_map(fn($author) => $author->getName(), $this->authors);
        return implode(",", $names);
    }

    public function __toString(): string {
        $authorStrings = array_map(fn($a) => (string)$a, $this->authors);
        $authorList = implode(",", $authorStrings);

        return "Book[name={$this->name},authors={$authorList},price={$this->price},qty={$this->qty}]";
    }
}
?>


<!-- 3rd method -->

<?php


class Book0 {
    private string $isbn;
    private string $title;
    private Author0 $author;
    private float $price;
    private int $qty = 0;

    public function __construct(string $isbn, string $title, Author0 $author, float $price, int $qty = 0) {
        $this->isbn = $isbn;
        $this->title = $title;
        $this->author = $author;
        $this->price = $price;
        $this->qty = $qty;
    }

    public function getIsbn(): string {
        return $this->isbn;
    }

    public function getName(): string {
        return $this->title;
    }

    public function getAuthor(): Author0 {
        return $this->author;
    }

    public function getPrice(): float {
        return $this->price;
    }

    public function setPrice(float $price): void {
        $this->price = $price;
    }

    public function getQty(): int {
        return $this->qty;
    }

    public function setQty(int $qty): void {
        $this->qty = $qty;
    }

    public function getAuthorNames(): string {
        return $this->author->getName();
    }

    public function __toString(): string {
        return "Book[isbn={$this->isbn},name={$this->title}," .
               $this->author . ",price={$this->price},qty={$this->qty}]";
    }
}

