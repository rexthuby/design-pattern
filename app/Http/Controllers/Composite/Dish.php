<?php

namespace App\Http\Controllers\Composite;

class Dish implements CompositeCalcInterface
{
    private string $name;
    private float $margin;
    private float $price;
    private array $ingredients;

    /**
     * @param string $name
     * @param float $margin
     */
    public function __construct(string $name, float $margin)
    {
        $this->name = $name;
        $this->margin = $margin;
    }

    public function calcPrice(): float
    {
        if (!isset($this->ingredients)) {
            throw new \Exception('0 ingredient in the dish');
        }
        if (!isset($this->price)) {
            $this->setPrice();
        }
        return $this->price;
    }

    /**
     * @param CompositeCalcInterface $ingredient
     * @return Dish
     */
    public function add(CompositeCalcInterface $ingredient): Dish
    {
        $this->ingredients[] = $ingredient;
        if (isset($this->price)) {
            $this->setPrice();
        }
        return $this;
    }

    private function setPrice(): void
    {
        $calc = function (CompositeCalcInterface $ingredient) {
            return $ingredient->calcPrice();
        };
        $dishStartPrice = array_map($calc, $this->ingredients);
        $ingredientsPrice = array_sum($dishStartPrice);
        $dishPrice = $ingredientsPrice * $this->margin + $ingredientsPrice;
        $this->price = round($dishPrice, 2);
    }
}
