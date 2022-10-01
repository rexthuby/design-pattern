<?php

namespace App\Http\Controllers\Builder;

class ProductBuilderManager
{
    private ProductBuilderInterface $builder;

    public function setBuilder(ProductBuilderInterface $builder): ProductBuilderManager
    {
        $this->builder = $builder;
        return $this;
    }

    public function getPhoneBuilder()
    {
        return $this->builder->setCategory('phone')->setDiscount(10);
    }
}
