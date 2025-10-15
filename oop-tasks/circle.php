<?php
class Circle
{
    // Defaults per spec
    private float $radius = 1.0;
    private string $color = 'red';

    public function __construct(float $radius = 1.0, string $color = 'red')
    {
        $this->setRadius($radius);
        $this->setColor($color);
    }
    
    // Getters
    public function getRadius(): float { return $this->radius; }
    public function getColor(): string { return $this->color; }
    // Setters
    public function setRadius(float $radius): void
    {
        $this->radius = $radius;
    }
    public function setColor(string $color): void
    {
        $this->color = $color;
    }
// calc
    public function getArea(): float
    {
        $pi = 3.14159; // manually pi
    return $pi * $this->radius * $this->radius;    }

    public function __toString(): string
    {
    return "Circle[radius={$this->radius}, color={$this->color}]";
    }
    }

?>

<?php
class Circle2 {
    private float $radius;
    private string $color;

    private function __construct(float $radius, string $color) {
        $this->radius = $radius;
        $this->color  = $color;
    }

    public static function createDefault(): self {
        return new self(1.0, "red");
    }
    public static function createWithRadius(float $radius): self {
        return new self($radius, "red");
    }

    public static function createWithColor(string $color): self {
    return new self(1.0, $color);
}


    public function getColor(): string {
        return $this->color;
    }

    public function getRadius(): float {
        return $this->radius;
    }

    public function getArea(): float {
        $pi = 3.14159; // manually pi 
    return $pi * $this->radius * $this->radius; // πr²
    }

    public function setRadius(float $radius): void {
        $this->radius = $radius;
    }

    public function setColor(string $color): void {
        $this->color = $color;
    }
     
    public function __toString(): string {
        return "Circle[radius={$this->radius},color={$this->color}]";
    }
}

function printCircleInfo(Circle2 $circle): void {
    echo $circle . "<br>";
    echo "Radius: {$circle->getRadius()}<br>";
    echo "Color: {$circle->getColor()}<br>";
    echo "Area: {$circle->getArea()}<br><br>";
}
