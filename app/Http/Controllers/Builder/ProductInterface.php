<?php

namespace App\Http\Controllers\Builder;

interface ProductInterface
{
    public function setName(string $name): ProductInterface;

    public function setPrice(float $price): ProductInterface;

    public function setDiscount(int $discount): ProductInterface;

    public function setCategory(string $category): ProductInterface;
}
