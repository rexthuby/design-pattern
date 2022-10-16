<?php

namespace App\Http\Controllers\Composite;

class Ingredient implements CompositeCalcInterface
{
    private string $name;
    private float $startPrice;
    private float $margin;
    private float $finalPrice;

    public function __construct(string $name, float $startPrice, float $margin)
    {
        $this->name = $name;
        $this->startPrice = $startPrice;
        $this->margin = $margin;
    }

    public function calcPrice(): float
    {
        if (!isset($this->finalPrice)) {
            $this->setFinalPrice();
        }
        return $this->finalPrice;
    }

    private function setFinalPrice(): void
    {
        $this->finalPrice = round($this->margin * $this->startPrice + $this->startPrice, 2);
    }
}
