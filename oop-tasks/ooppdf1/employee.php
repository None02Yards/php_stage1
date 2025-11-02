
<?php
class Employee {
    private int $id;
    private string $firstName;
    private string $lastName;
    private int $salary; // monthly 
    
    public function __construct(int $id, string $firstName, string $lastName, int $salary) {
        $this->id = $id;
        $this->firstName = $firstName;
        $this->lastName  = $lastName;
        $this->salary    = $salary;
    }

    public function getId(): int { return $this->id; }
    public function getFirstName(): string { return $this->firstName; }
    public function getLastName(): string { return $this->lastName; }
    public function getName(): string {
        return $this->firstName . " " . $this->lastName;
    }
    public function getSalary(): int { return $this->salary; }
    public function setSalary(int $salary): void {
        $this->salary = $salary;
    }

    public function getAnnualSalary(): int {
        return $this->salary * 12;
    }
 public function raiseSalary() {
    $percent = 10; // default  
    $this->salary = round($this->salary * (1 + $percent / 100));
    return $this->salary;
}
    public function __toString(): string {
        return
         "Employee[id={$this->id}, name={$this->getName()}, salary={$this->salary}]";
    }
}
                           
?>

<?php
class Employee1 {
    private int $id;
    private string $firstName;
    private string $lastName;
    private int $salary; 

    protected function __construct(int $id, string $firstName, string $lastName, int $salary) {
        $this->id = $id;
        $this->firstName = $firstName;
        $this->lastName  = $lastName;
        $this->salary    = $salary;
    }

    public static function create(int $id, string $firstName, string $lastName, int $salary): self {
        return new self($id, $firstName, $lastName, $salary);
    }

    public function getId(): int { return $this->id; }
    public function getFirstName(): string { return $this->firstName; }
    public function getLastName(): string { return $this->lastName; }
    public function getName(): string { return "{$this->firstName} {$this->lastName}"; }
    public function getSalary(): int { return $this->salary; }

    public function setSalary(int $salary): void { $this->salary = $salary; }

    public function getAnnualSalary(): int {
        return $this->salary * 12;
    }

    public function raiseSalary(float $percent = 10): int {
        $this->salary = round($this->salary * (1 + $percent / 100));
        return $this->salary;
    }

    public function __toString(): string {
        return "Employee[id={$this->id}, name={$this->getName()}, salary={$this->salary}]";
    }
}
function printEmployeeInfo(Employee1 $e): void {
    echo $e . "<br>";
    echo "Monthly: " . $e->getSalary() . "<br>";
    echo "Annual: " . $e->getAnnualSalary() . "<br>";
    $e->raiseSalary(30);
    echo "After raise: " . $e->getSalary() . "<br>";
    echo $e . "<br>";
}