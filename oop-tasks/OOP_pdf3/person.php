<?php
abstract class Person0 {
    public function __construct(
        protected string $name,
        protected string $address
    ) {}

    public function getName(): string { 
        return $this->name; }
    public function getAddress(): string { 
        return $this->address; }
    public function setAddress(string $addr): void {
        $this->address = $addr;
    }

    abstract protected function typeLabel(): string;
    abstract protected function extraFields(): array;

     public function __toString(): string {
        $base = "Person[name={$this->name},address={$this->address}]";
        $pairs = [];
        foreach ($this->extraFields() as $k => $v) {
            $pairs[] = "{$k}={$v}";
        }
        $suffix = $pairs ? ', ' . implode(', ', $pairs) : '';
        return $this->typeLabel() . "[$base$suffix]";
    }
}

class Student0 extends Person0 {
    public function __construct(
        string $name, string $address,
        private string $program, private int $year, private float $fee
    ) {
        parent::__construct($name, $address);
    }

    public function getProgram(): string { return $this->program; }
    public function setProgram(string $p): void { $this->program = $p; }

    public function getYear(): int { return $this->year; }
    public function setYear(int $y): void { $this->year = $y; }

    public function getFee(): float { return $this->fee; }
    public function setFee(float $f): void { $this->fee = $f; }

    protected function typeLabel(): string { return 'Student'; }
    protected function extraFields(): array {
        return ['program' => $this->program, 'year' => $this->year, 'fee' => $this->fee];
    }
}

class Staff0 extends Person0 {
    public function __construct(
        string $name, string $address,
        private string $school, private float $pay
    ) {
        parent::__construct($name, $address);
    }

    public function getSchool(): string { return $this->school; }
    public function setSchool(string $s): void { $this->school = $s; }

    public function getPay(): float { return $this->pay; }
    public function setPay(float $p): void { $this->pay = $p; }

    protected function typeLabel(): string { return 'Staff'; }
    protected function extraFields(): array {
        return ['school' => $this->school, 'pay' => $this->pay];
    }
}
