<?php

namespace App\Http\Controllers\Composite;

class Order implements CompositeCalcInterface
{
    private float $price;
    private array $dishes;

    public function calcPrice(): float
    {
        if (!isset($this->dishes)) {
            throw new \Exception('0 dishes in the order');
        }
        if (!isset($this->price)) {
            $this->setPrice();
        }
        return $this->price;
    }

    /**
     * @param CompositeCalcInterface $dish
     * @return Order
     */
    public function add(CompositeCalcInterface $dish): Order
    {
        $this->dishes[] = $dish;
        if (isset($this->price)) {
            $this->setPrice();
        }
        return $this;
    }

    private function setPrice(): void
    {
        $calc = function (CompositeCalcInterface $dish) {
            return $dish->calcPrice();
        };
        $dishesPrice = array_sum(array_map($calc, $this->dishes));
        $this->price = round($dishesPrice, 1);
    }
}
