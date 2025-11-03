<?php

trait CircleT {
    protected float $circleRadius = 1.0;
    protected string $circleColor = "red";

    public function setRadius(float $r): void {
        $this->circleRadius = $r;
    }

    public function getRadius(): float {
        return $this->circleRadius;
    }

    public function setColor(string $c): void {
        $this->circleColor = $c;
    }

    public function getColor(): string {
        return $this->circleColor;
    }

    public function getArea(): float {
        return pi() * pow($this->circleRadius, 2);
    }

    public function circleToString(): string {
        return "Circle[radius={$this->circleRadius},color={$this->circleColor}]";
    }
}
