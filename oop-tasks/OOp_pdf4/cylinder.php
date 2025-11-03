<?php

require_once 'circle.php';


class Cylinder {
    use CircleT;

    private float $height = 1.0;

    public function __construct(
        float $radius = 1.0,
        float $height = 1.0,
        string $color = "red"
    ) {
        $this->circleRadius = $radius;
        $this->height = $height;
        $this->circleColor = $color;
    }

    public function setHeight(float $h): void {
        $this->height = $h;
    }

    public function getHeight(): float {
        return $this->height;
    }

    public function getVolume(): float {
        return $this->getArea() * $this->height;
    }

    public function __toString(): string {
        return "Cylinder[" . $this->circleToString() . ",height={$this->height}]";
    }
}
