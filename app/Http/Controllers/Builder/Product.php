<?php

namespace App\Http\Controllers\Builder;

class Product implements ProductInterface
{
    private string $name;
    private string $category;
    private float $price;
    private int $discount;

    public function setName(string $name): ProductInterface
    {
        $this->name = $name;
        return $this;
    }

    public function setPrice(float $price): ProductInterface
    {
        $this->price = $price;
        return $this;
    }

    public function setDiscount(int $discount): ProductInterface
    {
        $this->discount = $discount;
        return $this;
    }

    public function setCategory(string $category): ProductInterface
    {
        $this->category = $category;
        return $this;
    }
}
