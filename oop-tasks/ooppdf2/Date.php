<?php
class Date {
    private int $day;
    private int $month;
    private int $year;

    public function __construct(int $day, int $month, int $year) {
        $this->day = $day;
        $this->month = $month;
        $this->year = $year;
    }

    public function getDay(): int {
        return $this->day;
    }

    public function getMonth(): int {
        return $this->month;
    }

    public function getYear(): int {
        return $this->year;
    }

    public function setDay(int $day): void {
        $this->day = $day;
    }

    public function setMonth(int $month): void {
        $this->month = $month;
    }

    public function setYear(int $year): void {
        $this->year = $year;
    }

    public function setDate(int $day, int $month, int $year): void {
        $this->day = $day;
        $this->month = $month;
        $this->year = $year;
    }

   public function __toString(): string {
    [$dayStr, $monthStr] = array_map(
        fn($n) => ($n < 10 ? '0' : '') . $n,
        [$this->day, $this->month]
    );

    return "$dayStr/$monthStr/{$this->year}";
}

}
function testDate(): void {
    $date = new Date(7, 10, 2025);
    echo "Current: $date <br>";

    $date->setDate(1, 1, 2026);
    echo "Updated: $date <br>";
}
