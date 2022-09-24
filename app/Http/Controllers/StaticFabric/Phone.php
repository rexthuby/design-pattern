<?php

namespace App\Http\Controllers\SimpleFabric;

class Phone implements PhoneInterface
{
    private float $width;
    private float $height;
    private string $model;
    private string $brand;

    public function setSize(float $width, float $height): void
    {
        $this->width = $width;
        $this->height = $height;
    }

    public function setModel(string $model): void
    {
        $this->model = $model;
    }

    public function setBrand(string $brand): void
    {
        $this->brand = $brand;
    }
}
