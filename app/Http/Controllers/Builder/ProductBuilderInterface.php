<?php

namespace App\Http\Controllers\Builder;

interface ProductBuilderInterface
{
    public function createBuilder(): ProductBuilderInterface;

    public function setName(string $name): ProductBuilderInterface;

    public function setPrice(float $price): ProductBuilderInterface;

    public function setDiscount(int $discount): ProductBuilderInterface;

    public function setCategory(string $category): ProductBuilderInterface;

    public function getProduct(): ProductInterface;
}
