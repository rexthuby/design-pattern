<?php

namespace App\Http\Controllers\Builder;

class PageController
{
    public function start()
    {
        $productBuilder = new ProductBuilder();
        $product = $productBuilder->setName('Iphone 13')
            ->setCategory('phone')
            ->setPrice(999)
            ->getProduct();
        $productBuilderManager = new ProductBuilderManager();
        $phoneBuilder = $productBuilderManager->setBuilder($productBuilder)
            ->getPhoneBuilder()
            ->setName('Galaxy A50')
            ->setPrice(500);
        dump($product, $phoneBuilder);
    }
}
