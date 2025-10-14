<?php
class Circle {
    // Encaps!
    private float $radius;
    private string $color;
    public function __construct(float $radius = 1.0, string $color = "red") {
        $this->radius = $radius;
        $this->color  = $color;
    }

    public function getRadius(): float {
        return $this->radius;
    }

    public function getArea(): float {
        return M_PI * $this->radius * $this->radius;
    }
}

$c2 = new Circle(2);     
echo $c2->getRadius() . PHP_EOL; 
echo $c2->getArea();  

?>

<!-- another way using private  constructor  -->

<?php
class Circle {
    private float $radius;
    private string $color;

    private function __construct(float $radius, string $color) {
        $this->radius = $radius;
        $this->color  = $color;
    }

    
    public static function createDefault(): self {
        return new self(1.0, "red");
    }

    // "Constructor with radius" (one arg): color still "red"
    public static function createWithRadius(float $radius): self {
        return new self($radius, "red");
    }

    // Public methods required by the task
    public function getRadius(): float {
        return $this->radius;
    }

    public function getArea(): float {
        return M_PI * $this->radius * $this->radius; // π r^2
    }
}

$c1 = Circle::createDefault();     
$c2 = Circle::createWithRadius(2.5);

echo $c1->getRadius() . PHP_EOL;   
echo $c1->getArea()   . PHP_EOL;   
echo $c2->getRadius()  . PHP_EOL;
echo $c2->getArea()   . PHP_EOL;


?>

<!-- using final class just tolock on the private construct and the static methods -->
 <!-- so no need for known values to be extands -->
<?php
final class Circle {
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
        if ($radius <= 0) {
            throw new InvalidArgumentException("Radius must be positive.");
        }
        return new self($radius, "red");
    }

    public function getRadius(): float { return $this->radius; }
    public function getArea(): float { return M_PI * $this->radius * $this->radius; }
}

$c1 = Circle::createDefault();     
$c2 = Circle::createWithRadius(2.5);

echo $c1->getRadius() . PHP_EOL;   
echo $c1->getArea()   . PHP_EOL;   
echo $c2->getRadius()  . PHP_EOL;
echo $c2->getArea()   . PHP_EOL;
