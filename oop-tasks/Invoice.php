<?php
class InvoiceItem {
    private string $id;
    private string $desc;
    private int $qty;
    private float $unitPrice;

    public function __construct(string $id, string $desc, int $qty, float $unitPrice) {
        $this->id = $id;
        $this->desc = $desc;
        $this->qty = $qty;
        $this->unitPrice = $unitPrice;
    }

    public function getId(): string {
        return $this->id;
    }
    public function getDesc(): string {
        return $this->desc;
    }
    public function getQty(): int {
        return $this->qty;
    }
    public function getUnitPrice(): float {
        return $this->unitPrice;
    }

    public function setQty(int $qty): void {
        $this->qty = $qty;
    }

    public function setUnitPrice(float $unitPrice): void {
        $this->unitPrice = $unitPrice;
    }

    public function getTotal(): float {
        return $this->qty * $this->unitPrice;
    }

    public function __toString(): string {
        return "InvoiceItem[id={$this->id},
        desc={$this->desc},qty={$this->qty},
        unitPrice={$this->unitPrice}]";
    }

    public function output(): void {
        echo $this . "<br>";
        echo "Total = {$this->getTotal()}<br><br>";
    }
}


?>

<?php

final class SecureInvoiceItem {
    public function __construct(
        private string $id,
        private string $desc,
        private int $qty,
        private float $unitPrice,
         bool $allowNegative = false
    ) {
            if (!$allowNegative && ($qty < 0 || $unitPrice < 0)) {
        echo "nah Negative values ain't allowed.<br>";
        $qty = 0;
        $unitPrice = 0;
    }
    }

    public function id(): string      
       { return $this->id; }
    public function desc(): string      
     { return $this->desc; }
    public function qty(): int       
        { return $this->qty; }
    public function unitPrice(): float   
    { return $this->unitPrice; }
    public function total(): float    
       { return $this->qty * $this->unitPrice; }

    public function __toString(): string {
        return "InvoiceItem[id={$this->id},
        desc={$this->desc},qty={$this->qty},
        unitPrice={$this->unitPrice}]";
    }

    public function withQty(int $qty): self {
        return new self($this->id, $this->desc, $qty, $this->unitPrice);
    }

    public function withUnitPrice(float $price): self {
        return new self($this->id, $this->desc, $this->qty, $price);
    }

}

function outputInvoiceItem(SecureInvoiceItem $item): void {
    echo $item . "<br>";
    echo "Qty: " . $item->qty() . "<br>";
    echo "Unit Price: " . $item->unitPrice() . "<br>";
    echo "Total: " . $item->total() . "<br><br>";
}
