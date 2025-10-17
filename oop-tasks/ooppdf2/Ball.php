<?php

class Ball {
    public function __construct(
        private float $x,
        private float $y,
        private int $radius,
        private float $xDelta,
        private float $yDelta
    ) {}
// bunch of endless getters and setters -__-
    public function setX(float $x): static 
    { $this->x = $x; return $this; }
    public function setY(float $y): static 
    { $this->y = $y; return $this; }
    public function setRadius(int $r): static 
    { $this->radius = $r; return $this; }
    public function setXDelta(float $dx): static
     { $this->xDelta = $dx; return $this; }
    public function setYDelta(float $dy): static
     { $this->yDelta = $dy; return $this; }

    public function getX(): float { return $this->x; }
    public function getY(): float { return $this->y; }
    public function getRadius(): int { return $this->radius; }
    public function getXDelta(): float { return $this->xDelta; }
    public function getYDelta(): float { return $this->yDelta; }

//  let's work on logic!!!!
    public function move(): static {
        $this->x += $this->xDelta;
        $this->y += $this->yDelta;
        return $this;
    }

    public function reflectHorizontal(): static {
        $this->xDelta *= -1;
        return $this;
    }
    public function reflectVertical(): static {
        $this->yDelta *= -1;
        return $this;
    }
    public function __toString(): string {
        return "Ball[(x={$this->x}, y={$this->y}), speed=({$this->xDelta}, {$this->yDelta})]";
    }
}

function testMultipleBalls(): void {
    $balls = [
        new Ball(0, 0, 5, 2.0, 3.0),
        new Ball(5, 5, 4, -1.5, 2.5),
        new Ball(10, 2, 6, 1.0, -1.0),
    ];

    foreach ($balls as $i => $ball) {
        echo "Ball $i Start: $ball <br>";
        $ball->move()->reflectHorizontal()->move()->reflectVertical()->move();
        echo "Ball $i End: $ball <br><br>";
    }
}




