<?php

namespace App\Http\Controllers\Manager;

interface PaymentInterface
{
    /**
     * @param float $amount
     * @return string
     * @throws \Exception
     */
    public function pay(float $amount):string;
}
