<?php

namespace App\Http\Controllers\SimpleFabric;

interface SofaInterface
{
    /**
     * @param int $width in sm
     * @param int $depth in sm
     * @return void
     */
    public function setSize(int $width, int $depth): void;

    /**
     * @param string $brand
     * @return void
     */
    public function setBrand(string $brand): void;
}
