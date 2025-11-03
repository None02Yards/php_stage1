<?php

class Animal {
    protected string $animalName;

    public function __construct(string $animalName) {
        $this->animalName = $animalName;
    }

    public function __toString(): string {
        return 'Animal[name=' . $this->animalName . ']';
    }
}


class Mammal extends Animal {
    public function __construct(string $mammalName) {
        parent::__construct($mammalName);
    }

    public function __toString(): string {
        return 'Mammal[' . parent::__toString() . ']';
    }
}


class Cat extends Mammal {
    public function __construct(string $catName) {
        parent::__construct($catName);
    }

    public function makeSound(): void {
        echo 'Meow<br>';
    }

    public function __toString(): string {
        return 'Cat[' . parent::__toString() . ']';
    }
}


class Dog extends Mammal {
    public function __construct(string $dogName) {
        parent::__construct($dogName);
    }

    public function makeSound(): void {
        echo 'Woof<br>';
    }

    public function greetOtherDog(Dog $otherDog): void {
        echo 'Woooof<br>';
    }

    public function __toString(): string {
        return 'Dog[' . parent::__toString() . ']';
    }
}




