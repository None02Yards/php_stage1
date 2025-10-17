<?php
interface RectangleContract {
    public function getLength(): float;
    public function setLength(float $length): void;
    public function getWidth(): float;
    public function setWidth(float $width): void;
    public function getArea(): float;
    public function getPerimeter(): float;
    public function __toString(): string;
}

class Rectangle implements RectangleContract {
    private float $length;
    private float $width;

    public function __construct(float $length = 1.0, float $width = 1.0) {
        $this->length = $length;
        $this->width  = $width;
    }

    public function getLength(): float { return $this->length; }
    public function setLength(float $length): void { $this->length = $length; }
    public function getWidth(): float  { return $this->width; }
    public function setWidth(float $width): void { $this->width = $width; }

    public function getArea(): float { return $this->length * $this->width; }
    public function getPerimeter(): float { return 2 * ($this->length + $this->width); }

    public function __toString(): string {
        return "Rectangle[length={$this->length},width={$this->width}]";
    }
}
function printShapeInfo(RectangleContract $s): void {
    echo $s, "<br>";
    echo "Area: {$s->getArea()}", "<br>";
    echo "Perimeter: {$s->getPerimeter()}", "<br>";
}
