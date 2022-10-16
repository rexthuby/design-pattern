<?php

namespace App\Http\Controllers\Bridge\Realization;

use App\Http\Controllers\Bridge\Product;

class ProductWidgetRealization implements WidgetRealizationInterface
{
    private Product $entity;

    public function __construct(Product $entity)
    {
        $this->entity = $entity;
    }

    public function getId(): int
    {
        return $this->entity->id;
    }

    public function getName(): string
    {
        return $this->entity->name;
    }

    public function getDescription(): string
    {
        return $this->entity->description;
    }
}
