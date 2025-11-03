<?php

interface Shape {
    public function getArea(): float;
    public function getPerimeter(): float;
}

abstract class Form implements Shape {
    protected string $shade = "red";
    protected bool $texture = true;

    public function __construct(string $shade = "red", bool $texture = true) {
        $this->shade = $shade;
        $this->texture = $texture;
    }

    public function getShade(): string {
        return $this->shade;
    }

    public function setShade(string $shade): void {
        $this->shade = $shade;
    }

    public function hasTexture(): bool {
        return $this->texture;
    }

    public function setTexture(bool $texture): void {
        $this->texture = $texture;
    }

    public function __toString(): string {
        return "Form[shade={$this->shade}, textured={$this->texture}]";
    }
}

class Bubble extends Form {
    private float $diameter;

    public function __construct(float $diameter, string $shade = "red", bool $texture = true) {
        parent::__construct($shade, $texture);
        $this->diameter = $diameter;
    }

    public function getArea(): float {
        return pi() * pow($this->diameter, 2);
    }

    public function getPerimeter(): float {
        return 2 * pi() * $this->diameter;
    }

    public function __toString(): string {
        return "Bubble[" . parent::__toString() . ", diameter={$this->diameter}]";
    }
}


class Panel extends Form {
    protected float $breadth;
    protected float $height;

    public function __construct(float $breadth, float $height, string $shade = "red", bool $texture = true) {
        parent::__construct($shade, $texture);
        $this->breadth = $breadth;
        $this->height = $height;
    }

    public function getArea(): float {
        return $this->breadth * $this->height;
    }

    public function getPerimeter(): float {
        return 2 * ($this->breadth + $this->height);
    }

    public function __toString(): string {
        return "Panel[" . parent::__toString() . ", breadth={$this->breadth}, height={$this->height}]";
    }
}

class Tile extends Panel {
    public function __construct(float $edge, string $shade = "red", bool $texture = true) {
        parent::__construct($edge, $edge, $shade, $texture);
    }

    public function __toString(): string {
        return "Tile[" . parent::__toString() . "]";
    }
}


