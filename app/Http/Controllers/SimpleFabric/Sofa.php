<?php

namespace App\Http\Controllers\SimpleFabric;

class Sofa implements SofaInterface
{
    private int $width;
    private int $depth;
    private string $brand;


    public function setSize(int $width, int $depth): void
    {
        $this->width = $width;
        $this->depth = $depth;
    }

    public function setBrand(string $brand): void
    {
        $this->brand = $brand;
    }
}
