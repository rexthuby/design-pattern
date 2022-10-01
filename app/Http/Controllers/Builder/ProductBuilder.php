<?php

namespace App\Http\Controllers\Builder;

class ProductBuilder implements ProductBuilderInterface
{
    private ProductInterface $product;

    public function __construct()
    {
        return $this->createBuilder();
    }

    public function createBuilder(): ProductBuilderInterface
    {
        $this->product = new Product();
        return $this;
    }

    public function setName(string $name): ProductBuilderInterface
    {
        $this->product->setName($name);
        return $this;
    }

    public function setPrice(float $price): ProductBuilderInterface
    {
        $this->product->setPrice($price);
        return $this;
    }

    public function setDiscount(int $discount): ProductBuilderInterface
    {
        $this->product->setDiscount($discount);
        return $this;
    }

    public function setCategory(string $category): ProductBuilderInterface
    {
        $this->product->setCategory($category);
        return $this;
    }

    public function getProduct(): ProductInterface
    {
        $product = $this->product;
        $this->createBuilder();
        return $product;
    }
}
