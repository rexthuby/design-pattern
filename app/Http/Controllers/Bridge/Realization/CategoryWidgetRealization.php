<?php

namespace App\Http\Controllers\Bridge\Realization;

use App\Http\Controllers\Bridge\Category;

class CategoryWidgetRealization implements WidgetRealizationInterface
{
    private Category $entity;

    public function __construct(Category $entity)
    {
        $this->entity = $entity;
    }

    public function getId(): int
    {
        return $this->entity->id;
    }

    public function getName(): string
    {
        return $this->entity->title;
    }

    public function getDescription(): string
    {
        return $this->entity->description;
    }
}
