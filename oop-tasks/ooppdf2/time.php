<?php

class Time {
    private int $hour;
    private int $minute;
    private int $second;

    public function __construct(int $hour, int $minute, int $second) {
        $this->hour = $hour;
        $this->minute = $minute;
        $this->second = $second;
    }

    public function getHour(): int { return $this->hour; }
    public function getMinute(): int { return $this->minute; }
    public function getSecond(): int { return $this->second; }

    public function setHour(int $hour): void { $this->hour = $hour; }
    public function setMinute(int $minute): void { $this->minute = $minute; }
    public function setSecond(int $second): void { $this->second = $second; }

    public function setTime(int $hour, int $minute, int $second): void {
        $this->hour = $hour;
        $this->minute = $minute;
        $this->second = $second;
    }

    private function incrementMin(): void {
        $this->minute++;
        if ($this->minute >= 60) {
            $this->minute = 0;
            $this->hour = ($this->hour + 1) % 24;
        }
    }

    private function decrementMin(): void {
        $this->minute--;
        if ($this->minute < 0) {
            $this->minute = 59;
            $this->hour = ($this->hour - 1 + 24) % 24;
        }
    }
    public function nextSecond(): self {
        $this->second++;
        if ($this->second >= 60) {
            $this->second = 0;
            $this->incrementMin();
        }
        return $this;
    }
    public function previousSecond(): self {
        $this->second--;
        if ($this->second < 0) {
            $this->second = 59;
            $this->decrementMin();
        }
        return $this;
    }

    public function __toString(): string {
        $wedges = [$this->hour, $this->minute, $this->second];
        $withLeadingZero = array_map(fn($n) => ($n < 10 ? "0" : "") . $n, $wedges);
        return implode(":", $withLeadingZero);
    }
}


