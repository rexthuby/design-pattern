<?php

namespace App\Http\Controllers\SimpleFabric;

interface PhoneInterface
{

    /**
     * @param float $width in mm
     * @param float $height in mm
     * @return void
     */
    public function setSize(float $width, float $height):void;

    /**
     * @param string $model Iphone 11 pro, Samsung Galaxy 12 etc
     * @return void
     */
    public function setModel(string $model):void;

    /**
     * @param string $brand Apple, Samsung etc
     * @return void
     */
    public function setBrand(string $brand):void;
}
