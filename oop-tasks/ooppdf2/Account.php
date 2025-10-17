<?php

abstract class AccountBase {
    protected string $id;
    protected string $name;
    protected int $balance;

    public function __construct(string $id, string $name, int $balance = 0) {
        $this->id = $id;
        $this->name = $name;
        $this->balance = $balance;
    }

    public function getId(): string {
        return $this->id;
    }

    public function getName(): string {
        return $this->name;
    }

    public function getBalance(): int {
        return $this->balance;
    }

    public function credit(int $amount): int {
        $this->balance += $amount;
        return $this->balance;
    }

    public function debit(int $amount): int {
        if ($amount <= $this->balance) {
            $this->balance -= $amount;
        } else {
            echo "Debit failed: Amount exceeded balance<br>";
        }
        return $this->balance;
    }

    abstract public function transferTo(AccountBase $other, int $amount): int;

    public function __toString(): string {
        return "Account[id={$this->id},name={$this->name},balance={$this->balance}]";
    }
}
class CustomerAccount extends AccountBase {
    public function transferTo(AccountBase $other, int $amount): int {
        if ($amount <= $this->balance) {
            $this->balance -= $amount;
            $other->credit($amount);
        } else {
            echo "Transfer failed<br>";
        }
        return $this->balance;
    }
}
function printAccountInfo(AccountBase $acc): void {
    echo $acc . "<br>";
}
?>

<?php
class Account {
    private string $id;
    private string $name;
    private int $balance;

    // Constructor with default balance = 0
    public function __construct(string $id, string $name, int $balance = 0) {
        $this->id = $id;
        $this->name = $name;
        $this->balance = $balance;
    }

    public function getId(): string {
        return $this->id;
    }

    public function getName(): string {
        return $this->name;
    }

    public function getBalance(): int {
        return $this->balance;
    }

    public function credit(int $amount): int {
        $this->balance += $amount;
        return $this->balance;
    }

    public function debit(int $amount): int {
        if ($amount <= $this->balance) {
            $this->balance -= $amount;
        } else {
            echo "Amount exceeded balance<br>";
        }
        return $this->balance;
    }

    public function transferTo(Account $anotherAccount, int $amount): int {
        if ($amount <= $this->balance) {
            $this->balance -= $amount;
            $anotherAccount->credit($amount);
        } else {
            echo "Amount exceeded balance<br>";
        }
        return $this->balance;
    }

    public function __toString(): string {
        return "Account[id={$this->id},name={$this->name},balance={$this->balance}]";
    }

    public function output(): void {
        echo $this . "<br>";
    }
}
function runAccount(): void {
    $acc1 = new Account("B001", "Yard", 500);
    $acc2 = new Account("B002", "Sara", 600);
    $acc1->output();
    $acc2->output();
    $acc1->credit(200);
    $acc1->debit(100);
    $acc1->transferTo($acc2, 250);
    $acc1->output();
    $acc2->output();
}
